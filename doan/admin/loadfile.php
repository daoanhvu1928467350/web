<?php
if(isset($_GET['name'])){
     $name=$_GET['name'];
	$ten=$_GET['ten'];
}
	$target="./image/".$name;
		if(is_dir($target)){
		$tenfile=scandir($target);
		foreach($tenfile as $files){
			$target="./image/".$name.$files;
			if(file_exists($target)){
				if($files =="." || $files =="..")
				{
					continue;
				}
			?>
			<div class="img-<?=$ten?>-thuvien1 cursor" id="<?=$files?>">
			<img src=<?="/doan/admin/image/".$name.$files?> height=100 width=100 >
			</div>
			
			<?php
			}
			}
			?>
			<script>
				$(".img-<?=$ten?>-thuvien1").click(function(){
		//$(".img-<?=$ten?>-thuvien1").css("border","0px none");
		$(".img-<?=$ten?>-thuvien1").css("transition","transform .2s");
		$(".img-<?=$ten?>-thuvien1").css("transform","scale(1)");
		$(".img-<?=$ten?>-thuvien1").removeClass("active");
		$(this).css("transform","scale(1.2)");
		$(this).addClass("active");
	});
</script>
			<?php
		}
