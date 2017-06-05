		<div class="table-restaurant">
			<ul>
				@for($i=1;$i<21;$i++)
				<li><a id="{{$i}}" class="table">{{ $i }}
				</a></li>
				@endfor
			</ul>
		</div>
		<div class="add-mon-id">
			<label class="label-idmon">THÊM MÓN BẰNG ID</label>
			<form>
				<div class="group-add-id">
					<label>Nhập id món ăn:</label>
					<input class="nhap-text" type="text" name="id-mon">
				</div>
				<div class="group-add-id">
					<label>Số lượng:         </label>
					<div class="numbers-row"> <!-- Button cộng trừ -->
				        <label for="name"></label>
				        <input type="text" name="french-hens" id="french-hens" value="1">
					</div>
				</div>
				<div class="group-add-id">
					<input type="button" name="" class="button-main" value="Thêm">
				</div>
			</form>
		</div>
		<div class="show-menu">
			<div class="menu-order">
				<form>
					<table class="table-menu">
						<caption>Các Món Ăn</caption>
						<tr>
							<th style="width: 300px;">Tên Món</th>
							<th width="100px">Giá</th>
							<th>Số Lượng</th>
							<th>Lựa chọn</th>
						</tr>
						<tr>
							<td>Gỏi hàu</td>
							<td>1000$</td>
							<td>
								<div class="numbers-row"> <!-- Button cộng trừ -->
							        <label for="name"></label>
							        <input type="text" name="french-hens" id="french-hens" value="1">
      							</div>
							</td>
							<td><input class="option-input checkbox" type="checkbox" name="chose"></td>
						</tr>
					</table>
					<a class="button-main" id="datmon-button" name="datmon">Đặt Món</a>
				</form>
			</div>
		</div><!--kết thúc giao diện show menu khi bàn mới vào-->
		<div class="show-menu-2">
			<input type="button" name="add-mon" value="+ Thêm Món" class="button-them">
			<table class="table-menu">
				<caption>Món Ăn Đã Chọn</caption>
				<tr>
					<th style="width: 300px;">Tên Món</th>
					<th width="100px;">Giá</th>
					<th>Số Lượng</th>
					<th>Tình trạng</th>
				</tr>
				<tr>
					<td>Gỏi hàu</td>
					<td>1000$</td>
					<td>1</td>
					<td>
						<span>Tình Trạng</span><br>
						<input type="button" name="" style="background: red; padding: 3px;color: #fff;" value="Hủy Món">
					</td>
				</tr>
			</table>
			<input type="button" name="buy" value="Thanh Toán" class="button-main">
		</div>
	@if (isset($_POST['french-hens']))
    	@echo '<div style="border:1px solid #fc0; padding:10px;margin-top:25px;">';
    	@echo 'The values returned were:  '.implode(', ',array_values($_POST));
    		echo '</div>';
   	@endif