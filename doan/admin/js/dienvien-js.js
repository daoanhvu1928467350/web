// JavaScript Document
$(document).ready(function(){
	$(".dienvien").click(function(){
		var id=$(this).attr("id");
		var page=$("#page").val();
	    var value=confirm("Bạn chắc chắn muốn xóa  diễn viên này");
		if(value){
			$.post("./config/query-data-insert.php",{id:id,deletedienvien:1},function(data){
				
				if(data.status){
					$("#main").load("dienvien.php","page="+page);
				}
				else{
					alert("Đã xảy ra lỗi");
				}
			},"json");
		}
	});
});