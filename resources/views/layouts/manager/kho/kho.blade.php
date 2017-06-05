@extends('layouts.manager.kho.mainkho')

@section('main')
	<div class="content-list-nguyenlieu">
		<table class="nguyenlieu-table" cellpadding="1" cellspacing="1">
			<caption>Danh Sách Cách Nguyên Vật Liệu Còn</caption>
			<tr>
				<th>STT</th>
				<th>Mã</th>
				<th>Tên Nguyên liệu</th>
				<th>Số lượng</th>
				<th>Ngày Mua</th>
				<th>Ngày hết Hạn</th>
			</tr>
			@foreach($mts as $mt)
			<tr>
				<td>{{$dem++}}</td>
				<td>{{ $mt->id_basic }}</td>
				<td>{{ $mt->name }}</td>
				<td>{{ $mt->soluong }}</td>
				<td>{{ $mt->created_at }}</td>
				<td>{{ $mt->hsd }}</td>
			</tr>
			@endforeach
		</table>
	</div>

@endsection