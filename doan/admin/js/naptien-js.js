// JavaScript Document
$(document).ready(function(){
	
	$(".naptien").click(function(){
		var nap=$(this).attr("id");
		var sotien=$(".sotien").eq(nap).val();
		var id=$(".id").eq(nap).val();
		
		$.post("./config/query-data-insert.php",{sotien:sotien,id:id,naptien:1},function(data){
			if(data.status){
				alert("thành công");
				location.reload();
			}
		},'json');
	});
	$(".delete-user").click(function(){
		var value=confirm("Bạn chắc muốn xóa thành viên này");
		var page=$("#page").val();
		if(value){
		var id=$(this).attr("id");
		$.post("./config/query-data-insert.php",{id:id,deleteuser:1},function(data){
			if(data.status){
				alert("Thành công");
				$("#main").load("naptien.php","page="+page);
			}
		},"json");
		}
	});
	 $(".sotien").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
     
               return false;
    }
   });
});