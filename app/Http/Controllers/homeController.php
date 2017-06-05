<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Auth;
use Illuminate\Http\Request;
use Session;

class homeController extends Controller
{
    public function getHome(){
    	$level = Auth::user()->level;
    	return view('layouts.'.$level.".".$level);
    	Session::flash($level,'Đây là cấp '.$level);
    }
    
}
