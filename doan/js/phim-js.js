// JavaScript Document
$("#selection-movie").ready(function(){
	var length=$("#selection-movie #listfilm ul li").length;
	var width=$("#listfilm ul li").width();
	$("#listfilm ul").width(width*length);
	var time=400;
	$("#selection-movie #listfilm .control-next-phim").click(function(){
		
	    var first=$("#listfilm ul li:first");
		first.animate({
			marginLeft:-width-50
		},time,function(){
			
			first.remove().css({'margin-left':'0px'});
			$("#listfilm ul li:last").after(first.css({'margin-left':'0px'}));
			$(".item").mouseenter(function(){
			$(this).find(".position-muave").show();
		    $(this).find(".btn-muave").show();
			});
			$(".item").mouseleave(function(){
		$(this).find(".position-muave").hide();
		$(this).find(".btn-muave").hide();
	});
			
		});
	});
	$("#selection-movie #listfilm .control-prev-phim").click(function(){
		
		var last=$("#listfilm ul li:last");
		last.remove().css({'margin-left':-width});
		$("#listfilm ul li:first").before(last.css({'margin-right':'10px'}));
			$(".item").mouseenter(function(){
		$(this).find(".position-muave").show();
		$(this).find(".btn-muave").show();
	});
	$(".item").mouseleave(function(){
		$(this).find(".position-muave").hide();
		$(this).find(".btn-muave").hide();
	});
		last.animate({
			marginLeft:'0px'
			
		},time,function(){
		
		});
	});
	$(".item").mouseenter(function(){
		$(this).find(".position-muave").show();
		$(this).find(".btn-muave").show();
	});
	$(".item").mouseleave(function(){
		$(this).find(".position-muave").hide();
		$(this).find(".btn-muave").hide();
	});
	
	
});