<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Gallery;
use App\Trekkingsite;
use DB;

class GalleryController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index(){
    	$trekkingSite=Trekkingsite::all();
    	return view('admin.gallery.index')->with('trekkingSite',$trekkingSite);
    }

    public function show($id){
    	$photo = DB::table('gallerys')->where('tid',$id)->count();
    	if ($photo<1){
    		\Session::flash('flash_msg','No images to display!');
    		$trekkingSite= DB::table('trekkingsites')->where('id','=',$id)->get();
    		$image=0;
    		return view('admin.gallery.gallery')->with('trekkingSite',$trekkingSite)->with('image',$image);
    	}else{
    		$photo = DB::table('gallerys')->where('tid',$id)->get();
    		$trekkingSite= DB::table('trekkingsites')->where('id','=',$id)->get();
    		$image=1;
    		return view('admin.gallery.gallery')->with('trekkingSite',$trekkingSite)->with('photo',$photo)->with('image',$image);
    	}
    	
    }

    public function create(Request $request){
    	$id=$request->id;
    	$id = DB::table('trekkingsites')->where('id', $id)->first();
    	return view('admin.gallery.create')->with('id',$id);
    }

    public function store(Request $request){
    	if ($request->hasFile('image')) {
	    	$files = \Input::file('image');
		    $output = "";
		    foreach ($files as $file) {
		    	//Get the tmp and orginal name of image
		    	$imageName = $file->getClientOriginalName();
		    	$finalImageName  = time() . '.' . $imageName;
		        $output .= $file->getClientOriginalName();
		        $path = base_path() . '/public/uploads/gallery/';
		        $res = $file->move($path, $finalImageName);
		        $gallery=new Gallery();
		        $gallery->image_name=$finalImageName;
		        $gallery->tid=$request->id;
		        $gallery->save();     
		    }
		    	\Session::flash('flash_msg','Photos are successfully added!');
                return redirect('admin/gallery/'.$request->id);
		}else{
            \Session::flash('flash_msg','Please upload the image!');
            return redirect('admin/gallery/'.$request->id);
        }

    }

    public function destroy($id,Request $request){
        $gallery=Gallery::findOrFail($id);
        $myfile=public_path('uploads/gallery/'.$gallery->image_name);
        if (file_exists($myfile)){
          unlink($myfile);
          $gallery->delete();
          \Session::flash('flash_msg','Photo is successfully deleted!');
          return redirect('admin/gallery/'.$request->id);   
        }else{
          $gallery->delete();
          \Session::flash('flash_msg','Photo is successfully deleted!');
          return redirect('admin/gallery/'.$request->id);
        }

    }
}
