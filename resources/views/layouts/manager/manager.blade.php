@extends('layouts.manager.index')

@section('layout')
	<div style="display: block;" class="list-play" id="tai-chinh">
		<div class="table-tien ngay">
			<table>
				<caption>Quản lý thu chi theo ngày</caption>
				<tr>
					<th>Ngày</th>
					<th>Tổng chi</th>
					<th>Tổng thu</th>
					<th>Lợi nhuận</th>
				</tr>
				<tr>
					<td>đá</td>
					<td>3,000,000</td>
					<td>5.000.000</td>
					<td>2.000.000</td>
				</tr>
				<tr>
					<td>25/5/2017</td>
					<td>3,000,000</td>
					<td>5.000.000</td>
					<td>50.000.000</td>
				</tr>
				<tr>
					<td>25/5/2017</td>
					<td>3,000,000</td>
					<td>5.000.000</td>
					<td>50.000.000</td>
				</tr>
				<tr>
					<td>25/5/2017</td>
					<td>3,000,000</td>
					<td>5.000.000</td>
					<td>50.000.000</td>
				</tr>
			</table>
		</div>
		<div class="table-tien thang">
			<table>
				<caption>Quản lý thu chi theo tháng</caption>
				<tr>
					<th>Tháng</th>
					<th>Tổng chi</th>
					<th>Tổng thu</th>
					<th>Lợi Nhuận</th>
				</tr>
				<tr>
					<td>25/5/2017</td>
					<td>3,000,000</td>
					<td>5.000.000</td>
					<td>50.000.000</td>
				</tr>
				<tr>
					<td>25/5/2017</td>
					<td>3,000,000</td>
					<td>5.000.000</td>
					<td>50.000.000</td>
				</tr>
				<tr>
					<td>25/5/2017</td>
					<td>3,000,000</td>
					<td>5.000.000</td>
					<td>50.000.000</td>
				</tr>
			</table>
		</div>
		<div class="table-tien nam">
			<table>
				<caption>Quản lý thu chi theo năm</caption>
				<tr>
					<th>Năm</th>
					<th>Tổng chi</th>
					<th>Tổng thu</th>
					<th>Lợi Nhuận</th>
				</tr>
				<tr>
					<td>25/5/2017</td>
					<td>3,000,000</td>
					<td>5.000.000</td>
					<td>300.000.000</td>
				</tr>
			</table>
		</div>
	</div>
@endsection