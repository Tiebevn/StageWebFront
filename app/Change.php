<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Change extends Model
{
    protected $fillable = [
        'user_id',
        'port_id',
        'template_id'
    ];

    public function port() {
        return $this->belongsTo('App\Port');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function template() {
        return $this->belongsTo('App\Template');
    }
}
