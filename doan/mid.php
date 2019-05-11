<?php
require("config/model.php");
	$model=new model();
?>
		<div  class="col-sm-12 col-xs-12">
			<div class="row non-row" id="img-movie">
			<hr width=30%/>
				<img src="image/movie.PNG" id="movie">
				<hr width=30%/>
				</div>
				<div class="row" id="title-phimdangchieu">
				<h2 >Phim đang chiếu</h2>
				</div>
				<div id="selection-movie">
					<?php
					require("phim-mid.php");
					?>
				</div>	
			</div>
				<div class="row non-row col-sm-12 col-xs-12" id="event">
				
				<hr width=40%/>
					<img src="image/event2.PNG" id="img-mid-event">
					<hr width=45%/>
					
					<div id="element-event">
						<?php
						require("event-mid.php");
						?>
						
					</div>
				</div>
