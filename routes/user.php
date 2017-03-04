<?php
use App\Booking;

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('user')->user();
    $id=Auth::guard('user')->user()->id;
   	$booking = DB::table('bookings')->where('cid', $id)->get();
    return view('user.home')->with('booking',$booking);
})->name('home');

