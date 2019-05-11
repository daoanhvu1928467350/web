// JavaScript Document
$(document).ready(function(){
	$(".delete-khuvucchieu").click(function(){
		var id=$(this).attr("id");
		var idrap=$("#idrap").val();
		$.post("./config/query-data-insert.php",{deletekhuvucchieu:id},function(data){
			if(data.status){
				$("#main").load("khuvucchieu.php","khuvucchieu="+idrap);
			}else{
				alert('Thất bại');
			}
		},"json");
	});
});