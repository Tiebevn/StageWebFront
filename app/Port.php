<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Port extends Model
{
    protected $fillable = [
        'name',
        'device_id',
        'vlan',
        'description'
    ];

    public function device()
    {
        return $this->belongsTo('App\Device');
    }

    public function changes()
    {
        return $this->hasMany('App\Change');
    }
}
