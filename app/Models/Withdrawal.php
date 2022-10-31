<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdrawal extends Model
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
        'withdraw_information',
        'admin_feedback',
    ];

    public function gateway()
    {
        return $this->belongsTo(Gateway::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function currency()
    {
        return $this->belongsTo(Currencies::class);
    }

    public function adminNotifications()
    {
        return $this->morphMany(AdminNotification::class, 'typeable');
    }
}
