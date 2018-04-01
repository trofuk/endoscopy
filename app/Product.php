<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = ['name', 'type', 'model', 'filter', 'description', 'image_main', 'image_1', 'image_2', 'image_3', 'image_4'];
}
