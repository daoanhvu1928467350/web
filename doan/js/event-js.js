// JavaScript Document
$(document).ready(function(){
		/**/ var slideCount = $('#element-event #slider-carousel ul li').length;
	
    var slideWidth = $('#element-event #slider-carousel ul li').width();
     var size=slideCount*slideWidth;
	var timeat=1;
	$("#element-carousel").width(size);
	$(".control-next").click(function(){
	    
		moveRight();
	});
	$("#slider-carousel .control-prev").click(function(){
		
		moveLeft();
	});
	


    

   

    

    function moveLeft() {
	   var last=$("#element-carousel li:last");
		last.remove().css({'margin-left':-slideWidth*timeat});
				$("#element-carousel li:first").before(last.css({'margin-right':'10px'}));
		last.animate(
{
				marginLeft:'0px'
			},400);
       
    }
	

    function moveRight() {
		var $first=$("#element-carousel li:first");
        $first.animate({
            marginLeft:-slideWidth*timeat
        },400, function () {	
			 $first.remove().css({ 'margin-left': '0px' });
			$("#element-carousel li:last").after($first.css({'margin-left':'0px'}));
        });
		
		
    }
	/*var lengthitem=$(".item").length;
	var widthitem=$(".item").eq(0).width();
	var itemlast=$(".item").length;;
	var itemfirst=0;
	
	
	$(".control-next").click(function(){
		alert('xin chao');
		moveleft();
		
	});
	$(".control-prev").click(function(){
		
		moveright();
	});
	
	function moveleft(){
		itemfirst++;
	      swipeleft($(".item"),itemfirst);
	}
	function moveright(){
		
	}
	function swiperight(){
		$(".item").animate({
			left:0
		},400,function(){
			
		});
	}
	function swipeleft(el,thamso){
			el.animate({
			left:-widthitem*thamso-55*thamso
		},400,function(){
			
		});
	}
	*/
});