<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Booking;
use DB;

class BookTripController extends Controller
{
    //Checking session i.e. User cannot book trip without authentication
    public function __construct()
    {
        $this->middleware('user');
    }
    //Function to show Booking details form
    public function showBookingForm(Request $request){
    	$cid=$request->cid;
    	$tid=$request->tid;
    	$customer= DB::table('users')->where('id', $cid)->first();
    	$trekking= DB::table('trekkingsites')->where('id', $tid)->first();
    	return view('sites.book-trip')->with('customer',$customer)->with('trekking',$trekking);
    }
    //Function to store the booking details 
    public function bookTrip(Request $request){
    	$booking= new Booking();
    	$booking->cid= $request->cid;
    	$booking->tid= $request->tid;
    	$booking->fullname= $request->fullname;
    	$booking->address= $request->address;
    	$booking->phone= $request->phone;
    	$booking->email= $request->email;
    	$booking->no_of_person= $request->no_of_person;
    	$booking->comment= $request->comment;
        $booking->booking_date= date('Y-m-d H:i:s');
        $booking->save();
        \Session::flash('flash_msg','Booking successfully!');
        return redirect('user/home');

    }
}
