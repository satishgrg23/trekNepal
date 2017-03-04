<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    //
    protected $fillable=[
    	'image_name'
    ];

    public $timestamps=false;

    protected $table='gallerys';
}
