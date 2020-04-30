<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    protected $casts=[
        'toppings' => 'array'  # is casting one which converts the array value in json and again converts into array and stores the value as array in db.
    ];
}
