<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    use HasFactory;
    protected $table='calendar';
    protected $guarded=['id'];

    protected $casts = [
        'release_date' => 'datetime:Y-m-d',
    ];

    function getInfo(){
        return $this->hasOne('App\Models\Info', 'date_id', 'id');
    }

    function getCategories(){
        return $this->belongsTo('App\Models\Categories', 'category_id', 'id');
    }
    function getPeriod(){
        return $this->belongsTo('App\Models\Period', 'period_id', 'id');
    }



}
