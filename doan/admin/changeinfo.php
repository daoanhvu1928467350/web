<?php
require("config/model.php");
$model=new model();
$sql="select * from admin";
$data=$model->select($sql);
$row=$data->fetch_assoc();

?>
<div class="col-xs-12 col-sm-12 margin padding bg-white">
<h2 class="h2-color">Thông tin admin</h2>
	<table class="table">
		<thead>
			<th>ID</th>
			<th>Tài khoản</th>
			<th>Mật khẩu</th>
		</thead>
		<tbody>
			<tr>
				<td><?=$row['id']?></td>
				<td><?=$row['username']?></td>
				<td><?=$row['password']?></td>
			</tr>
		</tbody>
	</table>
	<h2 class="h2-color">Thay đổi thông tin admin</h2>
	
	<form action="./" method="post">
		<div class="form-group">
    <label for="taikhoan">Tài khoản:</label>
    <input type="text" class="form-control " id="taikhoan" name="taikhoan">
    <div id="error-taikhoan-admin" class="error"></div>
  </div>
  <div class="form-group">
    <label for="pwd">Mật khẩu:</label>
    <input type="password" class="form-control" id="pwd" name="password">
      <div id="error-password-admin" class="error"></div>
  </div>
  <input type="hidden" name="changeinfo-data-admin" value="1">
  <button type="submit" class="btn btn-generation2" id="submit-admin">Submit</button>
	</form>
</div>
<script>
	$(document).ready(function(){
		
		$("#submit-admin").click(function(e){
		
				a=false;
		if($("#taikhoan").val() == ""){
			
			$("#error-taikhoan-admin").text("Vui lòng nhập tài khoản");
			a=true;
		}
		if($("#pwd").val() == ""){
				$("#error-password-admin").text("Vui lòng nhập password");
			a=true;
		}
		if(a){
			e.preventDefault();
		}
		});
	
	});
</script>