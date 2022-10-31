<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminNotification extends Model
{
    use HasFactory;

    protected $fillable = [
        'typeable_type',
        'typeable_id',
        'title',
        'read_status',
        'click_url',
    ];

    public function typeable()
    {
        return $this->morphTo();
    }
}
