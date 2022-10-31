<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvestmentType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'percentage',
    ];

    public function plans()
    {
        return $this->belongsToMany(Plans::class, 'investment_type_plan');
    }
}
