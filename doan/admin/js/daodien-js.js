// JavaScript Document
$(document).ready(function(){
	$(".daodien").click(function(){
		var id=$(this).attr("id");
		var page=$("#page").val();
	    var value=confirm("Bạn chắc chắn muốn xóa đạo diễn này");
		if(value){
			$.post("./config/query-data-insert.php",{id:id,deletedaodien:1},function(data){
				
				if(data.status){
					$("#main").load("listdaodiendienvien.php","page="+page);
				}
				else{
					alert("Đã xảy ra lỗi");
				}
			},"json");
		}
	});
});