
<div class="col-md-12 col-sm-12 col-lg-12 margin-left padding bg-white">
	<h5>Top 30 đặt vé gần đây</h5>
	<div id="table-lichsu" class="col-lg-12 col-xs-12 col-md-12">
		<?php
		include("div-lichsu.php");
		?>
	</div>
	<script>
		$(document).ready(function(){
			var i=0;
		setInterval(function(){
			
			if(i==60){
				i=0;
				$("#table-lichsu").load("div-lichsu.php");
			}
			i++;
		},1000);
		});
		
	</script>
</div>