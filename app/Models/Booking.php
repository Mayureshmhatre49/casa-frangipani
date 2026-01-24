<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Booking extends Model
{
    protected $fillable = [
        'check_in',
        'check_out',
        'guest_count',

        'customer_name',
        'customer_email',
        'customer_phone',

        'status',
        'source',

        'price_per_night',
        'nights',
        'total_price',

        'payment_status',
        'payment_reference',

        'admin_notes',
        'customer_notes',
    ];

    protected $casts = [
        'check_in' => 'date',
        'check_out' => 'date',
    ];

    /* -------------------------
     | Computed attributes
     |--------------------------*/

    public function getComputedNightsAttribute(): int
    {
        if (!$this->check_in || !$this->check_out) {
            return 0;
        }

        return Carbon::parse($this->check_in)
            ->diffInDays(Carbon::parse($this->check_out));
    }

    public function getDateRangeAttribute(): string
    {
        return $this->check_in->format('d M') . ' - ' . $this->check_out->format('d M');
    }

    public function isConfirmed(): bool
    {
        return $this->status === 'confirmed';
    }
}
