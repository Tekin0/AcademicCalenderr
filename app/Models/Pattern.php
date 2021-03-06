<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pattern extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'pattern';
    protected $guarded = ['id'];
    protected $fillable = ['pattern','category_id','period_id'];

}
