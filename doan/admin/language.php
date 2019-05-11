
<select class="form-control" id="language">
	<?php
	$file=fopen("language.txt","r+");
	
	if(isset($_GET['id'])){
		
	
	while($str=fgets($file)){
		
		if(trim($row1['ngonngu'])==trim($str)){
			?>
			
			<option value="<?=$str?>" selected><?=$str?></option>
			<?php
		}
		else{
		?>
		<option value="<?=$str?>" ><?=$str?></option>
		<?php
		}
	}
	}
	else{
		while($str=fgets($file)){
		
		?>
		<option value="<?=$str?>"><?=$str?></option>
		<?php
	}
	}
	?>
</select>
