<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    protected $table = 'device';
    
    protected $fillable = [
        'user_id',
        'device',
        'platform',
        'platform_version',
        'browser',
        'browser_version'
    ];
}
