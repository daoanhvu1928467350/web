<?php

$sql="select * from  theloaiphim";
	$data=$model->select($sql);
if($data->num_rows>0){
?>

<ul class="list-type" id="theloaiphim">
<?php
	while($row=$data->fetch_assoc()){
	?>
	<li name="<?=$row['id_theloai']?>" class="item-theloai"><?=$row['tentheloai']?></li>
	<?php
	}
	?>
</ul>
<?php
}
?>