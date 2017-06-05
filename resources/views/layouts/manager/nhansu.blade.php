@extends('layouts.manager.index')

@section('layout')
<div class="list-play" id="nhansu">
	<div class="table-nhansu">
		<table>
			<caption>Quản Lý Nhân Sự</caption>
			<tr>
				<th>STT</th>
				<th>Tên nhân viên</th>
				<th>Chức vụ</th>
				<th>Số điện thoại</th>
				<th>Mức lương</th>
				<th>Action</th>
			</tr>
			@foreach ($users as $user)
			<tr>			
				<td>{{ $user->id }}</td>
				<td>{{ $user->name }}</td>
				<td style="max-width: 300px;">{{ $user->level}}</td>
				<td>{{ $user->phone}}</td>
				<td>{{ $user->luong }}</td>
				<td><button style="padding: 5px;">Sửa</button></td>
			</tr>
			@endforeach
		</table>
		<a class="button-main" href="add-nhan-vien">Thêm nhân viên mới</a>
	</div>
</div>		
@endsection