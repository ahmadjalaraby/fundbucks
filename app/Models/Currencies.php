<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currencies extends Model
{
    use HasFactory;

    protected $fillable = [
        'currency_id',
        'currency_sign',
        'currency_value',
    ];
}
