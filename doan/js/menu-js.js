// JavaScript Document
$(document).ready(function(){
	
	$(".title-menu").mouseenter(function(){
		var id=$(this).attr("id");
		if(id==="extend-phim"){
			$("#item-phim-menu ul").show();
		}
		else if(id==="extend-rap"){
			$("#item-rap-menu ul").show();
		}
		else{
			$("#item-thanhvien-menu ul").show();
		}
		
		
	});
	
	$(".extend li a").mouseenter(function(){
		$(this).append("<i class='far fa-hand-point-right'></i>");
	});
	$(".extend li a").mouseleave(function(){
		
		$(this).find("svg").remove();
	});
	$(".item-menu").mouseleave(function(){
		
		
			$("#item-phim-menu ul").hide();
		
		
			$("#item-rap-menu ul").hide();
		
		
			$("#item-thanhvien-menu ul").hide();
		
		
	});
	$(".li-item").click(function(){
		$(".li-item").removeClass("active-reponsive");
		
		$(this).addClass("active-reponsive");
		var id=$(this).attr("id");
		switch(id){
			case 'phim-reponsive-link':
				
				$("#tab-menu").load("element-reponsive/element-menu-reponsive.php");
				break;
			case 'search-reponsive-link':
				$("#tab-menu").load("element-reponsive/search-reponsive.php");
				break;
			case 'user-reponsive-link':
				$("#tab-menu").load("element-reponsive/user-reponsive.php");
				break;
				
		}
	});
	
	
});