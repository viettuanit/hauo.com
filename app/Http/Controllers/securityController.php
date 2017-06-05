<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Consider;

class securityController extends Controller
{
    public function postAddconsider(request $request){
		$nam = $request->get('nam');
		$nu  = $request ->get('nu'); 
		$nguon = $request ->get('nguon');
		if($nam ===null && $nu ===null){
			return back()->with('status_error','Xin vui lòng nhập số lượng người');
		}
		if($nam===null){
			$nam =0;
		}
		if($nu===null){
			$nu =0;
		}
		if($nam<0 || $nu<0){
			return back()->with('status_error','Bạn không được nhập số âm !');
		}
		elseif($nguon===null){
			return back()->with('status_error','Bạn hãy chọn 1 đáp án !');
		}
		else{
			$consider = new Consider([
	            'nu' => $nu,
	            'nam' => $nam,
	            'nguon' => $nguon
		    ]);
			$consider->save();
			return redirect('/home');
		}
    }
}
