<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    protected $table='categories';
    protected $guarded=['id'];

    function getInfo()
    {
        return $this->hasMany('App\Models\Info', 'category_id', 'id');
    }
}
