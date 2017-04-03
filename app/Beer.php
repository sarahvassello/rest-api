<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beer extends Model
{
    //protects from mass assigning something to an object 
    protected $guarded = [];
}
