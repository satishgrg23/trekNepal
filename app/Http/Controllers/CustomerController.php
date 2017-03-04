<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class CustomerController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index(){
    	$user=User::all();
    	return view('admin.customer.index')->with('user',$user);
    }
}
