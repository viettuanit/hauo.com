<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	if(!Auth::user()){
    	return redirect('login');
	}
    else{
    	return redirect('/home');
	}
});
Session::put('sessionName','sessionValue');
Session::flash('sessionName','sessionValue');
Route::get('login','loginController@getLogin');
Route::post('login','loginController@postLogin');
Route::get('logout','loginController@logout');
Route::post('setup-first-login','loginController@postRegister');
Route::group(['prefix' => 'home','middleware' => 'web'], function(){
	Route::get('/','homeController@getHome');
});
Route::group(['middleware'=>'manager'],function(){
	Route::get('manager/add-nhan-vien','managerController@getAdduser');
	Route::get('manager/nhan-su','managerController@getNhansu');
	Route::get('manager/kho','managerController@getKho');
	Route::get('manager/taichinh','managerController@getTaichinh');
	Route::get('manager/monan','managerController@getMonan');
	Route::get('manager/order','managerController@getOrder');
	Route::post('manager/setup-nhanvien','managerController@postAddNhanvien');
	Route::post('manager/kho/add-material-basic','managerController@postAddmaterialbasic');
	Route::get('manager/kho/donvi','ajaxController@postDonvi');
	//get Tạo nguyên liệu mới
	Route::get('manager/kho/createMaterial','managerController@getCreateMaterial');
	// them nguyen lieu mới đi chợ
	Route::post('manager/kho/addMaterial','managerController@postAddmaterial');
	//
	Route::get('manager/kho/addMaterial','managerController@getAddmaterial');
	//POST Tao nguyen lieu
	Route::post('manager/kho/createMaterial','managerController@postCreateMaterial');
	Route::post('manager/create-mon','managerController@postCreatemon');
});
Route::group(['middleware'=>'security'],function(){
	Route::post('add-consider','securityC
		ontroller@postAddconsider');
});
