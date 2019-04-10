<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    protected $fillable = [
        'name',
        'vlan'
    ];

    protected function changes()
    {
        return $this->hasMany('App\Change');
    }
}
