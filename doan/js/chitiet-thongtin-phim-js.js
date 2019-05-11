// JavaScript Document
$(document).ready(function(){
	$("#play-trailer-phim").click(function(){
		$("#myVideo").get(0).play();
	});
	var now = new Date();

var day = ("0" + now.getDate()).slice(-2);
var month = ("0" + (now.getMonth() + 1)).slice(-2);

var today = now.getFullYear()+"-"+(month)+"-"+(day) ;
 
$('#date-lichchieu').val(today);
	$("#date-lichchieu").bind('input',function(){
		var cumrap=$("#select-lichchieuphim").val();
		var ngay=$(this).val();
		var idfilm=$("#idphim-lichchieu").val();
		var i=0;
		var myVar = setInterval(myTimer, 1000);
		$("#load").show();
			$("#night2").show();
function myTimer() {
   
			
			if(i===0){
				clearInterval(myVar);
				$("#load").hide();
		$("#night2").hide();
				$("#lichchieuphim").load("lichchieuphim.php","cumrap="+cumrap+"&&ngay="+ngay+"&&id="+idfilm);
			}
	i++;
	
}
		
		
		
	});
	$("#select-lichchieuphim").change(function(){
			var cumrap=$(this).val();
		var ngay=$("#date-lichchieu").val();
		var idfilm=$("#idphim-lichchieu").val();
			var myVar = setInterval(myTimer, 1000);
		var i=0;
		$("#load").show();
			$("#night2").show();
function myTimer() {
   
			
			if(i===0){
				clearInterval(myVar);
				$("#load").hide();
		$("#night2").hide();
				$("#lichchieuphim").load("lichchieuphim.php","cumrap="+cumrap+"&&ngay="+ngay+"&&id="+idfilm);
			}
	i++;
	
}
		
	});
	var selected=$("#select-lichchieuphim").val();
	var ngay=$("#date-lichchieu").val();
	var idfilm=$("#idphim-lichchieu").val();
	
	$("#lichchieuphim").load("lichchieuphim.php","cumrap="+selected+"&&ngay="+ngay+"&&id="+idfilm);
	/*
	$(function(){
    var dtToday = new Date();
    
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();
    
    var maxDate = year + '-' + month + '-' + day;
    
    $('#date-lichchieu').attr('min', maxDate);
});
	*/
});