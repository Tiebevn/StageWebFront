<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    protected $fillable = [
        'name',
        'ip',
    ];

    public function ports()
    {
        return $this->hasMany('App\Port');
    }
}
