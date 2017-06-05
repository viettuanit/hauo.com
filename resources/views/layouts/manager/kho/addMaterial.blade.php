
@extends('layouts.manager.kho.mainkho')

@section('main')

	<div class="content-add-nguyenlieu">
		<div class="wap-addmaterial">
			<!-- TAB thêm món bằng id -->
			<div id="them-id-material" class="choose-material">
				<form method="post" action="addMaterial">
				{{ csrf_field ()}}
					<div style="background: #f2f2f2;" class="form-create">
						<h1>Thêm Nguyên liệu ID</h1>
						<div class="group-input">
							<label>ID nguyên liệu</label>
							<input required pattern="[0-9]{10}" type="number" name="id_basic">
						</div>
						<div class="group-input">
							<label>Số lượng</label>
							<input required pattern="[0-9]{10}" type="number" name="soluong">
						</div>
						<div class="group-input">
							<label>Ngày hết hạn</label>
							<input type="date" id="bday" name="hsd" required pattern="[0-9]{4}.(0[1-9]|1[012]).(0[1-9]|1[0-9]|2[0-9]|3[01])">
						</div>
						<div><input type="submit" value="Thêm nguyên liệu" class="button-main"></div>	
					</div>
				</form>
			</div>

			<!-- tab thêm nguyên liệu theo dạng danh sách -->
			<div id="them-list-material" class="choose-material">
				<form id="submit-list" action="addMaterial" method="post">
				{{ csrf_field ()}}
					<div class="form-create" style="background: #d5d5d5;">
						<h1>Thêm Nguyên liệu list</h1>
						<div class="group-input">
							<label>Tên Nguyên liệu</label>
							<select id="choose-material" name="id_basic" style="padding: 5px;">
								<option value="">----Chọn Nguyên Liệu---</option>
								@foreach($mtbs as $mtbs)
								<option value="{{ $mtbs->id }}">{{ $mtbs->name }}</option>
								@endforeach
							</select>
						</div>
						<div class="group-input">
							<label id="donvinguyenlieu">Số lượng</label>
							<input required pattern="[0-9]{>=0}" type="number" name="soluong">
						</div>
						<div class="group-input">
							<label>Thời gian hết hạn</label>
							<input type="date" id="bday" name="hsd" required pattern="[0-9]{4}.(0[1-9]|1[012]).(0[1-9]|1[0-9]|2[0-9]|3[01])">
						</div>
						<input type="submit" class="button-main"value="Thêm nguyên liệu" >	
					</div>
				</form>
			</div>
		</div>

		<!-- tab hiện danh sách nguyên liệu mới thêm -->
		<div class="list-material">
			<table class="table-material" cellspacing="0" cellpadding="1" border="1">
				<caption>Danh sách nguyên liệu mới thêm</caption>
				<tr>
					<th>Mã</th>
					<th width="50%">Tên</th>
					<th>Số lượng</th>
					<th>Hạn sử dụng</th>
					<th>Giá</th>
				</tr>
				@foreach ($mts as $mt)
				<tr>
					<td>{{ $mt->id_basic}}</td>
					<td>{{ $mt->name}}</td>
					<td>{{ $mt->soluong}}</td>
					<td>{{ $mt->hsd }}</td>
					<td>{{ number_format($mt->price)}}</td>
				</tr>
				@endforeach
			</table>
		</div>
		<!-- Đóng tab thêm món bằng id -->
	</div>
@endsection
<!-- Đóng tab mua thêm nguyên liệu -->