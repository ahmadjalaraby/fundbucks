<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'plan_id',
        'amount',
        'interest_type',
        'interest_amount',
        'total_return',
        'total_paid',
        'next_return_date',
        'status',
    ];

    public function adminNotifications()
    {
        return $this->morphMany(AdminNotification::class, 'typeable');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function plan()
    {
        return $this->belongsTo(Plans::class);
    }
}
