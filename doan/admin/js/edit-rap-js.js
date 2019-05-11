// JavaScript Document
$(document).ready(function(){
	$("#btn-thuvien-rap-change").click(function(){
		$("#night").show();
		$("#thuvien-anh-rapchieuphim-change").show();
	});
	$("#close-rapchieuphim-change").click(function(){
		
		$("#night").hide();
		$("#thuvien-anh-rapchieuphim-change").hide();
	});
	$(".img-thuvien-rapchieuphim1").click(function(){
		$(".img-thuvien-rapchieuphim1").css("border","0px none");
		$(".img-thuvien-rapchieuphim1").removeClass("active");
		$(this).css("border","5px #FFA300 solid");
		$(this).addClass("active");
	});
	$("#btn-taorap-change").click(function(){
		var name=$("#tenrap").val();
		var diachi=$("#diachi").val();
		var quan =$("#quan").val();
		var thanhpho=$("#thanhpho").val();
		var ngaymorap=$("#ngaymorap").val();
		var id=$("#id").val();
		var img=$("#img-pr").attr("src");
		var boolean=true;
		if(name===""){
			boolean=false;
			$("#tenrap").css("border","1px solid red");
		}
		else{
			$("#tenrap").css("border","1px solid #CED4DA");
		}
		if(diachi === ""){
			$("#diachi").css("border","1px solid red");
			boolean=false;
		}
		else{
			$("#diachi").css("border","1px solid #CED4DA");
			
		}
		if(quan === ""){
			$("#quan").css("border","1px solid red");
			boolean=false;
		}
		else{
			$("#quan").css("border","1px solid #CED4DA");
			
		}
		if(thanhpho ===""){
			$("#thanhpho").css("border","1px solid red");
			boolean=false;
		}
		else{
			$("#thanhpho").css("border","1px solid #CED4DA");
			
		}
		
			if(img === ""){
				alert("Vui lòng chọn ảnh cho rạp chiếu phim");
				boolean=false;
			}
		if(boolean){
		$.post("./config/query-data-insert.php",{name:name,diachi:diachi,quan:quan,thanhpho:thanhpho,ngaymorap:ngaymorap,img:img,id:id,updaterap:1},function(data){
			
			if(data.status){
				alert("Lưu thành công");
				 window.history.pushState({}, "Hide", "./?listrapchieuphim=1");
				 location.reload();
			}
			else{
				alert("Lưu thất bại");
			}
		},"json");
		}
	});
	$("#chonanh-rapchieuphim-change").click(function(){
		$(".img-thuvien-rapchieuphim1").each(function(){
		if($(this).hasClass("active")){
			var a=$(this).find("img").attr("src");
			$("#img-pr").attr("src",a);
		$("#night").hide();
		$("#thuvien-anh-rapchieuphim-change").hide();
			
			
		}
	});
	});
});