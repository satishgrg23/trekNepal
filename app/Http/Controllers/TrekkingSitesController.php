<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Trekkingsite;

class TrekkingSitesController extends Controller
{
    //Checking session i.e. Admin cannot access without authentication
    public function __construct()
    {
        $this->middleware('admin');
    }
    //Function to load home page where admin can view all trekking sites data
    public function index(){
    	$trekkingSite=Trekkingsite::all();
    	return view('admin.trekkingSites.index')->with('trekkingSite',$trekkingSite);
    }
    //Function to load add trekking sites form
    public function create(){
    	return view('admin.trekkingSites.create');
    }
    //Function to store trekking sites data in database
    public function store(Request $request){
        if ($request->hasFile('image')) {
            //Get the tmp and orginal name of image
            $imageTempName = $request->file('image');
            $imageName = $request->file('image')->getClientOriginalName();
            //Rename image name
            $finalImageName  = time() . '.' . $imageName;
            //Provide the destination path and Move it to the folder
            $path = base_path() . '/public/uploads/img/';
            $res=$imageTempName->move($path , $finalImageName);
            
            $trekkingSite = new Trekkingsite();
            $trekkingSite->image=$finalImageName;
            $trekkingSite->name = $request->name;
            $trekkingSite->description = $request->description;
            $trekkingSite->cost = $request->cost;
            $trekkingSite->duration = $request->duration;
            $trekkingSite->level = $request->level;
            $trekkingSite->trip_summary = $request->trip_summary;
            $trekkingSite->itinerary_details = $request->itinerary_details;
            $trekkingSite->price_include_exclude = $request->price_include_exclude;
            $trekkingSite->facts = $request->facts;
            $trekkingSite->equipments = $request->equipments;
            $trekkingSite->latitude = $request->latitude;
            $trekkingSite->longitude = $request->longitude;
            $trekkingSite->embeded_map = $request->embeded_map;
            $trekkingSite->save();
            \Session::flash('flash_msg','Trekking sites information has been successfully added!');
            return redirect('admin/trekkingSites');
        }else{
            \Session::flash('flash_msg','Please upload the image!');
            return redirect('admin/trekkingSites');
        }      	                
    }
    //Function to load edit trekking sites form
    public function edit($id){
    	$trekkingSites=Trekkingsite::findOrFail($id);
    	return view('admin.trekkingSites.edit')->with('trekkingSites',$trekkingSites);;
    }
    //Function to update trekking sites details into database
    public function update($id,Request $request){
        $trekkingSite=Trekkingsite::findOrFail($id);
        //If user uploads new image
         if ($request->hasFile('image')) {
            //Check if old image exiss and delete the old image from the foler
            $oldImage=public_path('uploads/img/'.$request->oldImage);
            if (file_exists($oldImage)){
                unlink($oldImage);
            }
            //Get all the data of image from the form
            $imageTempName = $request->file('image');
            $imageName = $request->file('image')->getClientOriginalName();
            //Rename the image
            $finalImageName  = time() . '.' . $imageName;
            //Provide the destination path and Move it to the folder
            $path = base_path() . '/public/uploads/img/';
            $res=$imageTempName->move($path , $finalImageName);
            $trekkingSite->image=$finalImageName;
            $trekkingSite->name = $request->name;
            $trekkingSite->description = $request->description;
            $trekkingSite->cost = $request->cost;
            $trekkingSite->duration = $request->duration;
            $trekkingSite->level = $request->level;
            $trekkingSite->trip_summary = $request->trip_summary;
            $trekkingSite->itinerary_details = $request->itinerary_details;
            $trekkingSite->price_include_exclude = $request->price_include_exclude;
            $trekkingSite->facts = $request->facts;
            $trekkingSite->equipments = $request->equipments;
            $trekkingSite->latitude = $request->latitude;
            $trekkingSite->longitude = $request->longitude;
            $trekkingSite->embeded_map = $request->embeded_map;
            $trekkingSite->save();
            \Session::flash('flash_msg','Trekking sites information has been successfully updated!');
            return redirect('admin/trekkingSites');
         }else{
            $trekkingSite->name = $request->name;
            $trekkingSite->description = $request->description;
            $trekkingSite->cost = $request->cost;
            $trekkingSite->duration = $request->duration;
            $trekkingSite->level = $request->level;
            $trekkingSite->trip_summary = $request->trip_summary;
            $trekkingSite->itinerary_details = $request->itinerary_details;
            $trekkingSite->price_include_exclude = $request->price_include_exclude;
            $trekkingSite->facts = $request->facts;
            $trekkingSite->equipments = $request->equipments;
            $trekkingSite->latitude = $request->latitude;
            $trekkingSite->longitude = $request->longitude;
            $trekkingSite->embeded_map = $request->embeded_map;
            $trekkingSite->save();
            \Session::flash('flash_msg','Trekking sites information has been successfully updated!');
            return redirect('admin/trekkingSites');
         }        
         
    }
    //Function to delete trekking sites details
    public function destroy($id){
        $trekkingSite=Trekkingsite::findOrFail($id);
        $myfile=public_path('uploads/img/'.$trekkingSite->image);
        if (file_exists($myfile)){
            unlink($myfile);
            $trekkingSite->delete();
            \Session::flash('flash_msg','Trekking sites information has been successfully deleted!');
            return redirect('admin/trekkingSites');  
        }else{
            $trekkingSite->delete();
            \Session::flash('flash_msg','Trekking sites information has been successfully deleted!');
            return redirect('admin/trekkingSites');
        }

    }

}
