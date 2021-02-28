<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    use HasFactory;
    protected $table ='info';
    protected $guarded=[];


    function getCategories(){
        return $this->belongsTo('App\Models\Categories', 'category_id', 'id');
    }
    function getPeriod(){
        return $this->belongsTo('App\Models\Period', 'period_id', 'id');
    }
    function getDate(){
    return $this->belongsTo('App\Models\Calendar', 'date_id', 'id');
    }
}

