<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BotEnquiry extends Model
{
    protected $table = 'bot_enquiries';

    protected $fillable = [
        'name',
        'phone',
        'email',
        'check_in',
        'check_out',
        'guests',
        'budget_range',
        'occasion',
        'food_preference',
        'bot_source',
        'bot_status',
        'bot_payload',
    ];

    protected $casts = [
        'check_in' => 'date',
        'check_out' => 'date',
        'bot_payload' => 'array',
    ];

    /* -------------------------
        Bot helpers
    --------------------------*/

    public function markContacted(): void
    {
        $this->update(['bot_status' => 'contacted']);
    }

    public function markClosed(): void
    {
        $this->update(['bot_status' => 'closed']);
    }
}
