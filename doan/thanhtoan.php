<?php
session_start();
require("config/model.php");
$model=new model();
if(isset($_SESSION['user'])){
	$idfilm=$_POST['idfilm'];
	$khuvuc=$_POST['khuvuc'];
	$rap=$_POST['rap'];
	$tong=$_POST['tong'];
	$gheso=$_POST['gheso'];
	$soluongve=$_POST['soluongve'];
	$user=$_SESSION['user'];
	$suatchieu=$_POST['suatchieu'];
	$giave=$_POST['giave'];
	$sql="select * from listfilm where id=$idfilm limit 1";
	$data=$model->select($sql);
	if($data->num_rows>0){
		$row=$data->fetch_assoc();
	}
	$sql2="select * from rapchieuphim where idrap=$rap limit 1";
		$data1=$model->select($sql2);
	if($data1->num_rows>0){
	$row1=$data1->fetch_assoc();
	}
	$sql3="select * from rapchieuphim_khuvucchieu where id_khuvuc=$khuvuc limit 1";
	
	$data2=$model->select($sql3);
	if($data2->num_rows>0){
		$row2=$data2->fetch_assoc();
	}
	$soluongvearr=explode(",",$_POST['soluongvearr']);
	
	$soluongvearr2=array();
	$i=0;
	foreach($soluongvearr as $key){
		$soluongvearr2[$i]=(int)$key;
		$i++;
	}
	$giaarr=explode(",",$_POST['giaarr']);
	$soluongcombo2=array();
	$giacombo=array();
	$soluongcombo=explode(",",$_POST['soluongcombo']);
	$i3=0;
	foreach($soluongcombo as $key){
		$soluongcombo2[$i3]=(int)$key;
		$i3++;
	}
	
	$giacomboarr=explode(",",$_POST['giacomboarr']);
	$i3=0;
	foreach($giacomboarr as $key){
		$giacombo[$i3]=(int)$key;
		$i3++;
	}
	$ngaychieuphim=$_POST['ngaychieuphim'];
	$giochieuphim1=$_POST['giochieuphim'];
?>

<div class="col-xs-12 col-sm-12 " id="thanhtoan">
<h2 class="h2-color col-xs-12 col-sm-12" style="text-align: center">Thanh toán</h2>
	<div class="col-xs-8 col-sm-8" id="thongtin-thanhtoan">
	<div class="col-xs-12 col-sm-12 thontinthanhtoan" >
		<h5 class="h2-color">Thông tin vé</h5>
		<div >
			<table>
				<tr>
					<td class="bold">Người đặt vé:</td>
					<td id="user-thanhtoan"><?=$user['name']?></td>
				</tr>
				<tr>
					<td class="bold">Số điện thoại:</td>
					<td id="sodienthoai-thanhtoan"><?=$user['email']?></td>
				</tr>
				<tr>
					<td class="bold">Phim:</td>
		      
					<td id="namefilm-thanhtoan"><?=$row['namefilm']?></td>
				</tr>
				<tr>
					<td class="bold">Rạp chiếu phim:</td>
					<td id="namerap-thanhtoan"><?=$row1['namerap']?></td>
				</tr>
				<tr>
					<td class="bold">Khu vực chiếu:</td>
					<td id="namekhuvuc-thanhtoan"><?=$row2['name_khuvuc']?></td>
				</tr>
				<tr>
					<td class="bold">Thời gian chiếu phim:</td>
					<td id="suatchieu-thanhtoan"><?=  $suatchieu.",  ".date("d/m/Y",strtotime($ngaychieuphim))?></td>
				</tr>
				<tr>
					<td class="bold">Thời lượng:</td>
					<td id="thoiluong-thanhtoan"><?=$row['thoiluong']?> phút</td>
				</tr>
				<tr>
					<td class="bold">Số lượng vé:</td>
					<td id="soluongve-thanhtoan"><?=$soluongve?></td>
				</tr>
				
						<?php
		$sql4="select * from element_of_people";
	$data4=$model->select($sql4);
	$tien=0;
	if($data4->num_rows>0){
		
		?>
				<tr>
				
					<td class="bold">Phân loại vé:</td>
					</tr>
					<tr>
			<?php
		$i1=0;
		
		while($row4=$data4->fetch_assoc()){
		?>
				
					<td class="phanloaive-thanhtoan"><?=$row4['loainguoi'].":".$soluongvearr2[$i1]?></td>
					<?php
			$tien+=$soluongvearr2[$i1]*$giaarr[$i1];
			$i1++;
		}
			?>
			</tr>
				
				<?php
	}
		?>
				<tr>
					<td class="bold">Giá vé:</td>
					<?php
	$data6=$model->select($sql4);
	if($data6->num_rows>0){
		$i=0;
		while($row6=$data6->fetch_assoc()){
	?>
					<tr>
					<td id="giave-thanhtoan" colspan="4"><?=$row6['loainguoi'].":".number_format((int)$giaarr[$i]*1000,0)?> VNĐ</td>
						</tr>
					<?php
		$i++;
		}
	}
		?>
				</tr>
				<tr>
					<td class="bold">Số ghế:</td>
					<td id="gheso-thanhtoan"><?=$gheso?></td>
				</tr>
				<tr>
					<td class="bold">Tổng tiền vé:</td>
					<td id="tongtienve-thanhtoan"><?=$tongtien1=number_format($tien*1000,0)?> VNĐ</td>
				</tr>
				
			</table>
		</div>
		</div>
		<div class="col-xs-12 col-sm-12 thontinthanhtoan">
			<h5 class="h2-color">Thức uống</h5>
			<?php
			$sql5="select * from bapnuoc";
	        $data5=$model->select($sql5);
	if($data5->num_rows>0){
			?>
			<table class="table">
			<thead>
				<th>Tên combo</th>
				<th>Bao gồm</th>
				<th>Số lượng </th>
				<th>Đơn giá</th>
				<th>Tổng</th>
				</thead>
				<tbody>
				<?php
		$i2=0;
		
		$tongtien2=0;
		while($row5=$data5->fetch_assoc()){
			if($soluongcombo2[$i2]==0){
				//echo 'xinchao'.$soluongcombo2[$i2];
				$i2++;
				continue;
			}
			if( empty($soluongcombo2[$i2])){
				continue;
			}
			$tongtien2+=$row5['gia']*$soluongcombo2[$i2];
		echo $row5['gia']*$soluongcombo2[$i2];
		?>
					<tr>
						<td><?=$row5['namebap']?></td>
						<td><p><?=str_replace("'","",$row5['detailbap'])?></p></td>
						<td><?=$soluongcombo2[$i2]?></td>
						<td><?=number_format($row5['gia'],0)?></td>
						<td><?=number_format($row5['gia']*$soluongcombo2[$i2],0)?></td>
					</tr>
					<?php
				$i2++;
		}
			?>
					<tr>
						<td colspan="4" class="bold">Tổng</td>
						<td><?=number_format($tongtien2,0)?></td>
					</tr>
				</tbody>
			</table>
			<?php
		
	}
	
		?>
		</div>
	</div>
	<div class="col-xs-4 col-sm-4" id="tongtien-thanhtoan">
		<p>
		<div style="border: 1px dashed orange">
			<h4 class="h2-color">Tổng tiền:</h4>
			<h5 class="h2-thanhtoan"><?=$tong=number_format((int)$tongtien1*1000+$tongtien2,0)?> VNĐ</h5>
			</div>
			
		</p>
		<form action="./?thanhtoan-endpoint=1" method="post">
		
		
		
		<input type="hidden" name="idfilm" value="<?=$idfilm?>">
		<input type="hidden" name="idrap" value="<?=$rap?>">
		<input type="hidden" name="idkhuvuc" value="<?=$khuvuc?>">
		<input type="hidden" name="suatchieu" value="<?=$suatchieu?>">
		<input type="hidden" name="soluongve" value="<?=$soluongve?>">
		<input type="hidden" name="giave" value="<?=$giave?>">
		<input type="hidden" name="soghe" value="<?=$gheso?>">
		<input type="hidden" name="tongtienve" value="<?=$tongtien1?>">
		<input type="hidden" name="tongtienbap" value="<?=$tongtien2?>">
		<input type="hidden" name="tongtatce" value="<?=$tong?>">
		<input type="hidden" name="giochieuphim" value="<?=$giochieuphim1?>">
		<input type="hidden" name="ngaychieuphim" value="<?=$ngaychieuphim?>">
		<input type="hidden" name="soluongvearr" value="<?=json_encode($soluongvearr2)?>">
		<input type="hidden" name="giaarr" value="<?=$giaarr?>">
		<input type="hidden" name="soluongcombo" value="<?=json_encode($soluongcombo2)?>">
		<button type="submit" class="btn btn-generation" id="btn-thanhtoan"
		style="font-size: 20px">
			Tiến hành thanh toán
		</button>
		</form>
	</div>
</div>

<script src="js/thanhtoan-js.js"></script>
<?php
}
else{
	?>
  <script>
	
	  $("#login-thanhtoan").show();
	  $("#night2").show();
</script>
   <?php
    
}

	?>
	