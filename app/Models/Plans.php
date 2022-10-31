<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plans extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'interest_percent',
        'plan_type',
        'interest_type',
        'withdraw_days',
        'can_add_to_invest',
        'is_active',
        'notes',
    ];

    public function investmentTypes()
    {
        return $this->belongsToMany(InvestmentType::class, 'investment_type_plan');
    }

    public function investments()
    {
        return $this->hasMany(Investment::class);
    }
}
