<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;
use Auth;

class LoginController extends Controller
{
    public function getLogin(){
    	if(Auth::guard('web')->user() === null){
    		if(User::count() > 0)
		    	return view('admin.login');
		    else
		    	return view('admin.register');
    	}
    	else{
    		return redirect('/home');
    	}
    }
    public function logout(){
    	Auth::guard('web')->logout();
    	return redirect('login');
    }
    public function postlogin(Request $request){
		$rules = [
			'email'=>'required',
			'password'=>'required',
		];
		$messages = [
			'email.required'=>'tài khoản không được để trống',
			'password.required'=>'mật khẩu không được để trống'
		];

		$this->validate($request, $rules);

		if(Auth::guard('web')->attempt(['email' => $request->email,'password' => $request->password])){
			return redirect('home');
		}
		else{
			return back();
		}
    }
    public function postRegister(Request $request){
    	if(User::count() === 0){
    		$rules = [
	            'name' => 'required|string|max:30',
	            'email' => 'required|string|email|max:100|unique:users',
	            'password' => 'required|string|min:6|confirmed'
	        ];

    		$this->validate($request, $rules);

    		$data = $request->all();
    		$data['password'] = bcrypt($data['password']);
    		$data['level'] = "manager";
            $data['phone'] = "021389213";
    		$user = User::create($data);
    		Auth::guard('web')->login($user);
	    	return redirect('/home');
    	}
    	else{
    		return abort('404', "Page Not Found");
    	}
    }
}
