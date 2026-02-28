<?php

namespace App\Http\Controllers;

use App\Models\BuyEnquiry;
use Illuminate\Http\Request;

class BuyEnquiryController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'           => 'required|string|max:255',
            'phone'          => 'required|string|max:30',
            'email'          => 'nullable|email|max:255',
            'preferred_date' => 'nullable|date',
            'message'        => 'nullable|string|max:2000',
        ]);

        BuyEnquiry::create(array_merge($validated, [
            'source' => 'buy-page',
        ]));

        return response()->json([
            'success' => true,
            'message' => 'Thank you. Our private client desk will contact you shortly.',
        ]);
    }
}
