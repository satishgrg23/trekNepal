<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Trip;
use App\Trekkingsite;
use DB;

class TripController extends Controller
{
    //Checking session i.e. Admin cannot access without authentication
    public function __construct()
    {
        $this->middleware('admin');
    }
    //Function to load home page where admin can view all trekking sites trip detsils
    public function index(){
    	$trekkingSite=Trekkingsite::all();
    	return view('admin.trip.index')->with('trekkingSite',$trekkingSite);
    }
    //Function to show the trekking trip by id
    public function show($id){
    	$no_trips = DB::table('trips')->where('tid',$id)->count();
    	if ($no_trips<1){
    		\Session::flash('flash_msg','No data to display!');
    		$trekkingSite= DB::table('trekkingsites')->where('id','=',$id)->get();
    		$data=0;
    		return view('admin.trip.trip')->with('trekkingSite',$trekkingSite)->with('data',$data);
    	}else{
    		$trip = DB::table('trips')->where('tid','=',$id)->get();
    		$trekkingSite= DB::table('trekkingsites')->where('id','=',$id)->get();
    		$data=1;
    		return view('admin.trip.trip')->with('trekkingSite',$trekkingSite)->with('trip',$trip)->with('data',$data);
    	}
    	
    }
    //Function to load add trekking sites trip form
    public function create(Request $request){
    	$id=$request->id;
    	return view('admin.trip.create')->with('id',$id);
    }
    //Function to store trekking sites trip data in database
    public function store(Request $request){
    	$trip = new Trip();
    	$trip->tid=$request->id;
    	$trip->depature_date=$request->depature_date;
    	$trip->return_date=$request->return_date;
    	$trip->cost=$request->cost;
        $trip->status=$request->status;
        $trip->save();        
        \Session::flash('flash_msg','Trekking sites trip information has been successfully added!');
        return redirect('admin/trip/'.$request->id);
    }
    //Function to load edit trekking sites trip form
    public function edit($id,Request $request){
        $id=$request->id;
    	$trip=Trip::findOrFail($id);
    	return view('admin.trip.edit')->with('trip',$trip)->with('id',$id);
    }
    //Function to update trekking details into database
    public function update($id,Request $request){
        $trip=Trip::findOrFail($id);
        $trip->tid=$request->id;
        $trip->depature_date=$request->depature_date;
        $trip->return_date=$request->return_date;
        $trip->cost=$request->cost;
        $trip->status=$request->status;
        $trip->save();
        \Session::flash('flash_msg','Trekking sites tip information has been successfully updated!');
        return redirect('admin/trip');
         
    }
    //Function to delete trekking trip
    public function destroy($id){
        $trip=Trip::findOrFail($id);
        $trip->delete();
        \Session::flash('flash_msg','Trekking sites trip information has been successfully deleted!');
        return redirect('admin/trip');
        

    }
}
