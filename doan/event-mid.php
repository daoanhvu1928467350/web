
<?php
						
						$sql="select * from event";
						$data=$model->select($sql);
if($data->num_rows>0){
                    
						 ?>
						 <div id="slider-carousel" class="col-sm-12 col-xs-12">
						 	<div class="control-prev"><i class="fa fa-chevron-circle-left"></i></div>
							 <div class="control-next"><i class="fa fa-chevron-circle-right"></i></div>
	                        <ul  id="element-carousel" >
	                        	<?php
	                             while($row=$data->fetch_assoc()){
									 ?>
									 <li class="item" >
									 	<a href="./?infomation-event=1&&event_id=<?=$row['id_event']?>" class="anchor-background" >
									 		
									 			<div id="div-img-event" >
									 				<img src="<?=$row['image_event']?>" id="img-event">
									 			</div>
									 			
									 		
									 	</a>
									 </li>
									 <?php
								 }
	?>
	                        </ul>
						 </div>
						 <?php
					 
}
							 
					 
						?>
					<script src="js/event-js.js"></script>
