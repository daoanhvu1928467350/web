// JavaScript Document
$(document).ready(function(){
	$("#close-img-error-thanhtoan").click(function(){
		$("#img-error-thanhtoan").hide();
		$("#night2").hide();
		 window.history.pushState({}, "Hide","./");
					 location.reload();
	});
});