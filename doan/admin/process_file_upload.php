
<?php
require("config/model.php");
$model=new model();
if(isset($_POST['event'])){
	$a='image-event';
    $b="image/".$a;
if(!file_exists($b)){
	mkdir('./image/'.$a,0777,true);
}
$target_dir = "image/".$a."/";
$target_file = $target_dir . basename($_FILES["file-image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["file-image"]["tmp_name"]);
    if($check !== false) {
		
        $uploadOk = 1;
    } else {
		?>
      <script>
		  alert();
</script>
       <?php
		header("Location:./?insertevent=1");
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
if (file_exists($target_file)) {
	?>
  
       <?php
	echo "Sorry, file already exists.";
	//header("Location:./?insertevent=1");
 
    $uploadOk = 0;
}
// Check file size
if ($_FILES["file-image"]["size"] > 5000000) {
	?>
     
       <?php
	echo 'Sorry, your file is too large.';
    	//header("Location:./?insertevent=1");

    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
	?>
  
   <?php
   
    $uploadOk = 0;
	echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	//header("Location:./?insertevent=1");
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
	?>
 
   <?php
	echo 'that bai';
   //header("Location:./?insertevent=1");
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["file-image"]["tmp_name"], $target_file)) {
		list($width,$height)=getimagesize($target_file);
		if($imageFileType=='jpg'){
		$newfile=imagecreatefromjpeg($target_file);
		$newwidth=512;
		$newheight=512;
		$thumb=$target_dir.basename($_FILES["file-image"]["name"]);
		$truecolor=imagecreatetruecolor($newwidth,$newheight);
		imagecopyresampled($truecolor,$newfile,0,0,0,0,$newwidth,$newheight,$width,$height);
		imagejpeg($truecolor,$thumb,100);
		}
		else if($imageFileType=='png'){
			$newfile=imagecreatefrompng($target_file);
		$newwidth=512;
		$newheight=512;
		$thumb=$target_dir.basename($_FILES["file-image"]["name"]);
		$truecolor=imagecreatetruecolor($newwidth,$newheight);
				$background_color = imagecolorallocate($truecolor,  255, 255, 255); 
     
// Fill background with above selected color 
imagefill($truecolor, 0, 0, $background_color);
		imagecopyresampled($truecolor,$newfile,0,0,0,0,$newwidth,$newheight,$width,$height);
		imagepng($truecolor,$thumb);
		}
		else if($imageFileType=='jpeg'){
			$newfile=imagecreatefromjpeg($target_file);
		$newwidth=512;
		$newheight=512;
		$thumb=$target_dir.basename($_FILES["file-image"]["name"]);
		$truecolor=imagecreatetruecolor($newwidth,$newheight);
		imagecopyresampled($truecolor,$newfile,0,0,0,0,$newwidth,$newheight,$width,$height);
		imagejpeg($truecolor,$thumb,100);
		}
		else{
		$newfile=imagecreatefromgif($target_file);
		$newwidth=512;
		$newheight=512;
		$thumb=$target_dir.basename($_FILES["file-image"]["name"]);
				$background_color = imagecolorallocate($truecolor,  255, 255, 255); 
     
// Fill background with above selected color 
imagefill($truecolor, 0, 0, $background_color);
		$truecolor=imagecreatetruecolor($newwidth,$newheight);
		imagecopyresampled($truecolor,$newfile,0,0,0,0,$newwidth,$newheight,$width,$height);
		imagegif($truecolor,$thumb);
		}
		header("Location:./?insertevent=1&&src="."'".$target_dir . basename($_FILES["file-image"]["name"])."'");
    } else {
		?>
      
       <?php
		echo 'Sorry, there was an error uploading your file.';
      // header("Location:./?insertevent=1");
		 
    }
}
	}
else if(isset($_POST['uploadquangcao'])){
	$a='image-quangcao';
    $b="image/".$a;
if(!file_exists($b)){
	mkdir('./image/'.$a,0777,true);
}
$target_dir = "image/".$a."/";
$target_file = $target_dir . basename($_FILES["filequangcao"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["filequangcao"]["tmp_name"]);
    if($check !== false) {
		
        $uploadOk = 1;
    } else {
		?>
      <script>
		  alert();
</script>
       <?php
		header("Location:./?insert-quangcao=1");
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
if (file_exists($target_file)) {
	?>
  
       <?php
	echo "Sorry, file already exists.";
	//header("Location:./?insertevent=1");
 
    $uploadOk = 0;
}
// Check file size
if ($_FILES["filequangcao"]["size"] > 5000000) {
	?>
     
       <?php
	echo 'Sorry, your file is too large.';
    	//header("Location:./?insertevent=1");

    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
	?>
  
   <?php
   
    $uploadOk = 0;
	echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	//header("Location:./?insertevent=1");
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
	?>
 
   <?php
	echo 'that bai';
   //header("Location:./?insertevent=1");
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["filequangcao"]["tmp_name"], $target_file)) {
		list($width,$height)=getimagesize($target_file);
		if($imageFileType=='jpg'){
		$newfile=imagecreatefromjpeg($target_file);
		$newwidth=980;
		$newheight=488;
		$thumb=$target_dir.basename($_FILES["filequangcao"]["name"]);
		$truecolor=imagecreatetruecolor($newwidth,$newheight);
			
		imagecopyresampled($truecolor,$newfile,0,0,0,0,$newwidth,$newheight,$width,$height);
		imagejpeg($truecolor,$thumb,100);
		}
		else if($imageFileType=='png'){
			$newfile=imagecreatefrompng($target_file);
		$newwidth=980;
		$newheight=488;
		$thumb=$target_dir.basename($_FILES["filequangcao"]["name"]);
		$truecolor=imagecreatetruecolor($newwidth,$newheight);
				$background_color = imagecolorallocate($truecolor,  255, 255, 255); 
     
// Fill background with above selected color 
imagefill($truecolor, 0, 0, $background_color);
		imagecopyresampled($truecolor,$newfile,0,0,0,0,$newwidth,$newheight,$width,$height);
		imagepng($truecolor,$thumb);
		}
		else if($imageFileType=='jpeg'){
			$newfile=imagecreatefromjpeg($target_file);
		$newwidth=980;
		$newheight=488;
		$thumb=$target_dir.basename($_FILES["filequangcao"]["name"]);
		$truecolor=imagecreatetruecolor($newwidth,$newheight);
		imagecopyresampled($truecolor,$newfile,0,0,0,0,$newwidth,$newheight,$width,$height);
		imagejpeg($truecolor,$thumb,100);
		}
		else{
		$newfile=imagecreatefromgif($target_file);
		$newwidth=980;
		$newheight=488;
		$thumb=$target_dir.basename($_FILES["filequangcao"]["name"]);
		$truecolor=imagecreatetruecolor($newwidth,$newheight);
				$background_color = imagecolorallocate($truecolor,  255, 255, 255); 
     
// Fill background with above selected color 
imagefill($truecolor, 0, 0, $background_color);
		imagecopyresampled($truecolor,$newfile,0,0,0,0,$newwidth,$newheight,$width,$height);
		imagegif($truecolor,$thumb);
		}
		header("Location:./?insert-quangcao=1&&src="."'".$target_dir . basename($_FILES["filequangcao"]["name"])."'");
    } else {
		?>
      
       <?php
		echo 'Sorry, there was an error uploading your file.';
      // header("Location:./?insertevent=1");
		 
    }
}
}
else if(isset($_POST['uploadrapchieuphim'])){
	$a='image-rapchieuphim';
    $b="image/".$a;
if(!file_exists($b)){
	mkdir('./image/'.$a,0777,true);
}
$target_dir = "image/".$a."/";
$target_file = $target_dir . basename($_FILES["file-img-rapchieuphim"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["file-img-rapchieuphim"]["tmp_name"]);
    if($check !== false) {
		
        $uploadOk = 1;
    } else {
		?>
      <script>
		  alert();
</script>
       <?php
		header("Location:./?insertevent=1");
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
if (file_exists($target_file)) {
	?>
  
       <?php
	echo "Sorry, file already exists.";
	//header("Location:./?insertevent=1");
 
    $uploadOk = 0;
}
// Check file size
if ($_FILES["file-img-rapchieuphim"]["size"] > 5000000) {
	?>
     
       <?php
	echo 'Sorry, your file is too large.';
    	//header("Location:./?insertevent=1");

    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
	?>
  
   <?php
   
    $uploadOk = 0;
	echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	//header("Location:./?insertevent=1");
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
	?>
 
   <?php
	echo 'that bai';
   //header("Location:./?insertevent=1");
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["file-img-rapchieuphim"]["tmp_name"], $target_file)) {
		list($width,$height)=getimagesize($target_file);
		if($imageFileType=='jpg'){
		$newfile=imagecreatefromjpeg($target_file);
		$newwidth=980;
		$newheight=415;
		$thumb=$target_dir.basename($_FILES["file-img-rapchieuphim"]["name"]);
		$truecolor=imagecreatetruecolor($newwidth,$newheight);
		imagecopyresampled($truecolor,$newfile,0,0,0,0,$newwidth,$newheight,$width,$height);
		imagejpeg($truecolor,$thumb,100);
		}
		else if($imageFileType=='png'){
			$newfile=imagecreatefrompng($target_file);
		$newwidth=980;
		$newheight=415;
		$thumb=$target_dir.basename($_FILES["file-img-rapchieuphim"]["name"]);
		$truecolor=imagecreatetruecolor($newwidth,$newheight);
				$background_color = imagecolorallocate($truecolor,  255, 255, 255); 
     
// Fill background with above selected color 
imagefill($truecolor, 0, 0, $background_color);
		imagecopyresampled($truecolor,$newfile,0,0,0,0,$newwidth,$newheight,$width,$height);
		imagepng($truecolor,$thumb);
		}
		else if($imageFileType=='jpeg'){
			$newfile=imagecreatefromjpeg($target_file);
		$newwidth=980;
		$newheight=415;
		$thumb=$target_dir.basename($_FILES["file-img-rapchieuphim"]["name"]);
		$truecolor=imagecreatetruecolor($newwidth,$newheight);
		imagecopyresampled($truecolor,$newfile,0,0,0,0,$newwidth,$newheight,$width,$height);
		imagejpeg($truecolor,$thumb,100);
		}
		else{
		$newfile=imagecreatefromgif($target_file);
		$newwidth=980;
		$newheight=415;
		$thumb=$target_dir.basename($_FILES["file-img-rapchieuphim"]["name"]);
		$truecolor=imagecreatetruecolor($newwidth,$newheight);
				$background_color = imagecolorallocate($truecolor,  255, 255, 255); 
     
// Fill background with above selected color 
imagefill($truecolor, 0, 0, $background_color);
		imagecopyresampled($truecolor,$newfile,0,0,0,0,$newwidth,$newheight,$width,$height);
		imagegif($truecolor,$thumb);
		}
		header("Location:./?thongtinrap=1&&src="."'".$target_dir . basename($_FILES["file-img-rapchieuphim"]["name"])."'");
    } else {
		?>
      
       <?php
		echo 'Sorry, there was an error uploading your file.';
      // header("Location:./?insertevent=1");
		 
    }
}
}
///dienvien
else if(isset($_POST['submit-dienvien'])){
	$typedienvien=strtolower(pathinfo($_FILES["upload"]["name"],PATHINFO_EXTENSION));
	if($typedienvien != "txt"){
		header("Location:./?muclienquan=1&&error-upload=1");
	}
	else{
	$file=fopen($_FILES["upload"]["name"],"r+");
	
	while($str=fgets($file)){
		$sql="insert into dienvien values(0,?)";
	$model->insert_para_once_string($sql,$str);
	}
		fclose($file);
	header("Location:./?dv=1");
	}
}
else if(isset($_POST['submit-daodien'])){
	$typedienvien=strtolower(pathinfo($_FILES["upload"]["name"],PATHINFO_EXTENSION));
	if($typedienvien != "txt"){
		header("Location:./?muclienquan=1&&error-upload=1");
	}
	else{
	$file=fopen($_FILES["upload"]["name"],"r+");
	
	while($str=fgets($file)){
		$sql="insert into daodien values(0,?)";
	$model->insert_para_once_string($sql,$str);
	}
		fclose($file);
	header("Location:./?dddv=1");
	}
}

////
///loaive
else if(isset($_POST['submit-loaive'])){
	$a='image-loaive';
	 $b="image/".$a;
if(!file_exists($b)){
	mkdir('./image/'.$a,0777,true);
}
$target_dir = "image/".$a."/";
$target_file = $target_dir . basename($_FILES["upload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit-loaive"])) {
    $check = getimagesize($_FILES["upload"]["tmp_name"]);
    if($check !== false) {
	
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
		?>
      
       <?php
		echo 'File is not an image.';
        //header("Location:./?themmoiphim=1");
        $uploadOk = 0;
    }
}
if (file_exists($target_file)) {
	?>
     
       <?php
	echo 'Sorry, file already exists.';
	 //header("Location:./?themmoiphim=1");
   
    $uploadOk = 0;
}
// Check file size
if ($_FILES["upload"]["size"] > 5000000) {
	?>
     
       <?php
	echo 'Sorry, your file is too large.';
	 //header("Location:./?themmoiphim=1");
    
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
	?>
  
   <?php
   
    $uploadOk = 0;
	echo 'Sorry, only JPG, JPEG, PNG & GIF files are allowed.';
	 //header("Location:./?themmoiphim=1");
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
	?>
  
   <?php
	echo 'Sorry, your file was not uploaded.';
  // header("Location:./?themmoiphim=1");
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file)) {
		list($width,$height)=getimagesize($target_file);
		if($imageFileType=='jpg'){
		$newfile=imagecreatefromjpeg($target_file);
		$newwidth=600;
		$newheight=400;
		$thumb=$target_dir.basename($_FILES["upload"]["name"]);
		$truecolor=imagecreatetruecolor($newwidth,$newheight);
		imagecopyresampled($truecolor,$newfile,0,0,0,0,$newwidth,$newheight,$width,$height);
		imagejpeg($truecolor,$thumb,100);
		}
		else if($imageFileType=='png'){
			
			$newfile=imagecreatefrompng($target_file);
		$newwidth=600;
		$newheight=400;
		$thumb=$target_dir.basename($_FILES["upload"]["name"]);
		$truecolor=imagecreatetruecolor($newwidth,$newheight);
			$background_color = imagecolorallocate($truecolor,  255, 255, 255); 
     
// Fill background with above selected color 
imagefill($truecolor, 0, 0, $background_color); 
			
		imagecopyresampled($truecolor,$newfile,0,0,0,0,$newwidth,$newheight,$width,$height);
			
		imagepng($truecolor,$thumb);
		}
		else if($imageFileType=='jpeg'){
			$newfile=imagecreatefromjpeg($target_file);
		$newwidth=600;
		$newheight=400;
		$thumb=$target_dir.basename($_FILES["upload"]["name"]);
		$truecolor=imagecreatetruecolor($newwidth,$newheight);
		imagecopyresampled($truecolor,$newfile,0,0,0,0,$newwidth,$newheight,$width,$height);
		imagejpeg($truecolor,$thumb,100);
		}
		else{
		$newfile=imagecreatefromgif($target_file);
		$newwidth=600;
		$newheight=400;
		$thumb=$target_dir.basename($_FILES["upload"]["name"]);
			
		$truecolor=imagecreatetruecolor($newwidth,$newheight);
			 
				$background_color = imagecolorallocate($truecolor,  255, 255, 255); 
     
// Fill background with above selected color 
imagefill($truecolor, 0, 0, $background_color);
		
		imagecopyresampled($truecolor,$newfile,0,0,0,0,$newwidth,$newheight,$width,$height);
		imagegif($truecolor,$thumb);
		
		}
		
		header("Location:./?themthongtinve=1&&src2="."'".$target_dir . basename($_FILES["upload"]["name"])."'");
    } else {
		?>
     
       <?php
		echo 'Sorry, there was an error uploading your file.';
       //header("Location:./?themmoiphim=1");
		 
    }
}
}
else{
	$a='image-film';
	 $b="image/".$a;
if(!file_exists($b)){
	mkdir('./image/'.$a,0777,true);
}
$target_dir = "image/".$a."/";
$target_file = $target_dir . basename($_FILES["upload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["upload"]["tmp_name"]);
    if($check !== false) {
	
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
		?>
      
       <?php
		echo 'File is not an image.';
        //header("Location:./?themmoiphim=1");
        $uploadOk = 0;
    }
}
if (file_exists($target_file)) {
	?>
     
       <?php
	echo 'Sorry, file already exists.';
	 //header("Location:./?themmoiphim=1");
   
    $uploadOk = 0;
}
// Check file size
if ($_FILES["upload"]["size"] > 5000000) {
	?>
     
       <?php
	echo 'Sorry, your file is too large.';
	 //header("Location:./?themmoiphim=1");
    
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
	?>
  
   <?php
   
    $uploadOk = 0;
	echo 'Sorry, only JPG, JPEG, PNG & GIF files are allowed.';
	 //header("Location:./?themmoiphim=1");
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
	?>
  
   <?php
	echo 'Sorry, your file was not uploaded.';
  // header("Location:./?themmoiphim=1");
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file)) {
		list($width,$height)=getimagesize($target_file);
		if($imageFileType=='jpg'){
		$newfile=imagecreatefromjpeg($target_file);
		$newwidth=512;
		$newheight=512;
		$thumb=$target_dir.basename($_FILES["upload"]["name"]);
		$truecolor=imagecreatetruecolor($newwidth,$newheight);
		imagecopyresampled($truecolor,$newfile,0,0,0,0,$newwidth,$newheight,$width,$height);
		imagejpeg($truecolor,$thumb,100);
		}
		else if($imageFileType=='png'){
			$newfile=imagecreatefrompng($target_file);
		$newwidth=512;
		$newheight=512;
		$thumb=$target_dir.basename($_FILES["upload"]["name"]);
		$truecolor=imagecreatetruecolor($newwidth,$newheight);
				$background_color = imagecolorallocate($truecolor,  255, 255, 255); 
     
// Fill background with above selected color 
imagefill($truecolor, 0, 0, $background_color);
		imagecopyresampled($truecolor,$newfile,0,0,0,0,$newwidth,$newheight,$width,$height);
		imagepng($truecolor,$thumb);
		}
		else if($imageFileType=='jpeg'){
			$newfile=imagecreatefromjpeg($target_file);
		$newwidth=240;
		$newheight=201;
		$thumb=$target_dir.basename($_FILES["upload"]["name"]);
		$truecolor=imagecreatetruecolor($newwidth,$newheight);
		imagecopyresampled($truecolor,$newfile,0,0,0,0,$newwidth,$newheight,$width,$height);
		imagejpeg($truecolor,$thumb,100);
		}
		else{
		$newfile=imagecreatefromgif($target_file);
		$newwidth=240;
		$newheight=201;
		$thumb=$target_dir.basename($_FILES["upload"]["name"]);
		$truecolor=imagecreatetruecolor($newwidth,$newheight);
				$background_color = imagecolorallocate($truecolor,  255, 255, 255); 
     
// Fill background with above selected color 
imagefill($truecolor, 0, 0, $background_color);
		imagecopyresampled($truecolor,$newfile,0,0,0,0,$newwidth,$newheight,$width,$height);
		imagegif($truecolor,$thumb);
		}
		header("Location:./?themmoiphim=1&&src="."'".$target_dir . basename($_FILES["upload"]["name"])."'");
    } else {
		?>
     
       <?php
		echo 'Sorry, there was an error uploading your file.';
       //header("Location:./?themmoiphim=1");
		 
    }
}
}

?>
