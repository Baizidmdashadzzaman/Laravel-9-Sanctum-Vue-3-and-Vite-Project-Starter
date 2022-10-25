<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'site_name',
        'site_phone',
        'site_email',
        'site_logo',
        'site_favicon',
        'site_description',
        'site_sms_api',
    ];

}
