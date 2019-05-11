<h5 class="h2-color">Thêm loại vé</h5>
<form method="post" action="./">
	<input type="text"  class="form-control" placeholder="Thêm tên loại vé" name="loaive" required>
	<input type="hidden" name="themloaive" value="1">
	<button type="button" class="btn btn-generation2" id="img-loaive">Thêm ảnh loại vé</button>
	
	<button type="submit" class="btn btn-generation2" id="submit-loaive">Thêm loại vé</button>
	<?php
	if(isset($_GET['src2'])){
		?>
		<div id="div-loaive1" style="display: block">
		<img  src="<?=$_GET['src2']?>"   id="img-loaive1" height="200" width="250" >
		<input type="hidden" value="<?=$_GET['src2']?>"  name="img-loaive">
		</div>
		<?php
	}
	else{
		?>
		<div id="div-loaive1">
		<img  src="" name="img-loaive"  id="img-loaive1" height="200" width="250" >
		<input type="hidden" value=""  name="img-loaive" id="img-loaive-duphong">
		</div>
		<?php
	}
	?>
</form>
<div class="thuvien-anh" id="thuvien-anh-loaive">

<div  id="close-loaive" ><button type="button" class="close outline" data-dismiss="modal">&times;</button></div>
  <ul class="nav nav-tabs">
    <li class="nav-item" id="li-home-loaive">
      <a class="nav-link active" data-toggle="tab" href="#home-loaive">Thư viện ảnh</a>
    </li>
    <li class="nav-item" id="li-menu-loaive">
      <a class="nav-link" data-toggle="tab" href="#menu1-loaive">Upload file ảnh</a>
    </li>
    
  </ul>

  <!-- Tab panes -->
  <div class="tab-content" id="thuvien">
   <?php
	  $name="image-loaive/";
	$ten="loaive";
	  ?>

    <div id="home-loaive" class="container tab-pane active ">
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
    <div id="menu1-loaive" class="container tab-pane fade">
    <br>
    <div id="form-upload-loaive">
     <form method="post" enctype="multipart/form-data" action="process_file_upload.php">
     	
        
     	<input type="file" name="upload" value="" class="file">
     	<input type="submit" value="Upload ảnh phim" name="submit-loaive" class="btn btn-generation fileupload"> 
    
     	</form>
     	</div>
     
    </div>
    
  </div>
  <button class="btn btn-generation" id="xong-loaive">Xong</button>
  <div id="delete-img-loaive">
     
	<i class="far fa-trash-alt h2-color item-bottom cursor"></i>
			</div>
</div>
<script src="js/insert-loaive-js.js"></script>