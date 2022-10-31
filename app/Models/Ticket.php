<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'alias',
        'desc',
    ];

    public function adminNotifications()
    {
        return $this->morphMany(AdminNotification::class, 'typeable');
    }

    public function users(){
        return $this->belongsToMany(User::class, 'ticket_user')
            ->withPivot('status', 'user_message', 'admin_message');
    }
}
