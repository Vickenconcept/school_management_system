<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'email', 'phone', 'address',
        'school_info', 'status', 'school_currency',
        'currency_position', 'photo', 'school_logo', 'running_session',
        'email_title',
        'email_details',
        'warning_text',
        'socialLink1',
        'socialLink2',
        'socialLink3',
        'email_logo',
        'socialLogo1',
        'socialLogo2',
        'socialLogo3',
        'front_logo',
        'off_pay_ins_file',
    ];
}
