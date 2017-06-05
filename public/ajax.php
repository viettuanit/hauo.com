<?php
use App\Materialbasic;

if($post =='donvi'){
	$id 	= $_POST['id'];
	$result	= Materialbasic::where('id',$id)->get();
	echo $result->donvi;
}