<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materialbasic extends Model
{
    protected $table = 'material_basic';
    protected $fillable = [
    	'name', 'price','donvi'
    ];
}