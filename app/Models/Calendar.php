<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    use HasFactory;
    protected $table='calendar';
    protected $guarded=['id'];

    function getInfo(){
        return $this->hasOne('App\Models\Info', 'date_id', 'id');
    }

}
