// JavaScript Document
$(document).ready(function(){
	$(".theloai").click(function(){
		var id=$(this).attr("id");
		var page=$("#page").val();
		var value=confirm("Bạn có chắc muốn xóa thể loại này");
		if(value){
			$.post("./config/query-data-insert.php",{id:id,deletetheloai:1},function(data){
				
				if(data.status){
					$("#main").load("listtheloai.php","page="+page);
				}
				else{
					alert("Đã xảy ra lỗi");
				}
			},"json");
		}
	});
});