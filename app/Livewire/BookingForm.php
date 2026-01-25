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

    public $name;
    public $phone;
    public $email;
    public $customer_notes;
    public $submitted = false;

    protected function rules()
    {
        return [
            'check_in' => 'required|date',
            'check_out' => 'required|date|after:check_in',
            'guest_count' => 'required|integer|min:1',

            'name' => 'required|string',
            'phone' => 'required|string',
            'email' => 'nullable|email',
        ];
    }

    public function submit(BookingService $bookingService)
    {
        $this->validate();

        $data = [
            'check_in' => $this->check_in,
            'check_out' => $this->check_out,
            'guest_count' => $this->guest_count,
            'customer_name' => $this->name,
            'customer_phone' => $this->phone,
            'customer_email' => $this->email,
            'customer_notes' => $this->customer_notes,
            'status' => 'pending',
            'source' => 'website',
        ];

        try {
            $prepared = $bookingService->prepareBookingData($data);

            $booking = null;
            DB::transaction(function () use ($prepared, &$booking) {
                $booking = Booking::create($prepared);
            });

            // Send notification email to admin and customer (if provided)
            try {
                $adminEmail = env('ADMIN_EMAIL', config('mail.from.address')) ?: 'owner@example.com';
                if ($adminEmail) {
                    Mail::to($adminEmail)->send(new BookingReceived($booking));
                }
                if (!empty($this->email)) {
                    Mail::to($this->email)->send(new BookingReceived($booking, true));
                }
            } catch (\Exception $e) {
                // Log but don't block user flow; admin mail failures shouldn't break booking
                // logger()->error('Booking email send failed: '.$e->getMessage());
            }

            // mark as submitted so the Livewire view can show a thank-you panel
            $this->submitted = true;

            // clear inputs (keep submitted state)
            $this->reset(['check_in', 'check_out', 'guest_count', 'name', 'phone', 'email', 'customer_notes']);

        } catch (ValidationException $e) {
            $this->addError('check_in', $e->validator->errors()->first('check_in'));
        }
    }

    public function render()
    {
        return view('livewire.booking-form');
    }

    public function resetForm()
    {
        $this->submitted = false;
        session()->forget('success');
        $this->reset(['check_in', 'check_out', 'guest_count', 'name', 'phone', 'email', 'customer_notes']);
    }
}
