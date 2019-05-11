<?php
session_start();
$list=array("img"=>"image/68747470733a2f2f662e636c6f75642e6769746875622e636f6d2f6173736574732f323037383234352f3235393331332f35653833313336322d386362612d313165322d383435332d6536626439353663383961342e706e67.png","video"=>"");
//video/Ứng Dụng CGV Cinemas Phiên Bản Mới!.mp4
require("config/model.php");
$model=new model();
if(!isset($_GET['edit-film'])){
?>
<h2 class="h2-color text-align">Thêm phim mới</h2>
<div class="col-sm-12 col-xs-12 row">

<div id="div-name-film" class="col-sm-12 col-xs-12 bg-white padding margin">
    <h5>1.Thêm tên phim:<span class="red"> *</span></h5>
    
	<input type="text" class="form-control  name" id="namefilm" value="" placeholder="Tên phim	" required>
	<div id="error-ten" class="red"></div>
	</div>
	<div  class="col-sm-12 col-xs-12 bg-white padding margin">
		<h5>2.Chọn ngôn ngữ</h5>
    <?php
	include("language.php");
	?>
	</div>
	<div  class="col-sm-12 col-xs-12 bg-white padding margin">
		<h5>3.Thể loại phim <span class="red"> *</span></h5>
		<div id="element-theloai">
			<i class="fas fa-caret-down" style="font-size:30px;color: #FFA300"  id="icon-search2"></i>
			
		</div>
		<div id="error-theloai" class="red"></div>
	  <?php
	include("theloaiphim.php");
	?>
	</div>
	<div  class="col-sm-12 col-xs-12 bg-white padding margin">
		<h5>4.Đạo diễn </h5>
		
		<?php
		$sql1="select * from daodien";
		$data=$model->select($sql1);
		
		?>
		<select class="form-control" id="daodien-select" >
		<?php
			while($row=$data->fetch_assoc()){
			?>
			<option value="<?=$row['id_daodien']?>"><?=$row['tendaodien']?></option>
			<?php
			}
				?>
		</select>
	</div>
	<div  class="col-sm-12 col-xs-12 bg-white padding margin">
		<h5>5.Diễn viên <span class="red"> *</span></h5>
		<div id="element-dienvien">
			<i class="fas fa-caret-down item-icon" style="font-size:30px;color: #FFA300"  id="icon-search1"></i>
		</div>
		<div id="error-dienvien" class="red"></div>
		<div id="search-dienvien">
		<div id="timkiem">
			<input type="text" id="search-dienvien1" required autofocus>
			<div id="icon-dienvien">
				<i class="fas fa-search" ></i>
			</div>
			
		</div>
		<?php
			$sql2="select * from dienvien";
			$data2=$model->select($sql2);
			
			?>
			<ul class="list-type" id="ul-insertphim">
			<?php
				while($row2=$data2->fetch_assoc()){
				?>
				<li class="li-item-insertphim" name="<?=$row2['id_dienvien']?>"><?=$row2['tendienvien']?></li>
				<?php
				}
					?>
			</ul>
		</div>
	</div>
	
	
	
	
	

	
	<div id="img-film" class="col-sm-12 col-xs-12 bg-white margin">
	<h5 >2.Thêm ảnh đại điện:<span class="red"> *</span></h5>
	<i>(*/tỉ lệ kích thước 200x250/*)</i>
     <div>
     	<button class="btn btn-generation" id="btn-phim1">Thêm ảnh phim</button>
     </div>
     <?php
		/*
			if(isset($_SESSION['list'])){
				$list=$_SESSION['list'];
				if(isset($_GET['src'])){
				$list['img']=$_GET['src'];
					$_SESSION['list']=$list;
				}
				?>
				<img src="<?=$_SESSION['list']['img']?>" id="img-anhdaidien-film">
				<?php
			}
			else{
				
				if(isset($_GET['src'])){
					$list['img']=$_GET['src'];
				}
				
				$_SESSION['list']=$list;
			?>
			<script>
		location.reload();
	</script>
			<img src="<?=$_SESSION['list']['img']?>" id="img-anhdaidien-film" height="200" width="250">
			<?php
			
			}
			*/
		if(isset($_GET['src'])){
					?>
					<div id="img-insert-upload-phim" style="display: block">
						<img src="/doan/admin/<?=$_GET['src']?>" id="img-anhdaidien-film" height="200" width="250">
		</div>
					<?php
				}
		else{
			?>
			<div id="img-insert-upload-phim">
			<img src="<?=$list['img']?>" id="img-anhdaidien-film" height="200" width="250">
			</div>
			<?php
		}
		?>
		
	</div>
	
	<div class="col-sm-12 col-xs-12 bg-white margin">
	<h5>3.Thêm thông tin phim:</h5>
	<table class="table table-borderless" id="table-insert">
	
	<tbody>
	<tr><td>Thời lượng:</td><td><select id="phut" >
	<?php
		 for($i=0;$i<300;$i++){
		?>
		
		<option value="<?=$i?>"><?php echo $i<10?'0'.$i:$i?></option>
		<?php
		 }
			 ?>
	</select>
	Phút
	</td>
	</tr>
	<tr><td>Ngày khởi chiếu:</td>
	<td><input type="date" id="ngaykhoichieu" class="form-control"></td>
	</tr>
	<tr><td>Ngày kết thúc:</td><td><input type="date" id="ngayketthuc" class="form-control"></td></tr>
		</tbody>
	</table>
	</div>
	
 <div class="col-sm-12 col-xs-12 bg-white margin">
  <div class="col-sm-12 col-xs-12 " id="div-mota">
   <h5>4.Thêm nội dung phim:<span class="red"> *</span></h5>
		<div id="button-mota">
			<?php
			require("button-mota.php");
			?>
		</div>
			<iframe id="richtext1" name="richtext1" frameborder="1" src="iframe2.html"  >
		
	</iframe>
		</div>
		</div>
		<div class="col-xs-12 col-sm-12 margin padding bg-white">
		<h5>5.Chọn loại phim </h5>
		<?php
	$sql="select * from loaive";
	$data=$model->select($sql);
	if($data->num_rows>0){
	?>
		<div>
			<select class="form-control" id="loaive">
			<?php
		while($row=$data->fetch_assoc()){
		?>
				<option value="<?=$row['id_loai']?>"><?=$row['tenloai']?></option>
				<?php
		}
			?>
			</select>
		</div>
		<?php
			
	}
		?>
		</div>
		<div class="col-xs-12 col-sm-12 bg-white margin padding">
		<h5>6.Thêm trailer:<span class="red"> *</span></h5>
		<button class="btn btn-generation" id="insert-video">Thêm video</button>
		 <div id="error-video" class="red"></div>
		<?php
	/*
	      if(isset($_SESSION['list'])){
			  
			  $list=$_SESSION['list'];
			  if(isset($_GET['src1'])){
				  $list['video']=$_GET['src1'];
				  $_SESSION['list']=$list;
				  
			  }
			  ?>
			  	<iframe width="100%" height="315" class="video" src="<?=$_SESSION['list']['video']?>" id="insert-video"  controls>
     </iframe> 
			  <?php
			  
		  }
	else{
		$_SESSION['list']=$list;
		if(isset($_GET['src1'])){
			$_SESSION['list']['video']=$_GET['src1'];
		}
	
	?>
	
	<script>
		location.reload();
	</script>
		<iframe width="100%" height="315" class="video" src=<?=$_SESSION['list']['video']?>  controls>
     </iframe> 
		<?php
	}
			*/
			if(isset($_GET['src1'])){
				?>
				<iframe width="100%" height="315" class="video" src="<?=$_GET['src1']?>" id="insert-video-uploaded" frameborder="0" style="display: block">
     </iframe> 
    
				<?php
			}else{
				?>
				<iframe width="100%" height="315" class="video" id="insert-video-uploaded" src="<?=$list['video']?>"  frameborder="0" >
     </iframe> 
				<?php
			}
		?>
			<div>
			<button class="btn btn-generation" id="btn-insert-film">Xong</button>
			</div>
			</div>
			<div class="thuvien-anh" id="thuvien-anh-phim">

<div  id="close-phim" ><button type="button" class="close outline" data-dismiss="modal">&times;</button></div>
<!--<ul class="nav nav-tabs">
    <li class="li-item-thuvien active" name="#home" ><a data-toggle="tab" href="#home">Thư viện ảnh</a></li>
    <li class="li-item-thuvien" name="#menu1"><a data-toggle="tab" href="#menu1">Upload ảnh</a></li>
    
  </ul>
   <div class="tab-content">
    <div id="home" class="div-thuvien tab-pane fade in active ">
     <h2>thu vien anh</h2>
      
    </div>
    <div id="menu1" class="div-thuvien tab-pane fade">
      <h2>Thêm ảnh quảng cáo</h2>
    </div>
    
  </div>-->
  <ul class="nav nav-tabs">
    <li class="nav-item" id="li-home-phim">
      <a class="nav-link active" data-toggle="tab" href="#home-phim">Thư viện ảnh</a>
    </li>
    <li class="nav-item" id="li-menu-phim">
      <a class="nav-link" data-toggle="tab" href="#menu1-phim">Upload file ảnh</a>
    </li>
    
  </ul>

  <!-- Tab panes -->
  <div class="tab-content" id="thuvien">
   <?php
	  $name="image-film/";
	$ten="phim";
	  ?>

    <div id="home-phim" class="container tab-pane active ">
     <br>
     <?php
		include("loadfile.php");
		/*
		$target="./image/image-film";
		if(is_dir($target)){
		$tenfile=scandir($target);
		foreach($tenfile as $files){
			$target="./image/image-film/".$files;
			if(file_exists($target)){
				if($files =="." || $files =="..")
				{
					continue;
				}
			?>
			<div class="img-phim-thuvien1" id="<?=$files?>">
			<div>
			<img src=<?="./image/image-film/".$files?> height=100 width=100 >
			</div>
			<div >
				<p style="width: 100px;text-overflow: ellipsis;overflow: hidden"><?=$files?></p>
			</div>
			</div>
			<?php
			}
			}
		}
		*/
		
		?>
    </div>
    <div id="menu1-phim" class="container tab-pane fade">
    <br>
    <div id="form-upload-pr">
     <form method="post" enctype="multipart/form-data" action="process_file_upload.php">
     	
        
     	<input type="file" name="upload" value="">
     	<input type="submit" value="Upload ảnh phim" name="submit" class="btn btn-generation"> 
    
     	</form>
     	</div>
     
    </div>
    
  </div>
  <button class="btn btn-generation" id="xong-phim">Xong</button>
  <div id="delete-img-phim">
     
	<i class="far fa-trash-alt h2-color item-bottom cursor"></i>
			</div>
</div>
</div>
	<div class="thuvien-anh" id="thuvien-video-phim">

<div  id="close-phim-video" ><button type="button" class="close outline" data-dismiss="modal">&times;</button></div>
<!--<ul class="nav nav-tabs">
    <li class="li-item-thuvien active" name="#home" ><a data-toggle="tab" href="#home">Thư viện ảnh</a></li>
    <li class="li-item-thuvien" name="#menu1"><a data-toggle="tab" href="#menu1">Upload ảnh</a></li>
    
  </ul>
   <div class="tab-content">
    <div id="home" class="div-thuvien tab-pane fade in active ">
     <h2>thu vien anh</h2>
      
    </div>
    <div id="menu1" class="div-thuvien tab-pane fade">
      <h2>Thêm ảnh quảng cáo</h2>
    </div>
    
  </div>-->
  <ul class="nav nav-tabs">
    <li class="nav-item" id="li-home-phim-video">
      <a class="nav-link active" data-toggle="tab" href="#home-phim-video">Thư viện ảnh</a>
    </li>
    <li class="nav-item" id="li-menu-phim-video">
      <a class="nav-link" data-toggle="tab" href="#menu1-phim-video">Upload file ảnh</a>
    </li>
    
  </ul>

  <!-- Tab panes -->
  <div class="tab-content" id="thuvien">
    <div id="home-phim-video" class="container tab-pane active ">
        <?php
		require("loadvideo.php");
		?>
    </div>
    <div id="menu1-phim-video" class="container tab-pane fade">
    <br>
    <div id="form-upload-pr">
     <form action="./process_file_video.php" method="post" enctype="multipart/form-data">
		<input type="file" name="upload-video" value="">
     	<input type="submit" value="Upload Video" name="video-insert-film" class="btn btn-generation2"> 
		</form>
     	</div>
     
    </div>
    
  </div>
  <button class="btn btn-generation" id="xong-phim-video">Xong</button>
  <div id="delete-video-insert-phim1">
  	<i class="far fa-trash-alt h2-color item-bottom cursor"></i>
  </div>
</div>
		
	
</div>
<script src="js/insert-film-js.js"></script>
	<script src="js/iframe-js.js"></script>
	<?php
	
	
	//edit
}else{
	$id=$_GET['id'];
	$sql3="select * from listfilm where id=$id";
	$data=$model->select($sql3);
	$row1=$data->fetch_assoc();
	?>
	<input type="hidden" value="<?=$id?>" id="id-update-film">
	<h2 class="h2-color text-align">Cập nhật phim</h2>
<div class="col-sm-12 col-xs-12 row">

<div id="div-name-film" class="col-sm-12 col-xs-12 bg-white padding margin">
    <h5>1.Tên phim:<span class="red"> *</span></h5>
    
	<input type="text" class="form-control  name" id="namefilm" value="<?=$row1['namefilm']?>" placeholder="Tên phim	" required>
	<div id="error-ten" class="red"></div>
	</div>
	<div  class="col-sm-12 col-xs-12 bg-white padding margin">
		<h5>2.Thay đổi ngôn ngữ</h5>
    <?php
	include("language.php");
	?>
	</div>
	<div  class="col-sm-12 col-xs-12 bg-white padding margin">
		<h5>3.Thể loại phim <span class="red"> *</span></h5>
		<div id="element-theloai">
		<?php
	$sql5="select * from theloai_listfilm inner join theloaiphim on theloaiphim.id_theloai=theloai_listfilm.id_theloai and theloai_listfilm.id=$id";
	$data3=$model->select($sql5);
	while($row4=$data3->fetch_assoc()){
	?>
		<div class='item-tag1' id='<?=$row4['id_theloai']?>'><?=$row4['tentheloai']?>      <i class='fas fa-window-close close-theloai' ></i></div>
		<?php
	}
		?>
			<i class="fas fa-caret-down" style="font-size:30px;color: #FFA300"  id="icon-search2"></i>
			
		</div>
		<div id="error-theloai" class="red"></div>
	  <?php
	include("theloaiphim.php");
	?>
	</div>
	<div  class="col-sm-12 col-xs-12 bg-white padding margin">
		<h5>4.Đạo diễn </h5>
		
		<?php
		$sql1="select * from daodien";
		$data=$model->select($sql1);
		
		?>
		<select class="form-control" id="daodien-select" >
		<?php
			while($row=$data->fetch_assoc()){
				if($row['id_daodien']==$row1['daodien']){
					?>
					
					<option value="<?=$row['id_daodien']?>" selected><?=$row['tendaodien']?></option>
					<?php
				}else{
			?>
			<option value="<?=$row['id_daodien']?>"><?=$row['tendaodien']?></option>
			<?php
				}
			}
				?>
		</select>
	</div>
	<div  class="col-sm-12 col-xs-12 bg-white padding margin">
		<h5>5.Diễn viên <span class="red"> *</span></h5>
		<div id="element-dienvien">
		<?php
	$sql4="select * from dienvien_listfilm  inner join dienvien on dienvien.id_dienvien=dienvien_listfilm.id_dienvien and dienvien_listfilm.id=$id";
	$data1=$model->select($sql4);
	while($row3=$data1->fetch_assoc()){
	?>
		<div class='item-tag' id='<?=$row3['id_dienvien']?>'><?=$row3['tendienvien']?>      <i class='fas fa-window-close close-insert-phim' ></i></div>
		<?php
	}
		?>
			<i class="fas fa-caret-down item-icon" style="font-size:30px;color: #FFA300"  id="icon-search1"></i>
		</div>
		
		<div id="error-dienvien" class="red"></div>
		<div id="search-dienvien">
		<div id="timkiem">
			<input type="text" id="search-dienvien1" required autofocus>
			<div id="icon-dienvien">
				<i class="fas fa-search" ></i>
			</div>
			
		</div>
		<?php
			$sql2="select * from dienvien";
			$data2=$model->select($sql2);
			
			?>
			<ul class="list-type" id="ul-insertphim">
			<?php
				while($row2=$data2->fetch_assoc()){
				?>
				<li class="li-item-insertphim" name="<?=$row2['id_dienvien']?>"><?=$row2['tendienvien']?></li>
				<?php
				}
					?>
			</ul>
		</div>
	</div>
	
	
	
	
	

	
	<div id="img-film" class="col-sm-12 col-xs-12 bg-white margin">
	<h5 >2.Thêm ảnh đại điện:<span class="red"> *</span></h5>
	<i>(*/tỉ lệ kích thước 200x250/*)</i>
     <div>
     	<button class="btn btn-generation" id="btn-phim1">Thêm ảnh phim</button>
     </div>
     <?php
		/*
			if(isset($_SESSION['list'])){
				$list=$_SESSION['list'];
				if(isset($_GET['src'])){
				$list['img']=$_GET['src'];
					$_SESSION['list']=$list;
				}
				?>
				<img src="<?=$_SESSION['list']['img']?>" id="img-anhdaidien-film">
				<?php
			}
			else{
				
				if(isset($_GET['src'])){
					$list['img']=$_GET['src'];
				}
				
				$_SESSION['list']=$list;
			?>
			<script>
		location.reload();
	</script>
			<img src="<?=$_SESSION['list']['img']?>" id="img-anhdaidien-film" height="200" width="250">
			<?php
			
			}
			*/
		if(isset($_GET['src'])){
					?>
					<div id="img-insert-upload-phim" style="display: block">
						<img src="/doan/admin/<?=$_GET['src']?>" id="img-anhdaidien-film" height="200" width="250">
		</div>
					<?php
				}
		else{
			?>
			<div id="img-insert-upload-phim" style="display: block">
			<img src="<?=$row1['anhdaidien']?>" id="img-anhdaidien-film" height="200" width="250">
			</div>
			<?php
		}
		?>
		
	</div>
	
	<div class="col-sm-12 col-xs-12 bg-white margin">
	<h5>3.Thay đổi thông tin phim:</h5>
	<table class="table table-borderless" id="table-insert">
	
	<tbody>
	<tr><td>Thời lượng:</td><td><select id="phut" >
	<?php
		 for($i=0;$i<300;$i++){
			 if($i==$row1['thoiluong']){
				 ?>
				
				 <option value="<?=$i?>" selected ><?php echo $i<10?'0'.$i:$i?></option>
				
				 <?php
			 }else{
		?>
		
		<option value="<?=$i?>"><?php echo $i<10?'0'.$i:$i?></option>
		<?php
			 }
		 }
			 ?>
	</select>
	Phút
	</td>
	</tr>
	<tr><td>Ngày khởi chiếu:</td>
	<td><input type="date" id="ngaykhoichieu1" class="form-control" value="<?=$row1['ngaykhoichieu']?>"></td>
	</tr>
	<tr><td>Ngày kết thúc:</td><td><input type="date" id="ngayketthuc1" class="form-control" value="<?=$row1['ngayketthuc']?>"></td></tr>
		</tbody>
	</table>
	</div>
	
	
 <div class="col-sm-12 col-xs-12 bg-white margin" id="update-contentfilm">
 <div class="col-sm-12 col-xs-12 "  style="background-color:#FCF6DC ">
	 <div><b>Nội dung phim:</b></div>
	 <div  class="col-sm-12 col-xs-12"  id="content-phim">
	<?=str_replace("'","",str_replace("'","",$row1['contentfilm']))?>
	 </div>
	</div>
  <div class="col-sm-12 col-xs-12 " id="div-mota">
   <h5>4.Chỉnh sửa nội dung phim:<span class="red"> *</span></h5>
		<div id="button-mota">
			<?php
			require("button-mota.php");
			?>
		</div>
			<iframe id="richtext1" name="richtext1" frameborder="1" src="iframe2.html"  >
		
	</iframe>
	
		</div>
		</div>
		<div class="col-xs-12 col-sm-12 margin padding bg-white">
		<h5>5.Chọn loại phim </h5>
		<?php
	$sql="select * from loaive";
	$data=$model->select($sql);
	if($data->num_rows>0){
	?>
		<div>
			<select class="form-control" id="loaive">
			<?php
		while($row=$data->fetch_assoc()){
			if($row['id_loai']==$row1['id_loai']){
				?>
				<option value="<?=$row['id_loai']?>" selected><?=$row['tenloai']?></option>
				<?php
			}else{
		?>
				<option value="<?=$row['id_loai']?>"><?=$row['tenloai']?></option>
				<?php
			}
		}
			?>
			</select>
		</div>
		<?php
			
	}
		?>
		</div>
		<div class="col-xs-12 col-sm-12 bg-white margin padding">
		<h5>6.Thêm trailer:<span class="red"> *</span></h5>
		<button class="btn btn-generation" id="insert-video">Thêm video</button>
		 <div id="error-video" class="red" ></div>
		<?php
	/*
	      if(isset($_SESSION['list'])){
			  
			  $list=$_SESSION['list'];
			  if(isset($_GET['src1'])){
				  $list['video']=$_GET['src1'];
				  $_SESSION['list']=$list;
				  
			  }
			  ?>
			  	<iframe width="100%" height="315" class="video" src="<?=$_SESSION['list']['video']?>" id="insert-video"  controls>
     </iframe> 
			  <?php
			  
		  }
	else{
		$_SESSION['list']=$list;
		if(isset($_GET['src1'])){
			$_SESSION['list']['video']=$_GET['src1'];
		}
	
	?>
	
	<script>
		location.reload();
	</script>
		<iframe width="100%" height="315" class="video" src=<?=$_SESSION['list']['video']?>  controls>
     </iframe> 
		<?php
	}
			*/
			if(isset($_GET['src1'])){
				?>
				<iframe width="100%" height="315" class="video" src="<?=$_GET['src1']?>" id="insert-video-uploaded" frameborder="0" style="display: block">
     </iframe> 
    
				<?php
			}else{
				?>
				<iframe width="100%" height="315" class="video" id="insert-video-uploaded" src="./video/upload/<?=$row1['trailer']?>"  frameborder="0" style="display: block">
     </iframe> 
				<?php
			}
		?>
			<div>
			<button class="btn btn-generation" id="btn-update-film">Xong</button>
			</div>
			</div>
			<div class="thuvien-anh" id="thuvien-anh-phim">

<div  id="close-phim" ><button type="button" class="close outline" data-dismiss="modal">&times;</button></div>
<!--<ul class="nav nav-tabs">
    <li class="li-item-thuvien active" name="#home" ><a data-toggle="tab" href="#home">Thư viện ảnh</a></li>
    <li class="li-item-thuvien" name="#menu1"><a data-toggle="tab" href="#menu1">Upload ảnh</a></li>
    
  </ul>
   <div class="tab-content">
    <div id="home" class="div-thuvien tab-pane fade in active ">
     <h2>thu vien anh</h2>
      
    </div>
    <div id="menu1" class="div-thuvien tab-pane fade">
      <h2>Thêm ảnh quảng cáo</h2>
    </div>
    
  </div>-->
  <ul class="nav nav-tabs">
    <li class="nav-item" id="li-home-phim">
      <a class="nav-link active" data-toggle="tab" href="#home-phim">Thư viện ảnh</a>
    </li>
    <!--<li class="nav-item" id="li-menu-phim">
      <a class="nav-link" data-toggle="tab" href="#menu1-phim">Upload file ảnh</a>
    </li>-->
    
  </ul>

  <!-- Tab panes -->
  <div class="tab-content" id="thuvien">
   <?php
	  $name="image-film/";
	$ten="phim";
	  ?>

    <div id="home-phim" class="container tab-pane active ">
     <br>
     <?php
		include("loadfile.php");
		/*
		$target="./image/image-film";
		if(is_dir($target)){
		$tenfile=scandir($target);
		foreach($tenfile as $files){
			$target="./image/image-film/".$files;
			if(file_exists($target)){
				if($files =="." || $files =="..")
				{
					continue;
				}
			?>
			<div class="img-phim-thuvien1" id="<?=$files?>">
			<div>
			<img src=<?="./image/image-film/".$files?> height=100 width=100 >
			</div>
			<div >
				<p style="width: 100px;text-overflow: ellipsis;overflow: hidden"><?=$files?></p>
			</div>
			</div>
			<?php
			}
			}
		}
		*/
		
		?>
    </div>
    <div id="menu1-phim" class="container tab-pane fade">
    <br>
    <div id="form-upload-pr">
     <form method="post" enctype="multipart/form-data" action="process_file_upload.php">
     	
        
     	<input type="file" name="upload" value="">
     	<input type="submit" value="Upload ảnh phim" name="submit" class="btn btn-generation"> 
    
     	</form>
     	</div>
     
    </div>
    
  </div>
  <button class="btn btn-generation" id="xong-phim">Xong</button>
  <div id="delete-img-phim">
     
	<i class="far fa-trash-alt h2-color item-bottom cursor"></i>
			</div>
</div>
</div>
	<div class="thuvien-anh" id="thuvien-video-phim">

<div  id="close-phim-video" ><button type="button" class="close outline" data-dismiss="modal">&times;</button></div>
<!--<ul class="nav nav-tabs">
    <li class="li-item-thuvien active" name="#home" ><a data-toggle="tab" href="#home">Thư viện ảnh</a></li>
    <li class="li-item-thuvien" name="#menu1"><a data-toggle="tab" href="#menu1">Upload ảnh</a></li>
    
  </ul>
   <div class="tab-content">
    <div id="home" class="div-thuvien tab-pane fade in active ">
     <h2>thu vien anh</h2>
      
    </div>
    <div id="menu1" class="div-thuvien tab-pane fade">
      <h2>Thêm ảnh quảng cáo</h2>
    </div>
    
  </div>-->
  <ul class="nav nav-tabs">
    <li class="nav-item" id="li-home-phim-video">
      <a class="nav-link active" data-toggle="tab" href="#home-phim-video">Thư viện ảnh</a>
    </li>
    <!--<li class="nav-item" id="li-menu-phim-video">
      <a class="nav-link" data-toggle="tab" href="#menu1-phim-video">Upload file ảnh</a>
    </li>-->
    
  </ul>

  <!-- Tab panes -->
  <div class="tab-content" id="thuvien">
    <div id="home-phim-video" class="container tab-pane active ">
        <?php
		require("loadvideo.php");
		?>
    </div>
    <div id="menu1-phim-video" class="container tab-pane fade">
    <br>
    <div id="form-upload-pr">
     <form action="./process_file_video.php" method="post" enctype="multipart/form-data">
		<input type="file" name="upload-video" value="">
     	<input type="submit" value="Upload Video" name="video-insert-film" class="btn btn-generation2"> 
		</form>
     	</div>
     
    </div>
    
  </div>
  <button class="btn btn-generation" id="xong-phim-video">Xong</button>
  <div id="delete-video-insert-phim1">
  	<i class="far fa-trash-alt h2-color item-bottom cursor"></i>
  </div>
</div>
		
	
</div>
<script src="js/insert-film-js.js"></script>
	<script src="js/iframe-js.js"></script>
	<?php
}
	?>