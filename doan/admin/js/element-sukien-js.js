// JavaScript Document
$(document).ready(function(){
	$("#show-content-change").click(function(){
		if($(this).find("svg").hasClass("svg-inline--fa fa-caret-down fa-w-10")){
			$(this).find("svg").removeClass("svg-inline--fa fa-caret-down fa-w-10");
			$(this).find("svg").addClass("svg-inline--fa fa-caret-up fa-w-10");
			$(".div-mota").show();
			var height=$("#menu-horizontal").height()+100;
			$("#menu-horizontal").height(height);
		}
		else{
			$(this).find("svg").removeClass("svg-inline--fa fa-caret-up fa-w-10");
			$(this).find("svg").addClass("svg-inline--fa fa-caret-down fa-w-10");
			$(".div-mota").hide();
			var height1=$("#menu-horizontal").height()-100;
			$("#menu-horizontal").height(height1);
		}
		
	});
	$("#sukien-change-btn").click(function(){
		$("#thuvien-anh-change-sukien").show();
		$("#night").show();
	});
	$("#close-change-sukien").click(function(){
		$("#thuvien-anh-change-sukien").hide();
		$("#night").hide();
	});
	$(".img-event-thuvien1").click(function(){
		$(".img-event-thuvien1").css("border","0px none");
		$(".img-event-thuvien1").removeClass("active");
		$(this).css("border","5px #FFA300 solid");
		
		$(this).addClass("active");
	});
	$("#xong-event-change").click(function(){
		
		$(".img-event-thuvien1").each(function(){
		if($(this).hasClass("active")){
			var a=$(this).find("img").attr("src");
			
			$("#img-change-event img").attr("src",a);
			$("#thuvien-anh-change-sukien").hide();
		$("#night").hide();
			
		}
	});
	});
	$("#btn-update-event").click(function(){
		var name=$("#title-change-event").val();
		var src=$("#img-change-event img").attr("src");
		var content="'"+$("#richtext2").contents().find("body").html()+"'";
		var id=$("#id-event").val();
		var boolean=true;
		if(name == ""){
			
			if($("#title-duphong").val() ===""){
				$("#err-tensukien").text("Vui lòng nhập tên sự kiện");
				boolean=false;
			}else{
				$("#err-tensukien").text("");
			}
			
			
			name=$("#title-duphong").val();
		}
		if( src ===""){
			boolean=false;
			alert("Vui lòng chọn ảnh quảng cáo");
		}
		var content1=content.replace("'","").replace("'","");
		
		if( content1.trim() === ""){
			
			content="'"+$(".content-change-event").html()+"'";
		}
		
		if(boolean){
	$.post("./config/query-data-insert.php",{updateevent:1,name:name,src:src,content:content,id:id},function(data){
		if(data.status){
			alert("Thay đổi đã được lưu");
			 window.history.pushState({}, "Hide", "./?danhsachsukien=1");
				 location.reload();
		}
		else{
			alert("Xảy ra lỗi");
			
		}
	},"json");
		}
		else{
			alert('Xảy ra lỗi trong quá trình cập nhật sự kiện');
		}
	});
});