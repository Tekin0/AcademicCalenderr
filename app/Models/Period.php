<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    use HasFactory;
    protected $table='period';
    protected $guarded=[];

    function getInfo()
    {
        return $this->hasMany('App\Models\Period', 'period_id', 'id');
    }
}
