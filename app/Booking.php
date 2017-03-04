<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    //
    protected $fillable=[
    	'fullname',
        'address',
    	'phone',
    	'email',
    	'no_of_person',
    	'comment',
        'booking_date',
    ];

    public $timestamps=false;

    protected $table='bookings';
}
