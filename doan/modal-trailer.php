<?php


if(isset($_GET['id'])){
	$id=$_GET['id'];
$sql="select trailer,namefilm from listfilm where id=$id limit 1";
	$data=$main->model->select($sql);
	$row=$data->fetch_assoc();
	
?>
<div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"><?=$row['namefilm']?></h4>
          <button type="button" class="close" data-dismiss="modal" id="close-iframe">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
       <!--  <iframe src="<?='/doan/admin/video/upload/'.$row['trailer']?>?&autoplay=false" width=1000 height=440 controls="0" class="embed-responsive-item" frameborder="0" id="trailer" autoplay="0">
         </iframe>-->
         <video width=1000 height=440 controls id="myVideo" >
         	<source src="<?='/doan/admin/video/upload/'.$row['trailer']?>" type="video/mp4">
         </video>
        </div>
       <script>
		    
		   $(document).ready(function(){
			   
			    $("#close-iframe").click(function(){
			   $("#myVideo").get(0).pause();
		   });
		 
		
		   
		   });
		   
		   
		  </script>
        <!-- Modal footer 
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        -->
      </div>
    </div>
  </div>
  <?php
}
	?>
  