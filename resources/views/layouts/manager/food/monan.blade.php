@extends('layouts.manager.index')

@section('layout')
<div class="list-play" id="monan">
	<div class="table-monan">
		<table>
			<caption>Danh sách các món hiện tại</caption>
			<tr>
				<th>STT</th>
				<th>Tên Món</th>
				<th>Giá</th>
			</tr>
			<tr>
				<td>1</td>
				<td>Hàu</td>
				<td>400</td>
			</tr>
		</table>
	</div>
	<div><a id="them-mon" class="button-main">Thêm món mới</a></div>
</div>
<div id="add-mon" class="list-play">
	<h1>Thêm món ăn mới</h1>
	<form action="create-mon" method="post">
		<div class="group-input">
			<label>Tên món:</label>
			<input type="text" name="name">
		</div>
		<div class="group-input">
			<label>Giá Vốn</label>
			<input type="number" name="giagoc">
		</div>
		<div class="group-input">
			<label>Giá bán</label>
			<input type="number" name="giaban">
		</div>
		<div class="nguyenlieu">
			<label class="label-nguyenlieu">Nguyên liệu</label><br>
			<ul>
				@foreach($mtbs as $mt)
				<li>
					<label>{{ $mt->name }}</label>
					<input type="number" data-id="{{ $mt->id }}" name="soluong">
					<span>{{ $mt->donvi }}</span>
				</li>
				@endforeach
			</ul>
		</div>
		<div><input type="submit" class="button-main" value="Thêm Món Mới"></div>
		<div class="clr"></div>
	</form>
</div>
@endsection