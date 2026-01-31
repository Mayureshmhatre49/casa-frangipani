<?php

namespace App\Livewire;

use Livewire\Component;
use App\Services\BookingService;
use App\Models\Booking;
use App\Mail\BookingReceived;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;

class BookingForm extends Component
{
    public $check_in;
    public $check_out;
    public $guest_count = 2;

    public $occasion;
    public $food_provision;

    public $name;
    public $phone;
    public $email;
    public $customer_notes;

    protected function rules()
    {
        return [
            'check_in'       => 'required|date',
            'check_out'      => 'required|date|after:check_in',
            'guest_count'    => 'required|integer|min:1',

            'occasion'       => 'nullable|string',
            'food_provision' => 'nullable|string',

            'name'           => 'required|string',
            'phone'          => 'required|string',
            'email'          => 'nullable|email',
        ];
    }

    public function submit(BookingService $bookingService)
    {
        $this->validate();

        // Combine notes safely (same logic as before)
        $notes = trim(
            (!empty($this->occasion) ? "Occasion: {$this->occasion}\n" : '') .
            (!empty($this->food_provision) ? "Food: {$this->food_provision}\n" : '') .
            ($this->customer_notes ?? '')
        );

        $data = [
            'check_in'        => $this->check_in,
            'check_out'       => $this->check_out,
            'guest_count'     => $this->guest_count,
            'customer_name'   => $this->name,
            'customer_phone'  => $this->phone,
            'customer_email'  => $this->email,
            'customer_notes'  => $notes,
            'status'          => 'pending',
            'source'          => 'website',
        ];

        try {
            $prepared = $bookingService->prepareBookingData($data);

            $booking = null;

            DB::transaction(function () use ($prepared, &$booking) {
                $booking = Booking::create($prepared);
            });

            // 🔔 EMAILS (unchanged, high priority)
            try {
                $adminEmail = env('ADMIN_EMAIL', config('mail.from.address')) ?: 'owner@example.com';

                if ($adminEmail) {
                    Mail::to($adminEmail)->send(new BookingReceived($booking));
                }

                if (!empty($this->email)) {
                    Mail::to($this->email)->send(new BookingReceived($booking, true));
                }
            } catch (\Exception $e) {
                // Intentionally not blocking user flow
                // logger()->error('Booking email failed: ' . $e->getMessage());
            }

            // ✅ REDIRECT TO THANK YOU PAGE
            return redirect()->route('thank.you');

        } catch (ValidationException $e) {
            $this->addError(
                'check_in',
                $e->validator->errors()->first('check_in')
            );
        }
    }

    public function render()
    {
        return view('livewire.booking-form');
    }
}
