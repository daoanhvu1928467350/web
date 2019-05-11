// JavaScript Document
$(document).ready(function(){
	/*var height=0;
		 height=$("#main").height();
	
	if(height<800){
		height=900;
	}
	$("#menu-horizontal").height(height+100);
	var height1=$("#menu-horizontal").height();
	
	$("#night").height(height1);
	$("#main").ready(function(){
		
		var height1=$("#main").height();
		
		if(height1<800){
		height1=900;
	}
		$("#menu-horizontal").height(height1+100);
		var height2=$("#menu-horizontal").height();
	$("#night").height(height2);*/
		//$("#menu-horizontal").reload();
		if($(window).width()<768){
			$("#menu-vertical").removeClass("col-sm-9");
			$("#menu-vertical").addClass("col-sm-12");
			$("#main").removeClass("col-sm-9");
			$("#main").addClass("col-sm-12");
			$("#menu-vertical").css("z-index",'101');
		}
		 $('#main').bind('change', function () {
			 
			
			 var i=0;
			 var a=setInterval(function(){
				 if(i===0){
					 clearInterval(a);
				 }
			 },1000);
			 $("#main").ready(function(){
				  var height=0;
		 height=$("#main").height();
	 
	if(height<800){
		if(height===0){
			location.reload();
			//height=2300;
		}
		height=900;
		
		
	}
	$("#menu-horizontal").height(height+150);
	var height1=$("#menu-horizontal").height();
	
	$("#night").height(height1);
			 });
         
	
    
		
	});
$('#main').trigger('change');
	$(window).resize(function(){
		if($(this).width()<=768){
			//$("#menu-horizontal").removeClass("col-sm-3");
			$("#menu-horizontal").width(0);
			$("#menu-vertical").removeClass("col-sm-9");
			$("#menu-vertical").addClass("col-sm-12");
			$("#main").removeClass("col-sm-9");
			$("#main").addClass("col-sm-12");
			$("#menu-vertical").css("z-index",'101');
			$("#h3-header").hide();
			$(".text-component").hide();
			$("#menu-horizontal").removeClass("col-sm-3");
			
		}
		else{
			if($("#menu-horizontal").width(0)){
				
				$("#menu-horizontal").width(449.25);
				 $(".text-component").fadeIn(0);
				 $("#element-horizontal").css("margin-top","30px");
			$("#img-header-horizontal").css("height","auto","width","auto");
			$("#img-header-horizontal").css("margin-left","30%");
			$("#img-header-horizontal").css("margin-top","0px");
			$("#img-header-horizontal").css("margin-bottom","0px");
				$("#h3-header").show();
				$(" .active").css("display","block");
				 $("#element-horizontal").css("margin-top","10px");
			}
			
			$("#menu-horizontal").addClass("col-sm-3");
			$("#menu-horizontal").width("100%");
			$("#menu-horizontal").show();
			$("#menu-vertical").removeClass("col-sm-12");
			$("#menu-vertical").removeClass("col-sm-11");
			$("#menu-vertical").addClass("col-sm-9");
			$("#main").removeClass("col-sm-12");
			$("#main").removeClass("col-sm-11");
			$("#main").addClass("col-sm-9");
			$("#menu-vertical").css("z-index",'0');
			
		}
	});
	
	
    



	
	
});
	
