<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Booking;

class BookingCalendar extends Component
{
    public $bookings = [];

    protected $listeners = [
        'bookingCreated' => 'loadBookings',
    ];

    public function mount()
    {
        $this->loadBookings();
    }

    public function loadBookings()
    {
        $this->bookings = Booking::orderBy('check_in')->get()->map(function ($b) {
            return [
                'id' => $b->id,
                'start' => $b->check_in->toDateString(),
                'end' => $b->check_out->toDateString(),
                'title' => $b->customer_name ?? 'Booking #'.$b->id,
                'status' => $b->status,
                'nights' => $b->nights ?? $b->computed_nights,
                'total' => $b->total_price ?? null,
            ];
        })->toArray();
    }

    public function render()
    {
        return view('livewire.booking-calendar');
    }
}
