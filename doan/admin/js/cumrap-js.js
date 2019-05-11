// JavaScript Document
$(document).ready(function(){
	$(".delete-cumrap").click(function(){
		var id=$(this).attr("id");
		alert(id);
		var value=confirm("Bạn có chắc muốn xóa cụm rạp này không??");
		if(value){
		$.post("./config/query-data-insert.php",{deletecumrap:id},function(data){
			
			if(data.status){
				
				$("#main").load("cumrap.php");
			}else{
				alert("Thất bại");
			}
		},"json");
		}
	});
});