<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gateway extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'alias',
        'image',
        'status',
        'gateway_parameters',
        'min_amount',
        'max_amount',
    ];

    public function deposits()
    {
        return $this->hasMany(Gateway::class);
    }
}
