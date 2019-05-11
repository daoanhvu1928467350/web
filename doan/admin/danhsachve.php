<?php
require("config/model.php");
$model=new model();
$sql="select * from loaive";
$data=$model->select($sql);
$row1=$data->fetch_assoc();
$arrid=array();
$idactive=$row1['id_loai'];

?>
<div class="col-sm-12 col-xs-12 bg-white margin padding">
<h2 class="h2-color text-align">Bảng giá vé</h2>
 <ul class="nav nav-pills" role="tablist">
    <li class="nav-item">
      <a class="nav-link li-item-danhsachve active" data-toggle="pill" href="<?="#home".$row1['id_loai']?>"><?=$row1['tenloai'] ?></a>
    </li>
    <?php
    $i=0;
		
	while($row=$data->fetch_assoc()){
		$arrid[$i]=$row['id_loai'];
	?>
	<li class="nav-item" ><a class="nav-link  li-item-danhsachve" data-toggle="pill" href="#menu<?=$row['id_loai']?>"><?=$row['tenloai']?></a></li>
	<?php
		$i++;
	}
		?>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content" id="danhsachve">
    <div id="home<?=$idactive?>" class="container tab-pane active"><br>
    <?php
	$j=0;
		  $arrgiave=array();
	 for($i=2;$i<=8;$i++){
		 
	?>
     <h5 class="h2-border padding" style="color: white"> <?=$i==8?"Chủ nhật":"Thứ   ". $i?></h5>
     <table class="table danhsachve">
     <thead>
     	 <th>Nhóm người</th>
     	 <th>Giá vé</th>
     	 <th>Sửa</th>
     	 <th>Xóa</th>
     	 
     </thead>
    
      <?php
	
	$sql1="select * from giave inner join element_of_people on element_of_people.id_loainguoi=giave.id_loainguoi and giave.ngay=$i and id_loai=$idactive";
	$data1=$model->select($sql1);
		 
	?>
	<tbody>
  
  <?php
		 
	  while($row1=$data1->fetch_assoc()){
	  ?>
	  <tr>
  	<td><?=$row1['loainguoi']?></td>
  	<td><?=number_format($row1['giave'],0)?></td>
  	<td>
  		<div class="edit-giave-2d" name="update<?=$row1['id_giave']?>">
  			<i class="fas fa-pencil-alt h2-color cursor"></i>
  		</div>
  	</td>
  	<td>
  		<div class="delete-giave-2d" id="<?=$row1['id_giave']?>">
  			<i class="far fa-trash-alt h2-color cursor"></i>
  		</div>
  	</td>
  	</tr>
  	<?php
		  $arrgiave[$j]=array("id"=>$row1['id_giave'],"loainguoi"=>$row1['loainguoi'],"giave"=>$row1['giave']);
		  $j++;
	  }
	 
		  ?>
  
  </tbody>
   </table>
   <?php
	 }
		 foreach($arrgiave as $key1){
			
		 ?>
		 <div class="update-giave1 " id="update<?=$key1['id']?>">
		 	<div class="header-detail-giave">
		 		<h5 class="h2-color">Cập nhật  thông tin vé</h5>
		 		<div class="close-update-ve" name="update<?=$key1['id']?>">
		 			<i class="fas fa-window-close icon-close h2-color"></i>
		 		</div>
		 	</div>
		 	<div class="body-detail ">
		 		<ul class="list-type">
		 			<li><?="<b>Loại vé :  </b>".$key1['loainguoi']?></li>
		 			<li><?="<b>Giá vé :  </b>"?><input type="text" value="<?=$key1['giave']?>" id="giave<?=$key1['id']?>"></li>
					<li><button class="btn btn-generation2 click-capnhatve" name="giave<?=$key1['id']?>">Lưu</button></li>
		 		</ul>
		 		
		 		
		 	</div>
		 	<div class="footer-detail ">
		 		
		 	</div>
		 </div>
		 <?php
		 }
			 ?>
    </div>
    <?php
	foreach($arrid as $key){
		
	?>
    <div id="menu<?=$key?>" class="container tab-pane fade"><br>
     <?php
	 for($i=2;$i<=8;$i++){
		 
	?>
     <h5 class="h2-border padding" style="color: white"> <?=$i==8?"Chủ nhật":"Thứ   ". $i?></h5>
     <table class="table danhsachve">
     <thead>
     	 <th>Nhóm người</th>
     	 <th>Giá vé</th>
     	 <th>Sửa</th>
     	 <th>Xóa</th>
     </thead>
    
      <?php
	
	$sql1="select * from giave inner join element_of_people on element_of_people.id_loainguoi=giave.id_loainguoi and giave.ngay=$i and id_loai=$key";
	$data1=$model->select($sql1);
		 
	?>
	<tbody>
  
  <?php
	  while($row1=$data1->fetch_assoc()){
	  ?>
	  <tr>
  	<td><?=$row1['loainguoi']?></td>
  	<td><?=number_format($row1['giave'],0)?></td>
  	<td>
  		<div class="edit-giave-2d" name="update<?=$row1['id_giave']?>">
  			<i class="fas fa-pencil-alt h2-color cursor"></i>
  		</div>
  	</td>
  	<td>
  		<div class="delete-giave-2d" id="<?=$row1['id_giave']?>">
  			<i class="far fa-trash-alt h2-color cursor"></i>
  		</div>
  	</td>
  	</tr>
  	<?php
	  }
	 
		  ?>
  
  </tbody>
   </table>
   <?php
	 }
		 ?>
    </div>
   <?php
	}
		?>
  </div>
<?php
	/*
	?>
<ul class="nav nav-pills" role="tablist">
<li class="nav-item " ><a class="nav-link li-item-danhsachve active" data-toggle="pill" href="#<?=$row1['id_loai']?>"><?=$row1['tenloai'] ?></a></li>
<?php
	
	$i=0;
	while($row=$data->fetch_assoc()){
		$arrid[$i]=$row['id_loai'];
	?>
	<li class="nav-item" ><a class="nav-link  li-item-danhsachve" data-toggle="pill" href="#<?=$row['id_loai']?>"><?=$row['tenloai']?></a></li>
	<?php
		$i++;
	}
		?>
		</ul>
		<div class="tab-content" id="danhsachve">
    <div id="<?=$idactive?>" class="container tab-pane active"><br>
      <h3>HOME</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <?php
	foreach($arrid as $key){
	?>
    <div id="<?=$key?>" class="container tab-pane fade"><br>
      <h3>Menu 1</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <?php
	}
		?>
   
  </div>
  */
  ?>
</div>
<script src="js/js-danhsachve.js"></script>