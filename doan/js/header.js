// JavaScript Document
$(document).ready(function(){
	$("#element-login").mouseenter(function(){
	    $("#form-infomation-user").show();	
	});
	$("#element-login").mouseleave(function(){
			    $("#form-infomation-user").hide();	
	});
	$("#logout").click(function(){
		$.post('http://localhost:8080/doan/logout.php',{},function(data){
			
			if(data.status === true){
				location.reload();
			}
			else{
				alert('Đã xảy ra lỗi');
			}
		},"json");
	});
	 $("#search2").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myList li").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
    });
  });
	
	$("#myList li").click(function(){
		
		$("#filter").hide();
	});
	 $("#search").focusin(function(){
		 $("#filter").show();
		 
	 });
	$("#search").click(function(){
		$("#filter").show();
	});
	
	$("#filter").mouseenter(function(){
			$("#filter").show();
		});
		$("#filter").mouseleave(function(){
			
		$("#filter").hide();
		});
	
	
});