@extends('admin.container')

@section('content')
   <div class="form-dangnhap">
	    <form  action="setup-nhanvien" class="form-horizontal" role="form" method="POST">
	        {{ csrf_field() }}
	        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
	            <label for="name" class="col-md-4 control-label">Name</label>
	            <div class="col-md-6">
	                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
	            </div>
	        </div>
	        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
	            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

	            <div class="col-md-6">
	                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
	            </div>
	        </div>

	        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
	            <label for="password" class="col-md-4 control-label">Password</label>
	            <div class="col-md-6">
	                <input id="password" type="password" class="form-control" name="password" required>
	            </div>
	        </div>
	        <div class="form-group">
	            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

	            <div class="col-md-6">
	                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
	            </div>
	        </div>
	        <div class="form-group">
	        	<label for="level" class="col-md-4 control-label">Vị trị</label>
	        	<div class="col-md-6">
	        		<select class="form-control" name="level">
	        			<option value="phucvu">Phục vụ</option>
	        			<option value="Bep">Làm Bếp</option>
	        			<option value="thungan">Thu Ngân</option>
	        			<option value="kho">Quản lý kho</option>
	        			<option value="security">Bảo vệ</option>
	        			<option value="Quản lý cơ sở vật chất">Quản lý cơ sở vật chất</option>
	        			<option value="nhadautu">Nhà đầu tư</option>
	        			<option value="quanlynhansu">Quản lý nhân sự</option>
	        			<option value="maketing">maketing</option>
	        		</select>
	        	</div>
	        </div>
			<div class="form-group">
	            <label for="luong" class="col-md-4 control-label">Mức lương</label>

	            <div class="col-md-6">
	                <input id="luong" type="number" class="form-control" name="luong">
	            </div>
	        </div>
	        <div class="form-group">
	            <label for="phone" class="col-md-4 control-label">Số điện thoại</label>

	            <div class="col-md-6">
	                <input id="phone" type="text" class="form-control" name="phone">
	            </div>
	        </div>
	        <div class="form-group">
	            <div class="col-md-6 col-md-offset-4">
	                <button type="submit" class="btn btn-primary">
	                    Thêm nhân viên
	                </button>
	            </div>
	        </div>
	        <div class="clr"></div>
	    </form>
    </div>
@endsection