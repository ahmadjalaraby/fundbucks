<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'username',
        'avatar',
        'firstname',
        'lastname',
        'gender',
        'address',
        'city',
        'state',
        'zip',
        'bank_username',
        'bank_name',
        'bank_user_id',
        'iban',
        'balance',
        'mobile',
        'is_banned',
        'ver_cod',
        'ver_code_send_at',
        'country_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function adminNotifications()
    {
        return $this->morphMany(AdminNotification::class, 'typeable');
    }

    public function tickets()
    {
        return $this->belongsToMany(Ticket::class, 'ticket_user')
            ->withPivot('status', 'user_message', 'admin_message');
    }

    public function plan()
    {
        return $this->belongsTo(Plans::class);
    }

    public function deposits()
    {
        return $this->hasMany(Deposit::class);
    }

    public function withdrawals()
    {
        return $this->hasMany(Withdrawal::class);
    }

    public function investments()
    {
        return $this->hasMany(Investment::class);
    }

    public function userLogins()
    {
        return $this->hasMany(UserLogin::class);
    }

    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

}
