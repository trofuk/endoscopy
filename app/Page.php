<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    //
    protected $fillable = ['name', 'alias', 'text_1', 'text_2', 'text_3', 'image_1', 'image_2', 'image_3'];
}
