$(document).ready(function() {
    $('.table').click(function(){
		$('.table-restaurant').hide();
		$('.show-menu').show();
		$('.container-add-mon-id').show();
		var table = $(this).attr('id');
		$(".menu-top ul").append('<li class="title-name-table"><a>Bàn số '+table+' </a></li>');
	});
	$('#datmon-button').click(function(){
		$('.show-menu').hide();
		$('.show-menu-2').show();
	});
	$('.button-them').click(function(){
		$('.show-menu').show();
		$('.show-menu-2').hide();
	});
	$('#them-mon').click(function(){
		$('#monan').hide();
		$('#add-mon').show();
	});
	//sử dụng ajax get vào file ajaxController
	$('select#choose-material').change(function (){
		var id = $(this).val();
		$.ajax({
			type: 'get',
			data: {'id':id},
			url:'kho/donvi',
			success: function(result){
				$('#donvinguyenlieu').html('Số lượng ('+result+')');
			}
		});		
	});
});
$(function() {

  $(".numbers-row").append('<div class="dec button"><img src="http://hauo.com/img/tru.png">-</div><div class="inc button"><img src="http://hauo.com/img/bonus.png">+</div>');

  $(".button").on("click", function() {

    var $button = $(this);
    var oldValue = $button.parent().find("input").val();

    if ($button.text() == "+") {
  	  var newVal = parseFloat(oldValue) + 1;
  	} else {
	   // Don't allow decrementing below zero
      if (oldValue > 0) {
        var newVal = parseFloat(oldValue) - 1;
	    } else {
        newVal = 0;
      }
	}
    $button.parent().find("input").val(newVal);
  });
});
$(document).ready(function(){
	$('.container-button a').click(function(){
		$('.container-button a.kichhoat').removeClass();
		$(this).addClass('kichhoat');
		var hienthi = $(this).attr('gr');
		$('.choose-material').hide();
		$(hienthi).show();
	});
	$('#submit-list').on('submit',function(e){
		var id = $("input[name='id']").val();
		var soluong = $("input[name='soluong']").val();
		var hxd = $("input[name]");
        $.ajax({
        type:"POST",
        url:'kho/addmaterial',
        data:{_token:window.Laravel.csrfToken, 'id':id,'soluong':soluong, 'hsd':hsd},
        dataType: 'json',
        success: function(data){
            console.log(data);
        },
        error: function(data){
        }
    })
	});
});
// $(document).ready(function(){
// 	var submit = $("input[type='submit']");
// 	submit.click(function(){
// 		var id = $("input[name='id']").val();
// 		var soluong = $("input[name='soluong']").val();
// 		var hxd = $("input[name]");
// 	});

// });
// function addidmt(){
// 	var id 		= $("select[name='id']").val();
// 	var soluong	= $("input[name='soluong']").val();
// 	var hsd		= $("input[name='hsd']").val();
// 	return false;
// 	$.ajax({
// 		type: 'POST',
// 		data: {_token:window.Laravel.csrfToken, 'id':id,'soluong':soluong, 'hsd':hsd},
// 		url:'kho/addmaterial',
// 		success: function(result){
// 			if(result){
// 				alert(result);
// 				return false;
// 			}
// 		}
// 	});

// }