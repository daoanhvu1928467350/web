<?php
require("config/model.php");
	$model=new model();

?>
 
  <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
    
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
   <?php
	  $sql="select *from pr limit 4";
	  $data=$model->select($sql);
	  if($data->num_rows>0){
		  $row1=$data->fetch_assoc();
		  ?>
		  <div class="carousel-item active">
     <a href="./?pr-detail=1&&id_pr=<?=$row1['id_pr']?>">
     	   <img src="<?=$row1['imagepr']?>"  width="1100" height="500">
     </a>
   
    </div>
		  <?php
		  while($row=$data->fetch_assoc()){
	  ?>
	  
    <div class="carousel-item ">
     <a href="./?pr-detail=1&&id_pr=<?=$row['id_pr']?>">
     	<img src="<?=$row['imagepr']?>"  width="1100" height="500">
     </a>
      
    </div>
    <?php
		  }
	  }
		  ?>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
