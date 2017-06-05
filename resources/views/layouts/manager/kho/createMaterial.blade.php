<!-- tab tạo ra nguyên liệu mới  -->
@extends('layouts.manager.kho.mainkho')

@section('main')
	<div class="content-create-nguyenlieu">
	    @if (session('status'))
	    <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
		<form action="add-material-basic" role="form" method="post">
			{{ csrf_field ()}}
			<div class="wap-addmaterial">
				<div style="background: #f2f2f2;" class="form-create">
					<h1>Tạo Nguyên Liệu Mới</h1>
					<div class="group-input">
						<label>Tên Nguyên liệu</label>
						<input type="text" name="name">
					</div>
					<div class="group-input">
						<label>Giá Nguyên liệu</label>
						<input type="number" name="price">
					</div>
					<div class="group-input">
						<label>Đơn vị tính</label>
						<input type="string" name="donvi">
					</div>
					<div><input type="submit" value="Tạo" class="button-main"></div>	
				</div>
			</div>
		</form>
		<div class="list-material">
			<table style="overflow-y:scroll">
				<caption>Danh sách nguyên liệu</caption>
				<tr>
					<th>Mã</th>
					<th width="50%">Tên</th>
					<th>Giá</th>
					<th>Đơn Vị tính</th>
				</tr>
				@foreach ($mtbs as $mt)
				<tr>
					<td>{{ $mt->id }}</td>
					<td>{{ $mt->name }}</td>
					<td>{{ number_format($mt->price)}}</td>
					<td>{{ $mt->donvi }}</td>
				</tr>
				@endforeach
			</table>
		</div>
	</div>
@endsection
<!-- Đóng tab tạo ra nguyên liệu mới -->