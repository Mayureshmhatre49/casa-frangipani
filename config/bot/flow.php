<?php

return [

    'ask_name' => [
        'message' => '👋 Hi! May I know your name?',
        'field'   => 'name',
        'type'    => 'text',
        'rules'   => 'required|string|min:2',
        'next'    => 'ask_guests',
    ],

    'ask_guests' => [
        'message' => '👥 How many guests will be staying, :name?',
        'field'   => 'guests',
        'type'    => 'number',
        'rules'   => 'required|integer|min:1|max:30',
        'next'    => 'ask_budget',
    ],

    'ask_budget' => [
        'message' => '💰 What’s your approximate budget per night?',
        'field'   => 'budget',
        'type'    => 'option',
        'options' => ['₹30k–₹45k', '₹45k–₹70k', '₹70k+', 'Not sure'],
        'rules'   => 'required|string',
        'next'    => 'ask_occasion',
    ],

    'ask_occasion' => [
        'message' => '🎉 What’s the occasion?',
        'field'   => 'occasion',
        'type'    => 'option',
        'options' => ['Family vacation', 'Friends getaway', 'Celebration', 'Corporate stay'],
        'rules'   => 'required|string',
        'next'    => 'ask_checkin',
    ],

    'ask_checkin' => [
        'message' => '📅 Select your check-in date',
        'field'   => 'check_in_date',
        'type'    => 'date',
        'rules'   => 'required|date|after_or_equal:today',
        'next'    => 'ask_checkout',
    ],

    'ask_checkout' => [
        'message' => '📅 Select your check-out date',
        'field'   => 'check_out_date',
        'type'    => 'date',
        'rules'   => 'required|date|after:check_in_date',
        'next'    => 'ask_phone',
    ],

    'ask_phone' => [
        'message' => '📞 Phone number',
        'field'   => 'phone',
        'type'    => 'text',
        'rules'   => 'required|regex:/^[6-9]\d{9}$/',
        'next'    => 'ask_email',
    ],

    'ask_email' => [
        'message' => '📧 Email (optional)',
        'field'   => 'email',
        'type'    => 'email',
        'rules'   => 'nullable|email',
        'next'    => null, // auto-submit
    ],

];
