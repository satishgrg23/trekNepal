<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trekkingsite extends Model
{
    protected $fillable=[
    	'image',
        'name',
    	'description',
    	'cost',
    	'duration',
    	'level',
    	'trip_summary',
    	'itinerary_details',
    	'price_include_exclude',
    	'facts',
    	'equipments',
        'latitude',
        'longitude',
        'embeded_map'
    ];

    public $timestamps=false;

    protected $table='trekkingsites';
}
