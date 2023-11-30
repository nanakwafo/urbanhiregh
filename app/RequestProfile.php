<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequestProfile extends Model
{
    //
    protected $fillable = [
        'last_name',
        'first_name',
        'other_names',
        'email',
        'phone_number1',
        'phone_number2',
        'address',
        'address2',
    ];
}
