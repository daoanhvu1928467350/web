// JavaScript Document
$(document).ready(function(){
	$("#img-loaive").click(function(){
		$("#thuvien-anh-loaive").show();
		$("#night").show();
	});
	$("#close-loaive").click(function(){
		$("#thuvien-anh-loaive").hide();
		$("#night").hide();
	});
	$(".img-loaive-thuvien1").click(function(){
		
		$(".img-loaive-thuvien1").css("border","0px none");
		$(".img-loaive-thuvien1").removeClass("active");
		$(this).css("border","5px #FFA300 solid");
		$(this).addClass("active");
	});
	$("#xong-loaive").click(function(){
		$(".img-loaive-thuvien1").each(function(){
		if($(this).hasClass("active")){
			var a=$(this).find("img").attr("src");
		
			$("#img-loaive1").attr("src",a);
			$("#img-loaive-duphong").val(a);
			/* window.history.pushState({}, "Hide", "./?themmoiphim=1&&src="+a);
				 location.reload();*/
			var height=$("#menu-horizontal").height()+200;
			$("#menu-horizontal").height(height);
			window.history.pushState({}, "Hide", "./?themthongtinve=1");
			
			$("#div-loaive1").show();
			$("#thuvien-anh-loaive").hide();
		$("#night").hide();
			
		}
	});
	});
	$("#delete-img-loaive").click(function(){
		
		$(".img-loaive-thuvien1").each(function(){
		if($(this).hasClass("active")){
			
			var id=$(this).find("img").attr("src");
			
			$.post("./config/query-data-insert.php",{id:id,unlink:1,loaive:1},function(data){
				if(data.status){
					
					$("#home-loaive").load("loadfile.php","name=image-loaive/&&ten=loaive");
					$("#home-loaive").append("<script src='js/insert-loaive-js.js'></script>");
				}
				else{
					alert("false");
				}
			},"json");
		}
	});
	});
	$("#submit-loaive").click(function(e){
		var img1=$("#img-loaive-duphong").val();
		
		if(img1 ==""){
			e.preventDefault();
			alert("Vui lòng chọn ảnh loại vé");
		}
		
		
	});
});