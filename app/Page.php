<?php

namespace App;

use App\Exceptions\PageIsExpiredException;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Page extends Model
{
    protected $fillable = [
    'recipient_name',
    'recipient_email',
    'message',
    'expires_on'
    ];

    protected $dates = ['expires_on'];


    public function scopeWhereIsNotExpired($query, $id)
    {
        $foundPage = $query->find($id);
        // dd($foundPage->expires_on, Carbon::now());
        if(!Carbon::now()->gt($foundPage->expires_on)) {
            return $foundPage;
        }else{
            throw new PageIsExpiredException;    
        }

        
        
        
    }
}
