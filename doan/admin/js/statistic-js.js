// JavaScript Document
$(document).ready(function(){
	$(".item-statistic").mouseenter(function(){
	
		$(this).find(".icon-statistic").css("transform","scale(1.2)");
	});
	$(".item-statistic").mouseleave(function(){
	
		$(this).find(".icon-statistic").css("transform","scale(1)");
	});
});