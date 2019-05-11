// JavaScript Document
$(document).ready(function(){
	$(".tr-phimdangchieu").click(function(){
		var name=$(this).attr("name");
		$("#"+name).show();
		$("#night").show();
		
	});
	$(".tr-phimsapchieu").click(function(){
		var name=$(this).attr("name");
		
		$("#"+name).show();
		$("#night").show();
		
	});
	$(".delete-detail-phim").click(function(){
		var value=confirm("Bạn có chắc muốn xóa phim này");
		var name=$(this).attr("name");
		if(value){
			$.post("./config/query-data-insert.php",{id:name,deletephim:1},function(data){
				if(data.status){
					alert("Phim đã được xóa");
					location.reload();
				}
				else{
					alert("Đã xảy ra lỗi");
				}
			},"json");
		}
		else{
			
		}
	});
	
	$(".icon").click(function(){
		var name=$(this).attr("name");
		
		$("#"+name).hide();
		$("#night").hide();
	});
});