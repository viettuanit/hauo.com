@extends('layouts.app')

@section('content')
	<div class="div-form-se">
        @if (session('status_error'))
            <div class="alert alert-success">
                {{ session('status_error') }}
            </div>
        @endif
		<form class="form-se" action="add-consider" role="form" method="POST">
	    {{ csrf_field ()}}
	    	<div class="gioitinh">
	    		<label>Khách đi bao nhiêu người ?</label>
	    		<div class="nam">
		    		<label>Nam:</label>
		    		<input type="number" name="nam">
	    		</div>
	    		<div class="nu">
	    			<label>Nữ</label>
	    			<input type="number" name="nu">
	    		</div>
	    	</div>
	    	<div class="nguon">
	    		<label class="title">Bạn biết đến quán từ các thông tin ở đâu ?</label>
    			<span>
    				<input type="radio" value="Fanpage" name="nguon">
    				<label>Fanpage</label>
    			</span>
    			<span>
    				<input type="radio" name="nguon" value="goole">
    				<label>Google</label>
    			</span>
    			<span>
    				<input type="radio" name="nguon" value="Diadiemanuong">
    				<label>Diadiemanuong.com</label>
    			</span>
    			<span>
    				<input type="radio" name="nguon" value="Foody">
    				<label>Foody</label>
    			</span>
    			<span>
    				<input type="radio" name="nguon" value="Báo đài">
    				<label>Báo đài</label>
    			</span>
    			<span>
    				<input type="radio" name="nguon" value="Bạn bè giới thiệu">
    				<label>Bạn bè giới thiệu</label>
    			</span>
    			<span>
    				<input type="radio" name="nguon" value="Foody">
    				<label>Khách quen</label>
    			</span>
    			<span>
    				<input type="radio" name="nguon">
    				<label>Từ các nguồn khác</label>
    			</span>
	    	</div>
	    	<div class="hoanthanh">
	    		<input type="submit" name="add-security" value="Hoàn thành">
	    	</div>
	    	<div class="clr"></div>
				
		</form>
	</div>
@endsection