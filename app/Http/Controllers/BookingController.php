<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Booking;

class BookingController extends Controller
{
    //
    //
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index(){
    	$booking=Booking::all();
    	return view('admin.booking.index')->with('booking',$booking);
    }
}
