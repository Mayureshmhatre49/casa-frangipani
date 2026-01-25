<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\BookingService;
use App\Models\Booking;
use Illuminate\Support\Facades\Mail;
use App\Mail\BookingReceived;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    public function enquire(Request $request, BookingService $bookingService)
    {
        $validated = $request->validate([
            'check_in' => 'required|date',
            'check_out' => 'required|date|after:check_in',
            'guest_count' => 'required|integer|min:1',
            'name' => 'required|string',
            'phone' => 'required|string',
            'email' => 'nullable|email',
        ]);

        $data = [
            'check_in' => $validated['check_in'],
            'check_out' => $validated['check_out'],
            'guest_count' => $validated['guest_count'],
            'customer_name' => $validated['name'],
            'customer_phone' => $validated['phone'],
            'customer_email' => $validated['email'] ?? null,
            'customer_notes' => $request->input('customer_notes'),
            'status' => 'pending',
            'source' => 'website',
        ];

        $prepared = $bookingService->prepareBookingData($data);

        \Log::info('BookingController@enquire received', $data);

        $booking = null;
        DB::transaction(function () use ($prepared, &$booking) {
            $booking = Booking::create($prepared);
        });

        try {
            $adminEmail = env('ADMIN_EMAIL', config('mail.from.address')) ?: null;
            if ($adminEmail) Mail::to($adminEmail)->send(new BookingReceived($booking));
            if (!empty($validated['email'])) Mail::to($validated['email'])->send(new BookingReceived($booking, true));
        } catch (\Exception $e) {
            // ignore
        }

        return back()->with('success', 'Booking request received — we will contact you shortly.');
    }
}
