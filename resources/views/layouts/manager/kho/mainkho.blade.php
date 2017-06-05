@extends('layouts.manager.index')

@section('layout')
<div class="list-con" id="kho">
	<div class="button-material">
		<span><a id="add-material" href="/manager/kho/addMaterial">+ Mua thêm nguyên liệu</a></span>
		<?php
            $level = Auth::user()->level;
        ?>
		@if($level==='manager')
		<span><a id="create-material" href="/manager/kho/createMaterial">+ Tạo nguyên liệu mới</a></span>
		@endif
		<span class="session-material">{{Session::get('material')}}</span>
	</div>
<!-- tab mua thêm nguyên liệu -->
@yield('main') 
<!-- Đóng tab mua thêm nguyên liệu -->


</div>
@endsection