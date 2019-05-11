// JavaScript Document
$(document).ready(function(){
	
	$("#btn-insert-event").click(function(){
	    var name=$("#title-event").val();
		var src=$("#img-daidien").attr("src");
		var boolean=true;
		var content="'"+$("#richtext1").contents().find("body").html()+"'";
		if(name == ""){
			$("#error-tenevent").text("Vui lòng nhập tên event");
			boolean=false;
		}
		else{
			$("#error-tenevent").text("");
			
		}
		if(src== ""){
			alert("Vui lòng chọn ảnh event");
			boolean=false;
		}
		if(boolean){
	    $.post("./config/query-data-insert.php",{src:src,content:content,name:name,event:1},function(data){
			
			if(data.status===true){
				alert(' Thêm thành công');
				 window.history.pushState({}, "Hide", "./?danhsachsukien=1");
				location.reload();
			}
			else{
				alert("Thất bại");
			}
		},"json");
		}else{
			alert("Đã có lỗi xảy ra");
		}
	});
	$("#sukien-btn").click(function(){
		$("#thuvien-anh-sukien").show();
		$("#night").show();
	});
	$("#close-sukien").click(function(){
		$("#thuvien-anh-sukien").hide();
		$("#night").hide();
	});
	
	/*$(".img-event-thuvien1").click(function(){
		$(".img-event-thuvien1").css("border","0px none");
		$(".img-event-thuvien1").removeClass("active");
		$(this).css("border","5px #FFA300 solid");
		$(this).addClass("active");
	});*/
	$(".nav-item ").click(function(){
		var id=$(this).attr("id");
		if(id==='li-menu-sukien'){
			$("#xong-event").prop("disabled",true);
		}
		else{
			$("#xong-event").prop("disabled",false);
		}
	});
	$("#xong-event").click(function(){
	$(".img-event-thuvien1").each(function(){
		if($(this).hasClass("active")){
			var a=$(this).find("img").attr("src");
			/*
			 window.history.pushState({}, "Hide", "./?insertevent=1&&src="+a);
				 location.reload();*/
			 window.history.pushState({}, "Hide", "./?insertevent=1");
			$("#img-daidien").attr("src",a);
			var height=$("#menu-horizontal").height()+250;
			$("#menu-horizontal").height(height);
			$("#div-img-event-upload").show();
			
			$("#thuvien-anh-sukien").hide();
		$("#night").hide();
			
		}
	});
		
	});
	$("#delete-img-sukien").click("off",function(){
	$(".img-event-thuvien1").each(function(){
		if($(this).hasClass("active")){
			
			var id=$(this).find("img").attr("src");
			
			$.post("./config/query-data-insert.php",{id:id,unlink:1,imgevent:1},function(data){
				if(data.status){
					
					$("#home-sukien").load("loadfile.php","name=image-event/&&ten=event");
					//$("<script src='js/insert-event-js.js'></script>").appendTo("#home-sukien");
				}
				else{
					alert("false");
				}
			},"json");
		}
	});
	});
});