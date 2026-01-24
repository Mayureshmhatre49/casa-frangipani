<?php

namespace App\Services;

use App\Models\Booking;
use Carbon\Carbon;
use Illuminate\Validation\ValidationException;

class BookingService
{
    /**
     * Check if dates overlap with confirmed or blocked bookings.
     */
    public function hasOverlap(
        string $checkIn,
        string $checkOut,
        ?int $ignoreBookingId = null
    ): bool {
        return Booking::query()
            ->whereIn('status', ['confirmed', 'blocked'])
            ->when($ignoreBookingId, fn ($q) =>
                $q->where('id', '!=', $ignoreBookingId)
            )
            ->where(function ($query) use ($checkIn, $checkOut) {
                $query
                    ->whereBetween('check_in', [$checkIn, $checkOut])
                    ->orWhereBetween('check_out', [$checkIn, $checkOut])
                    ->orWhere(function ($q) use ($checkIn, $checkOut) {
                        $q->where('check_in', '<', $checkIn)
                          ->where('check_out', '>', $checkOut);
                    });
            })
            ->exists();
    }

    /**
     * Ensure selected dates are available.
     */
    public function ensureAvailability(
        string $checkIn,
        string $checkOut,
        ?int $ignoreBookingId = null
    ): void {
        if ($this->hasOverlap($checkIn, $checkOut, $ignoreBookingId)) {
            throw ValidationException::withMessages([
                'check_in' => 'Selected dates are not available.',
            ]);
        }
    }

    /**
     * Calculate number of nights.
     */
    public function calculateNights(string $checkIn, string $checkOut): int
    {
        return Carbon::parse($checkIn)
            ->diffInDays(Carbon::parse($checkOut));
    }

    /**
     * Get base nightly rate.
     */
    public function getNightlyRate(): float
    {
        return config('villa.price_per_night', 20000); // INR example
    }

    /**
     * Calculate pricing.
     */
    public function calculateTotalPrice(
        string $checkIn,
        string $checkOut,
        ?float $customRate = null
    ): array {
        $nights = $this->calculateNights($checkIn, $checkOut);
        $rate = $customRate ?? $this->getNightlyRate();

        return [
            'nights' => $nights,
            'price_per_night' => $rate,
            'total_price' => $nights * $rate,
        ];
    }

    /**
     * Prepare booking data before save.
     */
    public function prepareBookingData(
        array $data,
        ?int $ignoreBookingId = null
    ): array {
        $this->ensureAvailability(
            $data['check_in'],
            $data['check_out'],
            $ignoreBookingId
        );

        $pricing = $this->calculateTotalPrice(
            $data['check_in'],
            $data['check_out'],
            $data['price_per_night'] ?? null
        );

        return array_merge($data, $pricing);
    }
}
