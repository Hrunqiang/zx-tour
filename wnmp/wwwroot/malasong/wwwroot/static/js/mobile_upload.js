$(function(){
	// if(!tk){
	// 	alert("已超时,请重新提交成绩页!");
	// 	return false;
	// }
	var photo = $('#photo');
	function isCanvasSupported(){
	    var elem = document.createElement('canvas');
	    return !!(elem.getContext && elem.getContext('2d'));
	}
	photo.change(function(event){
		if(!isCanvasSupported){
	        alert("not suport canvas");
	        return false;
		}
		compress(event, function(base64Img){
			 $("#photo_loading").show();
			 $.ajax({
				 'url' : '/UploadPic/upload',
				 'type' : 'post',
				 'data' : {'step':1,'tk':tk,'base64Img' : base64Img},
				 'success' : function(ret){
					 var json = eval('(' + ret + ')');  
					 $("#photo_loading").hide();
					 if(json.error==0){
						 $(".file span").html("上传成功");
						 $(".file").addClass("gray_bg");
						 $("#photo").attr("disabled",true);
						 alert("已经提交成功,请继续提交您的成绩");
					 }else{
						 alert(json.msg);
					 }
					 //拿到php传过来的图片地址
				 }
			 });
		 }); 
	});
	// photo.on('change', function(event){
	//      if(!isCanvasSupported){
	//         return;
	// 　　} 
	// 　　　　　　
	//   compress(event, function(base64Img){
	// 　　　　　　$.ajax({
	// 　　　　　　'url' : '/OnlineEnroll/upload',
	// 　　　　　　'type' : 'post',
	// 						'data' : {'step':1,'base64Img' : base64Img},
	// 						'success' : function(ret){
	// 							alert(ret);
	// 　　　　                 //拿到php传过来的图片地址
	// 　　　　　   }
	// 　　　　　});
	// 　　　}); 
	// });
	 
	function compress(event, callback){
		try{
	    var file = event.currentTarget.files[0];
	    var reader = new FileReader();
	    reader.onload = function (e) {
	        var image = $('<img/>');
	        image.load(function(){
	        	var square = 640;
	             var canvas = document.createElement('canvas');
	             var imageWidth;
	             var imageHeight;
		          if (this.width > this.height) {
	                 imageWidth = Math.round(square * this.width / this.height);
	                 imageHeight = square;
	                offsetX =0;
		          } else {
		       	   	imageHeight = Math.round(square * this.height / this.width);
		       	   	imageWidth =square;
		       	   	offsetY = 0; 
		          }  /**/
	             canvas.width = imageWidth;
	             canvas.height = imageHeight;
	 
	             var context = canvas.getContext('2d');
	             context.clearRect(0, 0, square, square);
	           
	             var offsetX = 0;
	             var offsetY = 0;
	 
	 
	            context.drawImage(this, offsetX, offsetY, imageWidth, imageHeight);
	            var data = canvas.toDataURL('image/jpeg');
	            $("#photo_img img").attr('src', data);
	            callback(data);
	        });
	          image.attr('src', e.target.result);
	         	//image.prependTo($("#photo_img"));
	       };
	  
	     reader.readAsDataURL(file);
	 	}catch(e){
	 		alert(e);
		 }
	}
	 
});