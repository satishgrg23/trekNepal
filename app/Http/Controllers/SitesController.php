<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use App\Trekkingsite;
use App\Gallery;
use App\Trip;

class SitesController extends Controller
{
    
    public function showIndex(){
        $trekkingSite =  DB::table('trekkingsites')->orderBy('name', 'aesc')->limit(3)->get();
        $trekMap =  DB::table('trekkingsites')->get();
    	return view('sites.index')->with('trekkingSite',$trekkingSite)->with('trekMap',$trekMap);
    }

    public function showTrekkingSitesPage($id){
        $trekkingSite = Trekkingsite::findOrFail($id);
        $gallery = DB::table('gallerys')->where('tid', $id)->get();
        $trips = DB::table('trips')->where('tid', $id)->orderBy('id', 'aesc')->limit(1)->first();
        $count = DB::table('trips')->where('tid', $id)->count();
    	return view('sites.trekking-sites')->with('trekkingSite',$trekkingSite)->with('gallery',$gallery)->with('trips',$trips)->with('count',$count);
    }

    public function showTrekkingSitesListPage(){
        $trekkingSite = DB::table('trekkingsites')->paginate(6);
    	return view('sites.trekking-sites-list')->with('trekkingSite',$trekkingSite);
    }

    public function searchTrekkingSitesListPage(Request $request){
        $search_text=$request->search;
        $res = DB::table('trekkingsites')->where('name','like','%'.$search_text.'%')->get();
        return view('sites.search-result')->with('res',$res);
    }

    public function trekkingTrips($id){
        $trip = DB::table('trips')->where('tid',$id)->get();
        $trip_name = DB::table('trekkingsites')->where('id',$id)->first();
        $tripId=$id;
        return view('sites.trip-list')->with('trip',$trip)->with('trip_name',$trip_name)->with('tripId',$tripId);
    }

    public function viewMap($id){
        $trekkingSite = DB::table('trekkingsites')->where('id',$id)->first();
        return view('sites.view-map')->with('trekkingSite',$trekkingSite);
    }
}
