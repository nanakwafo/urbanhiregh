<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //

    protected $fillable = [
        'home_owner_id',
        'tradesman_id',
        'job_id',
        'amount',
        'payment_method',
        'pay_date',
        'reference'
    ];
}
