 <br>
     <?php
		$target="./video/upload";
		if(is_dir($target)){
		$tenfile=scandir($target);
		foreach($tenfile as $files){
			$target="./video/upload/".$files;
			if(file_exists($target)){
				if($files =="." || $files =="..")
				{
					continue;
				}
			?>
			<div class="img-phim-thuvien1-video cursor" id="<?=$files?>">
			<div style="text-align: center">
				<video src=<?="./video/upload/".$files?> height=100 width=100 >
			</div>
			<div style="text-align: center">
				<p style="width: 100px;text-overflow: ellipsis;overflow: hidden"><?=$files?></p>
			</div>
			
			</div>
			<?php
			}
			}
		}
		?>