<?php
require("config/model.php");
$content=$_POST['content'];
$selection=$_POST['selection'];
$model=new model();
$data=$model->update_about($content,$selection);
echo json_encode(array("status"=>$data));
?>