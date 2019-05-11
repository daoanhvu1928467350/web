// JavaScript Document
$(document).ready(function(){
	$(function(){
    var dtToday = new Date();
    
    var month = dtToday.getMonth() + 1;
  
		
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();
    
    var maxDate = year + '-' + month + '-' + day;
    
    
    $('#ngaymorap').attr('min', maxDate);
  
});
	var now = new Date();

var day = ("0" + now.getDate()).slice(-2);
var month = ("0" + (now.getMonth() + 1)).slice(-2);

var today = now.getFullYear()+"-"+(month)+"-"+(day) ;

$('#ngaymorap').val(today);

	$("#btn-thuvien-rap").click(function(){
	
		
		$("#thuvien-anh-rapchieuphim").show();
		$("#night").show();
	
	});
	$("#close-rapchieuphim").click(function(){
		
		$("#thuvien-anh-rapchieuphim").hide();
		$("#night").hide();
	});
	$("#btn-taorap").click(function(){
	  
		var select=$("#select-cumrap").val();
		
		var tenrap=$("#tenrap").val();
		var diachi=$("#diachi").val();
		var quan=$("#quan").val();
		var thanhpho=$("#thanhpho").val();
		var date=$("#ngaymorap").val();
		var img=$("#img-pr").attr("src");
	  var boolean=true;
		if(tenrap ===""){
			$("#tenrap").css("border","1px solid red");
			boolean=false;
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
		$.post("./config/query-data-insert.php",{select:select,tenrap:tenrap,diachi:diachi,quan:quan,thanhpho:thanhpho,date:date,img:img,rapchieuphim:1},function(data){
			
			if(data.status){
				alert("Thành công");
			}
			else{
				alert("thất bại");
			}
		},"json");
		}
		else{
			alert('Có lỗi trong quá trình cập nhật');
		}
	});
	/*$(".img-rapchieuphim1-thuvien1").click(function(){
		$(".img-rapchieuphim1-thuvien1").css("border","0px none");
		$(".img-rapchieuphim1-thuvien1").removeClass("active");
		$(this).css("border","5px #FFA300 solid");
		$(this).addClass("active");
	});*/
	$(".nav-item ").click(function(){
		var id=$(this).attr("id");
		if(id==='li-menu-rapchieuphim'){
			$("#chonanh-rapchieuphim").prop("disabled",true);
		}
		else if(id==='li-home-rapchieuphim'){
			$("#chonanh-rapchieuphim").prop("disabled",false);
		}
	});
	$("#chonanh-rapchieuphim").click(function(){
	$(".img-rapchieuphim1-thuvien1").each(function(){
		if($(this).hasClass("active")){
			var a=$(this).find("img").attr("src");
		
			$("#img-pr").attr("src",a);
			var height=$("#menu-horizontal").height()+300;
			$("#menu-horizontal").height(height);
			$("#img-uploaded-raphchieuphim").show();
			window.history.pushState({}, "Hide", "./?thongtinrap=1");
			/* window.history.pushState({}, "Hide", "./?thongtinrap=1&&src="+a);
				 location.reload();*/
			$("#thuvien-anh-rapchieuphim").hide();
		$("#night").hide();
			
		}
	});
		
	});
	$(".delete-img-rapchieuphim").click(function(){
		$(".img-rapchieuphim1-thuvien1").each(function(){
		if($(this).hasClass("active")){
			
			var id=$(this).find("img").attr("src");
			
			$.post("./config/query-data-insert.php",{id:id,unlink:1,imgrapchieuphim:1},function(data){
				if(data.status){
					
					$("#home").load("loadfile.php","name=image-rapchieuphim/&&ten=rapchieuphim1");
					
					//$("<script src='js/insert-rapchieuphim-js.js'></script>").appendTo("#home");
				}
				else{
					alert("false");
				}
			},"json");
		}
	});
	});
});