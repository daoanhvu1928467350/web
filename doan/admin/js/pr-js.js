// JavaScript Document
$(document).ready(function(){
	$("#div-img-pr1 #btn-img").click(function(){
		
		$("#thuvien-anh").show();
		$("#night").show();
	});
	$("#close").click(function(){
		$("#thuvien-anh").hide();
		$("#night").hide();
	});
	$("#btn-insert-pr").click(function(){
		var ten=$("#tenpr").val();
		var img=$("#img-pr").attr("src");
		var boolean=true;
		if(ten == ""){
			$("#error-noidungquangcao").text("Vui lòng nhập tên quảng cáo");
			boolean=false;
		}
		else{
			$("#error-noidungquangcao").text("");
			
		}
		if(img == ""){
			boolean=false;
			alert("Vui lòng chọn ảnh quảng cáo");
		}else{
			
		}
		var content="'"+$("#richtext1").contents().find("body").html()+"'";
		if(boolean){
		$.post("./config/query-data-insert.php",{ten:ten,img:img,content:content,pr:1},function(data){
			if(data.status){
				alert("Thành công");
				  window.history.pushState({}, "Hide", "./?listquangcao=1");
				 location.reload();
			}
			else{
				alert("Thất bại");
			}
		},"json");
		}else{
			alert('Có lỗi thêm quảng cáo');
		}
	});
	/*$(".img-quangcao-thuvien1").click(function(){
		$(".img-quangcao-thuvien1").css("border","0px none");
		$(".img-quangcao-thuvien1").removeClass("active");
		$(this).css("border","5px #FFA300 solid");
		$(this).addClass("active");
	});*/
	$(".nav-item ").click(function(){
		var id=$(this).attr("id");
		if(id==='li-menu'){
			$("#xong").prop("disabled",true);
		}
		else{
			$("#xong").prop("disabled",false);
		}
	});
	$("#xong").click(function(){
	$(".img-quangcao-thuvien1").each(function(){
		if($(this).hasClass("active")){
			var a=$(this).find("img").attr("src");
			$("#img-pr").attr("src",a);
			var height=$("#menu-horizontal").height()+300;
			$("#menu-horizontal").height(height);
			$("#image-inserted").show();
			window.history.pushState({}, "Hide", "./?insert-quangcao=1");
			$("#thuvien-anh").hide();
		$("#night").hide();
			/* window.history.pushState({}, "Hide", "./?insert-quangcao=1&&src="+a);
				 location.reload();*/
			
			
		}
	});
		
	});
	$("#delete-img-quangcao").click(function(){
		
		$(".img-quangcao-thuvien1").each(function(){
		if($(this).hasClass("active")){
			
			var id=$(this).find("img").attr("src");
			
			$.post("./config/query-data-insert.php",{id:id,unlink:2,imgpr:1},function(data){
				
				if(data.status){
					
					$("#home").load("loadfile.php","name=image-quangcao/&&ten=quangcao");
					//$("<script src='js/pr-js.js'></script>").appendTo("#home");
				}
				else{
					alert("false");
				}
			},"json");
		}
	});
	});
	
	
});