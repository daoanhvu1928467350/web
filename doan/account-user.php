<?php
session_start();
require("config/model.php");

   if(isset($_SESSION['user'])){
	   $id=$_SESSION['user']['id'];
       
	   $model=new model();
	   $sql="select * from member where id=$id limit 1";
	   $sql5="select count(*) as total from thequatang_member where id=$id and action=0";
	   $data5=$model->select($sql5);
	  
	   $thequatang=$data5->fetch_assoc();
	  
	   $data=$model->select($sql);
	   $row=$data->fetch_assoc();
	   $diemtichluy=$row['diemtichluy'];
	   $tongchitieu=$row['tongchitieu'];
	   
	   ?>
	   
	   <div class="col-sm-12 col-xs-12 row non-row" id="page-account">
	   <div class="col-sm-3 col-xs-3" id="menu-account-user">
	   	   <ul class="nav nav-pills" id="ul-account">
	   	     <li><h4 class="h2-color">Tài khoản khách hàng</h4></li>
	   	   	<li class="nav-item" ><a class="nav-link active" data-toggle="pill" href="#element-user">Thông tin cá nhân</a></li>
	   	   	<li class="nav-item"><a class="nav-link" data-toggle="pill" href="#history-booking">Lịch sử đặt vé</a></li>
	   	   </ul>
	   </div>
	   <div class="tab-content col-sm-8 col-xs-8" id="content-account">
	 
	   <div class="col-sm-12 col-xs-12 tab-pane active" id="element-user">
    <div class="col-sm-12 col-xs-12" id="thongtinchung">
	   	<h4 class="khung col-sm-12 col-xs-12">Thông tin chung</h4>
	   	<div class="col-sm-12 col-xs-12 row non-row" id="thongtinchung1">
	   	<div class="col-sm-3 col-xs-3" id="img-thongtinchung">
	   		<img src="<?php echo $tongchitieu<=5000000?"image/chuacorank.png":( $tongchitieu<=10000000?"image/copper.png":($tongchitieu<=20000000?"image/silver.png":($tongchitieu<=40000000?"image/gold.png":($tongchitieu<=80000000?"image/platinum.jpg":($tongchitieu<=1600?"image/diamond.png":($tongchitieu<=1000000000?"image/vip1.png":"image/vip2.jpg"))))))?>" height=150 width=200>
	   	</div>
	   	<div class="col-sm-8 col-xs-8">
	   	   <ul class="list-type">
	   	   	<li><b>Cấp độ thẻ  :  </b><?php echo $tongchitieu<=5000000?"Thành viên":($tongchitieu<=10000000?"Đồng":($tongchitieu<=20000000)?"Bạc":($tongchitieu<=40000000)?"Vàng":($tongchitieu<=80000000)?"Bạch kim":($tongchitieu<=160000000)?"Kim cương":($tongchitieu<=1000000000)?"Vip 1":"Vip 2")?></li>
	   	   	<li><b>Tổng điểm tích lũy  :  </b><?=$diemtichluy." điểm"?></li>
	   	   	<li><b>Tổng chi tiêu đạt được  :  </b><?=number_format($row['tongchitieu'],0)?> đồng</li>
	   	    <li><b>Thẻ quà tặng:</b><?php echo isset($thequatang)?$thequatang['total']."  Thẻ":"0 thẻ";?></li>
	   	   </ul>
	   	   </div>
	   	   </div>
	   </div>
<div id="see-infomation-user" class="col-sm-12 col-xs-12">
   <h4 class="khung">Thông tin cá nhân</h4>
   <ul id="infomation-user-768" class="list-type">
   	<li><b>ID:</b><?=$row['id']?></li>
   	<li><b>User Name:</b><?=$row['username']?></li>
   	<li><b>Password:</b><?=$row['password']?></li>
   	<li><b>Điện thoại:</b><?=$row['phone']?></li>
   	<li><b>Email:</b><?=$row['email']?></li>
   	<li><b>Số tiền trong tài khoản:</b><?=number_format( $row['moofcard'],0)?>    VNĐ</li>
   </ul>
   <table class="table col-sm-12 col-xs-12" id="thongtin-account-user" >
	   <thead>
		   <th>ID</th>
		   <th>User Name</th>
		   <th>Password</th>
		   <th>Điện thoại</th>
		   <th>Email</th>
		   <th>Số tiền trong tài khoản</th>
	   </thead>
    <tbody>
		<tr>
			<?php
			
				
					?>
			      <td><?=$row['id']?></td>
			      <td><?=$row['username']?></td>
			      <td><?=$row['password']?></td>
			      <td><?=$row['phone']?></td>
			      <td><?=$row['email']?></td>
			      <td><?=number_format( $row['moofcard'],0)?>    VNĐ</td>
			<?php
				
			
				
				?>
			
			
			
		</tr>
		
	   </tbody>
</table>
</div>
<span id="span-click-update"><h5>Cập nhật thông tin cá nhân  <i class="fas fa-caret-down"></i></h5></span>
<div id="update-infomation-user">
<form action="./" method="post">
	<div class="form-group">
    <label for="name">Họ và tên:*</label>
    <input type="text" class="form-control col-md-5" name="name" id="name-user" required>
    <div id="error-name-register" class="error"></div>
  </div>
  <div class="form-group">
    <label for="phone">Số điện thoại:*</label>
    <input type="text" class="form-control col-md-5" name="phone" id="phone-user" required>
    <div id="error-sdt-register" class="error"></div>
  </div>
  <div class="form-group">
    <label for="email">Địa chỉ email:*</label>
    <input type="email" class="form-control col-md-5" name="email" id="email-user" required>
    <div id="error-email-register" class="error"></div>
  </div>
  <div class="form-group">
    <label for="pwd">Mật khẩu:*</label>
    <input type="password" class="form-control col-md-5" name="password" id="pwd-user" required>
   
  </div>
  <div class="form-group">
  	<label for="re-pwd">Nhập lại mật khẩu:*</label>
  	<input type="password" class="form-control col-md-5"  id="re-pwd-user" required>
  	<div id="error-re-pwd1" class="error"></div>
  </div>
  <input type="hidden" name="update-member" value="1">
  <input type="hidden" name="id" value="<?=$id?>">
  <button type="submit" class="btn btn-success" id="update" >Cập nhật</button>
  </form>
</div>
</div>
<div id="history-booking" class="col-sm-12 col-xs-12 tab-pane fade">
<?php
					$user=$_SESSION['user'];
	                $iduser=$user['id'];
					$sql="select * from thanhtoan where iduser=$iduser order by id_thanhtoan desc";
	   $data1=$model->select($sql);
	   if($data1->num_rows>0){
		   ?>
		   <h4 class="khung">Lịch sử đặt vé</h4>
		   <table class="table" id="lichsudatve" >
		   	<thead>
		   		<th>STT</th>
		   		<th>Tên phim</th>
		   		<th>Rạp chiếu phim</th>
		   		<th>Khu vực chiếu</th>
		   		<th>Số lượng vé/ghế</th>
		   		<th>Tổng tiền vé(VNĐ)</th>
		   		<th>Tổng tiền đồ ăn/thức uống(VNĐ)</th>
		   		<th>Tổng(VNĐ)</th>
		   	</thead>
		   	<tbody>
		   		<?php
		   $i=0;
		    $arrthanhtoan=array();
		  
		   while($row1=$data1->fetch_assoc()){
			   $rapchieuphim=$row1['rapchieuphim'];
			   $khuvuc=$row1['khuvucchieu'];
			   $sql1="select * from rapchieuphim where idrap=$rapchieuphim limit 1";
			   $data2=$model->select($sql1);
			   $row2=$data2->fetch_assoc();
			   $namerap=$row2['namerap'];
			   $sql2="select * from rapchieuphim_khuvucchieu where id_khuvuc=$khuvuc limit 1";
			    $data3=$model->select($sql2);
			   $row3=$data3->fetch_assoc();
			   $namekhuvuc=$row3['name_khuvuc'];
			   $namefilm=$row1['namefilm'];
			   $soluongve=$row1['soluongve'];
			   $tongtienve=$row1['tongtienve'];
			   $tongtienbap=$row1['tongtienbapnuoc'];
			   $tong=$row1['tongtatca'];
			   $thanhtoan=$row1['id_thanhtoan'];
			  
		   ?>
		   <tr>
		   	<td><?=$i?></td>
		   	<td><?=$namefilm?></td>
		   	<td><?=$namerap?></td>
		   	<td><?=$namekhuvuc?></td>
		   	<td><a href="./?id=1"  data-toggle="modal" data-target="<?=$thanhtoan?>" class="click-soghe" name="soghe<?=$thanhtoan?>"><?=$soluongve?></a></td>
			   <td><a href="./?id=1"  data-toggle="modal" data-target="<?=$thanhtoan?>" class="click-tongtienve" name="<?=$thanhtoan?>"><?=number_format($tongtienve,0)?></a>
			<?php
			   $arrthanhtoan[$i]=$thanhtoan;
			   ?>
		   
			   </td>
			   <td><A href="./?id=1"  data-toggle="modal" data-target="<?=$thanhtoan?>" class="click-tongtienbap" name="b<?=$thanhtoan?>"><?=number_format($tongtienbap,0)?></a></td>
		   	<td><?=number_format($tong,0)?></td>
		   </tr>
		   
		   <?php
			   
			   $i++;
		   }
			   ?>
		   	</tbody>
		   </table>
		   <?php
	   }
	   else{
		   echo 'Không tìm thấy lịch sử đặt vé';
	   }
					?>
					
</div>

</div>

          
</div>
<div id="night3">
	
          </div>
          <?php
	   if(isset($arrthanhtoan)){
	   foreach($arrthanhtoan as $thanhtoan2){
		 
	   ?>
 <div class="tongtienve" id="<?=$thanhtoan2?>">
		 	
			 	<div class="header-modal row non-row">
			 		<h2 class="h2-color">Chi tiết tiền  vé</h2>
			 		<div class="icon" name="<?=$thanhtoan2?>">
			 			<i class="fas fa-window-close"></i>
			 		</div>
			 	</div>
			 	<div class="body-modal">
			 	<?php
			   $sql3="select * from thanhtoan_nguoi   inner join giave inner join element_of_people on element_of_people.id_loainguoi=giave.id_loainguoi and giave.id_giave=thanhtoan_nguoi.id_giave and id_thanhtoan=$thanhtoan2";
			   
			   $data3=$model->select($sql3);
			   if($data3->num_rows>0){
			  
			   ?>
			  
			 		<table class="table" id="table-detail-tongve">
			 		<thead>
			 			<th>Phân loại vé</th>
			 			<th>Giá vé</th>
			 			<th>Số lượng</th>
			 			<th>Tổng cộng</th>
			 		</thead>
			 		<tbody>
			 		<?php
				   $tongtatca=0;
				   $tong=0;
				   while($row4=$data3->fetch_assoc()){
					   $tong=$row4['giave']*$row4['soluong'];
					   $tongtatca+=$tong;
			   ?>
			 			<tr>
			 				<td><?=$row4['loainguoi']?></td>
			 				<td><?=number_format($row4['giave'],0)?></td>
			 				<td><?=$row4['soluong']?></td>
			 				<td><?=number_format($tong,0)?></td>
			 			</tr>
			 			<?php
				   }
					   ?>
			 			<tr>
			 				<td colspan="3">Tổng</td>
			 				<td>
			 				<?=number_format($tongtatca,0)?>
			 				</td>
			 			</tr>
			 		</tbody>
			 			
			 		</table>
			 		<?php
			   }
				   ?>
			 	</div>
			 </div>
			 <?php
	   }
	   
		   ?>
		   
		   
		   <!-- tong tien bap!-->
		    <?php
	   foreach($arrthanhtoan as $thanhtoan3){
		 
	   ?>
 <div class="tongtienve" id="b<?=$thanhtoan3?>">
		 	
			 	<div class="header-modal row non-row">
			 		<h2 class="h2-color">Chi tiết tiền đồ ăn thức uống</h2>
			 		<div class="icon" name="b<?=$thanhtoan3?>">
			 			<i class="fas fa-window-close"></i>
			 		</div>
			 	</div>
			 	<div class="body-modal">
			 	<?php
			   $sql4="select * from thanhtoan_bapnuoc   inner join bapnuoc inner join thanhtoan on  bapnuoc.id_bapnuoc=thanhtoan_bapnuoc.id_bapnuoc and thanhtoan_bapnuoc.id_thanhtoan=$thanhtoan3 and thanhtoan.id_thanhtoan=thanhtoan_bapnuoc.id_thanhtoan";
			   
			   $data4=$model->select($sql4);
		   ?>
		   <table class="table" id="table-detail-tongve">
			 		<thead>
			 			<th>Tên đồ ăn/thức uống</th>
			 			<th>Giá</th>
			 			<th>Số lượng</th>
			 			<th>Tổng cộng</th>
			 		</thead>
			 		<tbody>
		   <?php
			   if($data4->num_rows>0){
			  
			   ?>
			 		
			 		<?php
				   $tongtatca1=0;
				   $tong1=0;
				   $count=$data4->num_rows>0;
				   while($row5=$data4->fetch_assoc()){
					   $tongtatcathanhtoan=$row5['tongtienbapnuoc'];
					   $tong1=$row5['gia']*$row5['soluongbapnuoc'];
					   $tong1=$tong1!=$tongtatcathanhtoan?0:$tong1;
					   $tongtatca1+=$tong1;
			   ?>
			 			<tr>
			 				<td><?=$row5['namebap']?></td>
			 				<td><?=number_format($row5['gia'],0)?></td>
			 				<td><?=$row5['soluongbapnuoc']?></td>
			 				<td><?=number_format($tong1,0)?></td>
			 			</tr>
			 			<?php
				   }
					   ?>
			 			<tr>
			 				<td colspan="3">Tổng</td>
			 				<td><?php echo $tongtatca1==0&&$count>0?number_format($tongtatca1,0)."(Đổi bắp nước bằng điểm tích lũy)":number_format($tongtatca1,0) ?></td>
			 			</tr>
			 		
			 		<?php
			   }
				   ?>
				   </tbody>
			 			
			 		</table>
			 	</div>
			 </div>
			 <?php
	   }
	  foreach($arrthanhtoan as $thanhtoan4){
		  
		   ?>
		   <div class="tongtienve" id="soghe<?=$thanhtoan4?>">
		 	
			 	<div class="header-modal row non-row">
			 		<h2 class="h2-color">Chi tiết về số ghế</h2>
			 		<div class="icon" name="soghe<?=$thanhtoan4?>">
			 			<i class="fas fa-window-close"></i>
			 		</div>
			 	</div>
			 	<div class="body-modal">
			 	<?php
			   $sql6="select * from gheso where id_thanhtoan=$thanhtoan4 ";
			  
			  $data6=$model->select($sql6);
		   $arrgheso=array();
		   $i=0;
		       while($row6=$data6->fetch_assoc()){
				   $arrgheso[$i]=$row6['tenghe'];
				   $i++;
			   }
		   $arrgheso=implode(",",$arrgheso);
		   ?>
		   <p style="word-wrap: break-word">
		   	<b>Các ghế số như sau:</b>
		   	<?=$arrgheso?>
		   </p>
		   
			 	</div>
			 </div>
		   <?php
	  }
	   }
		   ?>
		   
<script src="js/account-user-js.js">
	
</script>

<?php
   }
else{
	?>
<script>
	 window.history.pushState({}, "Hide", "./member.php?login=1&&infomation-thanhvien=1");
				 location.reload();
</script>
<?php
}
?>