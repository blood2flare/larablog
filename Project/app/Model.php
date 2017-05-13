<?php

// This is custom Model extending Eloquent model to bypass MassAssignment rules

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
    //protected $fillable = ['title', 'body'];
    //protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $guarded = [];
}
