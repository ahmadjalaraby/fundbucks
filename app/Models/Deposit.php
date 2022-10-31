<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    use HasFactory;

    protected $fillable = [
        'gateway_id',
        'user_id',
        'amount',
        'currency_id',
        'charge',
        'final_amount',
        'after_charge',
        'status',
        'admin_feedback',
    ];

    public function adminNotifications()
    {
        return $this->morphMany(AdminNotification::class, 'typeable');
    }

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function currency(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Currencies::class);
    }

    public function gateway()
    {
        return $this->belongsTo(Gateway::class);
    }
}
