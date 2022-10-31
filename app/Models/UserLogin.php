<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLogin extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'user_ip',
        'city',
        'country',
        'country_code',
        'longitude',
        'latitude',
        'os',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
