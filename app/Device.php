<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Device extends Model
{
    use Sortable;

    protected $fillable = [
        'name',
        'ip',
    ];

    public $sortable = [
      'id',
      'name',
      'ip',
    ];

    public function ports()
    {
        return $this->hasMany('App\Port');
    }
}
