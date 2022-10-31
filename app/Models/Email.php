<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    use HasFactory;

    protected $fillable = [
        'act',
        'name',
        'subj',
        'email_body',
        'sms_body',
        'shortcodes',
        'email_status',
        'sms_status',
    ];
}
