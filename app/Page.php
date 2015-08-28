<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
    'recipient_name',
    'recipient_email',
    'message',
    'expires_on'
    ];

    protected $dates = ['expires_on'];
}
