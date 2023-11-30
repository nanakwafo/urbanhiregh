<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home_owners extends Model
{
    //

    protected $table = 'home_owners';
    protected $fillable = [
        'last_name',
        'first_name',
        'other_names',
        'phone_number1',
        'phone_number2',
        'address',
        'address2',
    ];
}
