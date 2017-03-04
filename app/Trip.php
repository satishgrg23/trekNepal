<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    //
    protected $fillable=[
    	'tid',
    	'depature_date',
    	'return_date',
    	'cost',
    	'status'
    ];

    public $timestamps=false;

    protected $table='trips';
}
