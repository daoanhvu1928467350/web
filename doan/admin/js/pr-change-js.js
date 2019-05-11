// JavaScript Document
$(document).ready(function(){
	$(".show-content-change").click(function(){
		if($(this).find("svg").hasClass("svg-inline--fa fa-caret-down fa-w-10")){
			$(this).find("svg").removeClass("svg-inline--fa fa-caret-down fa-w-10");
			$(this).find("svg").addClass("svg-inline--fa fa-caret-up fa-w-10");
			$(".div-mota").show();
			var height=$("#menu-horizontal").height()+200;
		    $("#menu-horizontal").height(height);
		}
		else{
			$(this).find("svg").removeClass("svg-inline--fa fa-caret-up fa-w-10");
			$(this).find("svg").addClass("svg-inline--fa fa-caret-down fa-w-10");
			$(".div-mota").hide();
			var height=$("#menu-horizontal").height()-200;
		    $("#menu-horizontal").height(height);
		}
		
	});
	$("#pr-change-btn").click(function(){
		$("#thuvien-anh-change-pr").show();
		$("#night").show();
	});
	$("#close-change-pr").click(function(){
		$("#thuvien-anh-change-pr").hide();
		$("#night").hide();
	});
	$(".img-event-thuvien1").click(function(){
		$(".img-event-thuvien1").css("border","0px none");
		$(".img-event-thuvien1").removeClass("active");
		$(this).css("border","5px #FFA300 solid");
		
		$(this).addClass("active");
	});
	$("#xong-pr-change").click(function(){
		
		$(".img-event-thuvien1").each(function(){
		if($(this).hasClass("active")){
			var a=$(this).find("img").attr("src");
			
			$("#img-change-pr img").attr("src",a);
			$("#thuvien-anh-change-pr").hide();
		$("#night").hide();
			
		}
	});
	});
	$("#btn-update-pr").click(function(){
		
		var name=$("#title-change-pr").val();
		var src=$("#img-change-pr img").attr("src");
		var content="'"+$("#richtext2").contents().find("body").html()+"'";
		var id=$("#id-pr").val();
		var boolean=true;
		if(name === ""){
			
			
			if(($("#title-pr-duphong").val()) === ""){
				$("#error-tenquangcao").text("Vui lòng nhập tên quảng cáo");
				boolean=false;
			}else{
			
			name=$("#title-pr-duphong").val();
			}
		}else{
			$("#error-tenquangcao").text("");
		}
		var content1=content.replace("'","").replace("'","");
		
		if( content1.trim() === ""){
			
			content="'"+$(".content-change-pr").html()+"'";
		}
		if(src==""){
			boolean=false;
			alert("Vui lòng chọn ảnh đại diện");
		}
		else{
			
		}
		if(boolean){
			
	$.post("./config/query-data-insert.php",{updatepr:1,name:name,src:src,content:content,id:id},function(data){
	
		if(data.status){
			alert("Thay đổi đã được lưu");
			 window.history.pushState({}, "Hide", "./?listquangcao=1");
				 location.reload();
		}
		else{
			alert("Xảy ra lỗi");
			
		}
	},"json");
		}
		else{
			alert('Đã xảy ra lỗi trong quá trình cập nhật');
		}
	});
});
