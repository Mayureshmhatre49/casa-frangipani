<?php

namespace App\Livewire;

use Livewire\Component;
use App\Services\BookingService;
use App\Models\Booking;
use Illuminate\Support\Facades\DB;
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

            DB::transaction(function () use ($prepared) {
                Booking::create($prepared);
            });

            session()->flash('success', 'Booking request received — we will contact you shortly.');

            $this->reset(['check_in', 'check_out', 'guest_count', 'name', 'phone', 'email', 'customer_notes']);

        } catch (ValidationException $e) {
            $this->addError('check_in', $e->validator->errors()->first('check_in'));
        }
    }

    public function render()
    {
        return view('livewire.booking-form');
    }
}
