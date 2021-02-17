<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    use HasFactory;
    protected $table ='info';
    protected $guarded=[];


    function getDate(){
        return $this->belongsTo('App\Models\Calendar', 'date_id', 'id');
    }
    function getCategory(){
        return $this->belongsTo('App\Models\Category', 'category_id', 'id');
    }
    function getPeriod(){
        return $this->belongsTo('App\Models\Period', 'period_id', 'id');
    }
}

