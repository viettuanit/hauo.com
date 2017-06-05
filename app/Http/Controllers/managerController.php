<?php

namespace App\Http\Controllers;
use Auth;
use Session;
use App\User;
use App\Materialbasic;
use Illuminate\Support\Facades\DB;
use App\Material;
use Illuminate\Http\Request;

class managerController extends Controller
{
    public function getAdduser(){
    	return view('layouts.manager.them_nhan_vien');
    }

    public function postAddNhanvien(request $request){
        if(User::count() != 0){
            $rules = [
                'name' => 'required|string|max:30',
                'email' => 'required|string|email|max:100|unique:users',
                'password' => 'required|string|min:6|confirmed'
            ];
            $this->validate($request, $rules);

            $data = $request->all();
            $data['password'] = bcrypt($data['password']);
            $user = User::create($data);
            return redirect('/home');
        }
        else{
            return abort('404', "Page Not Found");
        }
    }

    // Get đến trang kho
    public function getKho(){
        $mtbs = \App\Materialbasic::all(array('id','name','price','donvi'));
        $mts = DB::table('materials') ->join('material_basic','materials.id_basic','=','material_basic.id')->select('materials.*','material_basic.*')->get();
        $dem =1;
    	return view('layouts.manager.kho.kho',compact('mtbs','mts','dem'));
    }
    public function getNhansu(){
        $users = User::all(array('id','name','phone','level','luong'));
    		return view('layouts.manager.nhansu',compact('users'));
    }
    public function getOrder(){
    	return view('layouts.manager.order');
    }
    public function getTaichinh(){
    	return view('layouts.manager.manager');
    }

    //Quản lý món ăn
    public function getMonan(){
        $mtbs = Materialbasic::all(array('name','id','donvi'));
    	return view('layouts.manager.food.monan',compact('mtbs'));
    }

    //POst tao mon an moi
    public function postCreatemon(){
        
    }
    // posT hàm tạo ra nguyên liệu mới bằng
    public function postAddmaterialbasic(Request $request){
        $name   = $request->get('name');
        $donvi  = $request->get('donvi');
        $price  = $request->get('price');
        if($name ===null || $donvi ===null || $price ===null){
            return back()->with('status','Vui lòng điền đầy đủ thông tin!');
        }
        else{
            $material = new Materialbasic([
                'name' => $name,
                'donvi' => $donvi,
                'price' => $price
            ]);
            $material ->save();
            return back();
        }
    }
    //get đến trang tạo nguyên liệu
    public function getCreateMaterial(){
        $mtbs = Materialbasic::all(array('id','name','price','donvi'));
        return view('layouts.manager.kho.createMaterial',compact('mtbs'));
    }

    //get đến trang thêm nguyên liệu
    public function getAddMaterial(){
        $mts = DB::table('materials') ->join('material_basic','materials.id_basic','=','material_basic.id')->select('materials.*','material_basic.*')->get();
        $mtbs = \App\Materialbasic::all(array('id','name','price','donvi'));
        return view('layouts.manager.kho.addMaterial',compact('mts','mtbs'));
    }

    //POST thêm nguyên liệu bằng list
    public function postAddmaterial(Request $request){
        $soluong    = $request->get('soluong');
        $id_basic   = $request->get('id_basic');
        if (Material::where('id', '=',$request->get('id_basic'))->count() == 0) {
            return back()->with('material','Bạn đã nhập sai id');
        }
        if($soluong<=0){
            return back()->with('material','Vui lòng nhập số lượng dương!');
        }
        else{
            $data = $request->all();
            $Material = Material::create($data);
            return back()->with('material','Thêm Nguyên Liệu Thành Công !');
        }

    }
}
