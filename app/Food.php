<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    //
    protected $casts = [
        'requirements' => 'array'
    ];

    protected $fillable = ['name', 'chef',];
}
