Zepto(function($){
	var showprice = $("#showprice");
	$('input[type=radio]').change(function(){
		if($(this).attr("name")=="shaichen"){
			var index = $(this).attr("data-i");
			$(".num_box>input").attr("disabled",true);
			$(".num_box>input").eq(index).removeAttr("disabled");
		}
		reflashprice();
	});
	$('#payform').submit(function(){
		ajax_post("/Enroll/step2",$("#payform").serialize(),function(data){
   			if(data.error==0){
				window.location.href="/PayResult/payorder?orderid="+data.msg;
				return false;
			}else{
				alert(data.msg);
			}
   		});
		return false;
	});
	$(".num_box>span").tap(function(){
		var num = $(this).parent().find('.num');
		if(!num.attr("disabled")){
			var currnum = parseInt(num.val());
			if($(this).index()==2){
				num.val(currnum+1);
			}else{
				if(currnum<2) return ;
				num.val(currnum-1);
			}
			reflashprice();
		}
	});
	$("input[name=count]").focus(function(){
		$(this).blur();
	}).tap(function(){
		return false;
	});
	function reflashprice(){
		var total_price = ss_price = tt_price = 0;
		$('input[type=radio]').not(function(){ return !this.checked }).each(function(){
			if($(this).attr("name")=="shaichen"){
				var index = $(this).attr("data-i");
				var count = parseFloat($(".num_box>input").eq(index).val())?parseFloat($(".num_box>input").eq(index).val()):1;
				ss_price += parseFloat($(this).attr('price'))*count;
			}else{
				tt_price += parseFloat($(this).attr('price'));
			}
		});
		if(isdiscount){
			cut_price = parseFloat(tt_price-188)>=0?parseFloat(tt_price-188):0;
		}else{
			cut_price = tt_price;
		}
		total_price = ss_price + cut_price;
		$("#count_bf_price").html("￥"+parseFloat(ss_price+tt_price).toFixed(2));
		showprice.html("￥"+total_price.toFixed(2));
	}
	reflashprice();
});