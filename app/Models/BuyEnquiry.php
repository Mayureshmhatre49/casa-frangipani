<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BuyEnquiry extends Model
{
    protected $table = 'buy_enquiries';

    protected $fillable = [
        'name',
        'phone',
        'email',
        'preferred_date',
        'message',
        'source',
        'status',
    ];

    protected $casts = [
        'preferred_date' => 'datetime',
    ];
}
