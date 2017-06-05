<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Materialbasic;
use App\Material;
class ajaxController extends Controller
{
    public function postDonvi(){
    	$id = $_GET['id'];
    	$data = DB::table('material_basic')->where('id',$id)->value('donvi');
    	echo $data;
    }
    public function getMaterial(Request $request){
    	
    	$material->save();
    	echo "thành công";
    }
}
