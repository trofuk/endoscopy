<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fact extends Model
{
    //
    protected $fillable = ['name', 'text', 'counter', 'icon'];
}
