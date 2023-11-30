<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomeOwnersProperties extends Model
{
    //

    protected $table = 'properties';
     protected $fillable = [
        'property_number',
        'property_type',
        'property_location',
        'street_name',
        'district',
        'region',
        'nearest_landmark',
        'property_owner_id',
        'property_image',
    ];

}
