<?php
require("config/model.php");
$model=new model();
$sql="select * from listfilm";
	$data=$model->select($sql);
?>
   <ul id="myList">
   <h5 class="h2-color">Tìm kiếm</h5>
   <?php
	   while($row=$data->fetch_assoc()){
	   ?>
	   <a href="./?thongtinchitietphim=1&&id=<?=$row['id']?>" class="anchor-background-black nav-link">
    <li class="list-filter list-type row" id="<?=$row['id']?>">
    
    <div id="img-search" >
    	<img src="<?=$row['anhdaidien']?>" height=50 width=60>
    	</div>
    	<div id="detail">
    	<p>
    		<?=$row['namefilm']?>
    	</p>
    	</div>
    	
    </li>
    </a>
    <?php
	   }
		   ?>
  </ul>  