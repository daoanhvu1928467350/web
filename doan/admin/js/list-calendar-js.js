// JavaScript Document
$(document).ready(function(){
	var now = new Date();

var day = ("0" + now.getDate()).slice(-2);
var month = ("0" + (now.getMonth() + 1)).slice(-2);

var today = now.getFullYear()+"-"+(month)+"-"+(day) ;
 
$('#date-lichchieu').val(today);
	var rapchieuphim=$("#rapchieuphim-select").val();
	var ngaychieu=$("#date-lichchieu").val();
	$("#element-lichchieu").load("lichchieuphim.php",{rapchieuphim:rapchieuphim,ngaychieu:ngaychieu});
	$("#main").ready(function(){
		var a=$(this).height();
		var b=$("#element-lichchieu").height();
		
		$("#menu-horizontal").height(a+500);
	});
	
	$("#rapchieuphim-select").change(function(){
		var i=0;
		$("#night").show();
		$("#waiting").show();
		var mycar=setInterval(function(){
			if(i===0){
				$("#night").hide();
		$("#waiting").hide();
				clearInterval(mycar);
			}
		},1000);
		
		
		var rapchieuphim=$("#rapchieuphim-select").val();
	var ngaychieu=$("#date-lichchieu").val();
		$("#element-lichchieu").load("lichchieuphim.php",{rapchieuphim:rapchieuphim,ngaychieu:ngaychieu});
	});
	$("#date-lichchieu").bind('input',function(){
		var i=0;
		$("#night").show();
		$("#waiting").show();
		var mycar=setInterval(function(){
			if(i===0){
				$("#night").hide();
		$("#waiting").hide();
				clearInterval(mycar);
			}
		},1000);
		
		
		var rapchieuphim=$("#rapchieuphim-select").val();
	var ngaychieu=$("#date-lichchieu").val();
		$("#element-lichchieu").load("lichchieuphim.php",{rapchieuphim:rapchieuphim,ngaychieu:ngaychieu});
		});
});