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
    
    
    $('#ngaykhoichieu').attr('min', maxDate);
    $('#ngayketthuc').attr('min', maxDate);
});
	var now = new Date();

var day = ("0" + now.getDate()).slice(-2);
var month = ("0" + (now.getMonth() + 1)).slice(-2);

var today = now.getFullYear()+"-"+(month)+"-"+(day) ;
 var ngayketthuc=now.getFullYear()+"-"+(("0" + (now.getMonth() + 2)).slice(-2))+"-"+(day) ;
$('#ngaykhoichieu').val(today);
$("#ngayketthuc").val(ngayketthuc);
	
	
	$("#btn-insert-film").click(function(){
		
	var img=$("#img-film img").attr("src");
	var video=$(".video").attr("src");
		var boolean=true;
	
	var phut=$("#phut").val();
	var content="'"+$("#richtext1").contents().find("body").html()+"'";
		
	var ngaykhoichieu=$("#ngaykhoichieu").val();
	 var tenphim=$("#namefilm").val();
	var ngayketthuc=$("#ngayketthuc").val();
		var loaiphim=$("#loaive").val();
		var arrdienvien=Array();
		var arrtheloai=Array();
		var ngonngu=$("#language").val();
		var a=new Date(ngaykhoichieu).getMonth()+1;
		var b=new Date(ngayketthuc).getMonth()+1;
		var year1=new Date(ngaykhoichieu).getFullYear();
		var year2=new Date(ngayketthuc).getFullYear();
		if((a>b)&&(year1<=year2)){
			alert("Thời điểm kết thúc phải lớn hơn thời điểm bắt đầu");
			boolean=false;
		}
		else if(a === b){
			var a1=new Date(ngaykhoichieu).getDate();
			var b1=new Date(ngayketthuc).getDate();
			if(a1>b1){
			alert("Thời điểm kết thúc phải lớn hơn thời điểm bắt đầu");
				boolean=false;
			}
			else{
				
			}
			
		}
		else{
			
		}
		var i=0;
		
		
			$(".item-tag").each(function(){
				arrdienvien[i]=$(this).attr("id");
				
				i++;
			});
		var j=0;
		$(".item-tag1").each(function(){
			arrtheloai[j]=$(this).attr("id").split("t")[1];
			j++;
		});
		var daodien=$("#daodien-select").val();
		
		if(tenphim ===""){
			$("#error-ten").text("Vui lòng nhập tên phim");
			boolean=false;
		}
		else{
			$("#error-ten").text("");
			
		}
		if(arrtheloai.length===0){
			$("#error-theloai").text("Vui lòng chọn thể loại phim");
			boolean=false;
		}
		else{
			$("#error-theloai").text("");
			
		}
		if(arrdienvien.length ===0){
			$("#error-dienvien").text("Vui lòng chọn diễn viên");
			boolean=false;
		}
		else{
			$("#error-dienvien").text("");
			
		}
		if(video ===""){
			$("#error-video").text("Vui lòng chọn trailer");
			boolean=false;
		}
		else{
			$("#error-video").text("");
			
		}
		
		if(boolean){
		
	
	$.post("/doan/admin/config/query-data-insert.php",{img:img,video:video,phut:phut,ngaykhoichieu:ngaykhoichieu,ngayketthuc:ngayketthuc,tenphim:tenphim,content:content,loaive:loaiphim,arrdienvien:arrdienvien,arrtheloai:arrtheloai,daodien:daodien,ngonngu:ngonngu,'insert-film':1},function(data){
		
		if(data.status=== true){
			alert('thành công');
			 window.history.pushState({}, "Hide", "./?phimdangchieu=1");
				 location.reload();
		}
		else{
			alert('Thất bại');
		}
	},"json");
		}
		else{
			alert('Có lỗi trong việc insert phim');
		}
	});
	$("#btn-phim1").click(function(){
		
		$("#thuvien-anh-phim").show();
		$("#night").show();
	});
	$("#close-phim").click(function(){
		
		$("#thuvien-anh-phim").hide();
		$("#night").hide();
	});
	/*$(".img-phim-thuvien1").click(function(){
		$(".img-phim-thuvien1").css("border","0px none");
		$(".img-phim-thuvien1").removeClass("active");
		$(this).css("border","5px #FFA300 solid");
		$(this).addClass("active");
		
	});*/
	$(".nav-item ").click(function(){
		var id=$(this).attr("id");
		if(id==='li-menu-phim'){
			$("#xong-phim").prop("disabled",true);
		}
		else{
			$("#xong-phim").prop("disabled",false);
		}
	});
	$("#xong-phim").click(function(){
	$(".img-phim-thuvien1").each(function(){
		if($(this).hasClass("active")){
			var a=$(this).find("img").attr("src");
			$("#img-anhdaidien-film").attr("src",a);
			/* window.history.pushState({}, "Hide", "./?themmoiphim=1&&src="+a);
				 location.reload();*/
			var height=$("#menu-horizontal").height()+350;
			$("#menu-horizontal").height(height);
			window.history.pushState({}, "Hide", "./?themmoiphim=1");
			
			$("#img-insert-upload-phim").show();
				$("#thuvien-anh-phim").hide();
		$("#night").hide();
			
		}
	});
		
	});
	$(".img-phim-thuvien1-video").click(function(){
		$(".img-phim-thuvien1-video").css("transition","transform .2s");
		$(".img-phim-thuvien1-video").css("transform","scale(1)");
		$(".img-phim-thuvien1-video").removeClass("active");
		$(this).css("transform","scale(1.2)");
		
		$(this).addClass("active");
	});
	$("#insert-video").click(function(){
		$("#thuvien-video-phim").show();
		$("#night").show();
	});
	$("#close-phim-video").click(function(){
		
		$("#thuvien-video-phim").hide();
		$("#night").hide();
	});
	$(".nav-item ").click(function(){
		var id=$(this).attr("id");
		if(id==='li-menu-phim-video'){
			$("#xong-phim-video").prop("disabled",true);
		}
		else{
			$("#xong-phim-video").prop("disabled",false);
		}
	});
	
	$("#xong-phim-video").click(function(){
		
	$(".img-phim-thuvien1-video").each(function(){
		if($(this).hasClass("active")){
			var a=$(this).find("video").attr("src");
			
			
			$(".video").attr("src",a);
			$("#insert-video-uploaded").show();
			var height=$("#menu-horizontal").height()+315;
			$("#menu-horizontal").height(height);
			/* window.history.pushState({}, "Hide", "./?themmoiphim=1&&src1="+a);
				 location.reload();*/
			window.history.pushState({}, "Hide", "./?themmoiphim=1");
			$("#thuvien-video-phim").hide();
		$("#night").hide();
			
		}
	});
		
	});
	$("#element-dienvien").click(function(){
		
			$("#search-dienvien").toggle();
		if($("#icon-search1").hasClass("svg-inline--fa fa-caret-down fa-w-10 item-icon")){
			$("#icon-search1").removeClass("svg-inline--fa fa-caret-down fa-w-10 item-icon");
			$("#icon-search1").addClass("svg-inline--fa fa-caret-up fa-w-10 item-icon");
			
		}
		else{
				$("#icon-searc1").removeClass("svg-inline--fa fa-caret-up fa-w-10 item-icon");
			$("#icon-search1").addClass("svg-inline--fa fa-caret-down fa-w-10 item-icon");
		
			
		}
	});
	$("#element-theloai").click(function(){
		
			$("#theloaiphim").toggle();
		if($("#icon-search2").hasClass("svg-inline--fa fa-caret-down fa-w-10 item-icon")){
			$("#icon-search2").removeClass("svg-inline--fa fa-caret-down fa-w-10 item-icon");
			$("#icon-search2").addClass("svg-inline--fa fa-caret-up fa-w-10 item-icon");
			
		}
		else{
				$("#icon-searc2").removeClass("svg-inline--fa fa-caret-up fa-w-10 item-icon");
			$("#icon-search2").addClass("svg-inline--fa fa-caret-down fa-w-10 item-icon");
		
			
		}
	});
	$(".item-theloai").click(function(){
		var a=$(this).attr("name");
		var a1="#"+a;
		var b=$(this).text();
		if($("#"+a).length){
			
		}
			else{
		
		
		$("#element-theloai").append("<div class='item-tag1' id='t"+a+"'>"+b+"      <i class='fas fa-window-close close-theloai' ></i>"+"</div>");
		
			}
		$("#theloaiphim").hide();
		if($("#icon-search2").hasClass("svg-inline--fa fa-caret-down fa-w-10 item-icon")){
			$("#icon-search2").removeClass("svg-inline--fa fa-caret-down fa-w-10 item-icon");
			$("#icon-search2").addClass("svg-inline--fa fa-caret-up fa-w-10 item-icon");
				
			
		}
		
		else{
				$("#icon-search2").removeClass("svg-inline--fa fa-caret-up fa-w-10 item-icon");
			$("#icon-search2").addClass("svg-inline--fa fa-caret-down fa-w-10 item-icon");
		
			
		}
	});
	$(".li-item-insertphim").click(function(){
		var a=$(this).attr("name");
		var a1="#"+a;
		var b=$(this).text();
		if($("#"+a).length){
			
		}
			else{
		
		
		$("#element-dienvien ").append("<div class='item-tag' id='"+a+"'>"+b+"      <i class='fas fa-window-close close-insert-phim' ></i>"+"</div>");
		
			}
		$("#search-dienvien").hide();
		if($("#icon-search1").hasClass("svg-inline--fa fa-caret-down fa-w-10 item-icon")){
			$("#icon-search1").removeClass("svg-inline--fa fa-caret-down fa-w-10 item-icon");
			$("#icon-search1").addClass("svg-inline--fa fa-caret-up fa-w-10 item-icon");
				
			
		}
		
		else{
				$("#icon-search1").removeClass("svg-inline--fa fa-caret-up fa-w-10 item-icon");
			$("#icon-search1").addClass("svg-inline--fa fa-caret-down fa-w-10 item-icon");
		
			
		}
	});
	
	$("#element-dienvien ").on('click','.close-insert-phim',function(e){
		$("#icon-search1").removeClass("svg-inline--fa fa-caret-up fa-w-10 item-icon");
			$("#icon-search1").addClass("svg-inline--fa fa-caret-down fa-w-10 item-icon");
			$("#search-dienvien").show();
		
			
		
		$(this).parent(this).remove();
		
	
	});	
	$("#element-theloai ").on('click','.close-theloai',function(e){
		$("#icon-search2").removeClass("svg-inline--fa fa-caret-up fa-w-10 item-icon");
			$("#icon-search2").addClass("svg-inline--fa fa-caret-down fa-w-10 item-icon");
			$("#theloaiphim").show();
		
			
		
		$(this).parent(this).remove();
		
	
	});	
	$("#delete-img-phim").click(function(){
		$(".img-phim-thuvien1").each(function(){
		if($(this).hasClass("active")){
			
			var id=$(this).find("img").attr("src");
			
			$.post("./config/query-data-insert.php",{id:id,unlink:1,imgphim:1},function(data){
				if(data.status){
					
					$("#home-phim").load("loadfile.php","name=image-film/&&ten=phim");
					$("#home-phim").append("<script src='js/insert-film-js.js'></script>");
				}
				else{
					alert("false");
				}
			},"json");
		}
	});
	});
	$("#search-dienvien1").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#ul-insertphim li ").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
		$("#ul-insertphim").height("auto");
    });
  });
	$("#delete-video-insert-phim1").click(function(){
		
		$(".img-phim-thuvien1-video").each(function(){
		if($(this).hasClass("active")){
			
			var id=$(this).find("video").attr("src");
			
			$.post("./config/query-data-insert.php",{id:id,unlink:1,videoinsertphim:1},function(data){
				if(data.status){
					
					$("#home-phim-video").load("loadvideo.php");
					//$("#home-phim-video").append("<script src='js/insert-film-js.js'></script>");
				}
				else{
					alert("false");
				}
			},"json");
		}
	});
	});
	$("#btn-update-film").click(function(){
		var id=$("#id-update-film").val();
		var img=$("#img-film img").attr("src");
	var video=$(".video").attr("src");
		var boolean=true;
	
	var phut=$("#phut").val();
		var content="";
		if(($("#richtext1").contents().find("body").html().trim()) ===""){
			
			 content="'"+$("#content-phim").html()+"'";
		}
		else{
			
			 content="'"+$("#richtext1").contents().find("body").html()+"'";
		}
	
		
	var ngaykhoichieu=$("#ngaykhoichieu1").val();
	 var tenphim=$("#namefilm").val();
	var ngayketthuc=$("#ngayketthuc1").val();
		var loaiphim=$("#loaive").val();
		var arrdienvien=Array();
		var arrtheloai=Array();
		var ngonngu=$("#language").val();
		var a=new Date(ngaykhoichieu).getMonth()+1;
		var b=new Date(ngayketthuc).getMonth()+1;
		var year1=new Date(ngaykhoichieu).getFullYear();
		var year2=new Date(ngayketthuc).getFullYear();
		if((a>b)&&(year1<=year2)){
			alert("Thời điểm kết thúc phải lớn hơn thời điểm bắt đầu");
			boolean=false;
		}
		else if(a === b){
			var a1=new Date(ngaykhoichieu).getDate();
			var b1=new Date(ngayketthuc).getDate();
			if(a1>b1){
			alert("Thời điểm kết thúc phải lớn hơn thời điểm bắt đầu");
				boolean=false;
			}
			else{
				
			}
			
		}
		else{
			boolean=false;
		}
		
		var i=0;
			$(".item-tag").each(function(){
				arrdienvien[i]=$(this).attr("id");
				i++;
			});
		var j=0;
		$(".item-tag1").each(function(){
			arrtheloai[j]=$(this).attr("id");
			j++;
		});
		var daodien=$("#daodien-select").val();
		
		if(tenphim ===""){
			$("#error-ten").text("Vui lòng nhập tên phim");
			boolean=false;
		}
		else{
				$("#error-ten").text("");
		}
		if(arrtheloai.length===0){
			$("#error-theloai").text("Vui lòng chọn thể loại phim");
			boolean=false;
		}
		else{
				$("#error-theloai").text("");
			
		}
		if(arrdienvien.length ===0){
			$("#error-dienvien").text("Vui lòng chọn diễn viên");
			boolean=false;
		}
		else{
			$("#error-dienvien").text("");
		}
		if(video ===""){
			$("#error-video").text("Vui lòng chọn trailer");
			boolean=false;
		}else{
			$("#error-video").text("");
		}
	
		
		if(boolean){
		
	
	$.post("/doan/admin/config/query-data-insert.php",{id:id,img:img,video:video,phut:phut,ngaykhoichieu:ngaykhoichieu,ngayketthuc:ngayketthuc,tenphim:tenphim,content:content,loaive:loaiphim,arrdienvien:arrdienvien,arrtheloai:arrtheloai,daodien:daodien,ngonngu:ngonngu,'update-film':1},function(data){
		
		if(data.status=== true){
			alert('thành công');
			 window.history.pushState({}, "Hide", "./?phimdangchieu=1");
				 location.reload();
		}
		else{
			alert('Thất bại');
		}
	},"json");
		}
		else{
			alert('Có lỗi trong việc insert phim');
		}
	});
});