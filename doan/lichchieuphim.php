<?php
require("config/model.php");
$model=new model();
$cumrap=$_GET['cumrap'];
$ngay=$_GET['ngay'];
$id=$_GET['id'];
$sql="select * from listfilm where id=$id limit 1 ";
	$data=$model->select($sql);
	if($data->num_rows>0){
		$row=$data->fetch_assoc();
		$thoiluong=$row['thoiluong'];
			$loaiphim=$row['id_loai'];
	}
			$sql1="select * from rapchieuphim where idcumrap=$cumrap ";

			$data1=$model->select($sql1);
			while($row=$data1->fetch_assoc()){
				$idrap=$row['idrap'];
				
			?>
			
				<?php
				$sql2="select * from lichchieuphim inner join rapchieuphim_khuvucchieu on rapchieuphim_khuvucchieu.id_khuvuc=lichchieuphim.id_khuvuc and rapchieuphim_khuvucchieu.idrap=$idrap and lichchieuphim.id=$id and lichchieuphim.ngaychieu='$ngay'";
				
				$data2=$model->select($sql2);
				if($data2->num_rows>0){
					//id="title-lichchieuphim"
					?>
					<div class="col-sm-12 col-xs-12 title-lichchieuphim1" style="margin-top: 15px;" >
				<span class="col-sm-12 col-xs-12"><?=$row['namerap']?></span>
			</div>
			<div class="col-sm-12 col-xs-12" id="content-lichchieuphim">
			<ul class="list-type" id="ul-lichchieuphim">
					<?php
						$lichchieuphim=array();
					$thoiluongchieu=array();
					$i=0;
					while($row1=$data2->fetch_assoc()){
						$idkhuvuc=$row1['id_khuvuc'];
						$a=$row1['giochieuphim'];
						$ngaychieuphim=$row1['ngaychieu'];
						$thoiluonghour=floor($thoiluong/60);
						
						$thoiluongminute=$thoiluong%60;
						$hour=floor($a/60)-$thoiluonghour;
						$phut=$a%60-$thoiluongminute;
						if($phut<0){
							$hour=$hour-1;
							$phut=$a%60+60-$thoiluongminute;
						}
						$hour=9+$hour;
						$giochieu=$hour.":".($phut<10?'0'.floor($phut/10)*10:floor($phut/10)*10);
						$lichchieuphim[$i]=array("idkhuvuc"=>$idkhuvuc,"giochieu"=>$giochieu,"nguyengiochieu"=>$a,"ngaychieuphim"=>$ngaychieuphim);
						$thoiluongchieu[$i]=$a;
						
				?>
				<?php
						$i++;
					}
					
					while(!empty($thoiluongchieu)){
					$min=min($thoiluongchieu);
				   $index=array_search($min,$thoiluongchieu);
						$row2=$lichchieuphim[$index];
						
						unset($thoiluongchieu[$index]);
				?>
				<li class="li-item-lichchieuphim"><A  href="./?datve=1&&rp=<?=$row['idrap']?>&&suatchieu=<?=$row2['giochieu']?>&&idphim=<?=$id?>&&idkhuvuc=<?=$row2['idkhuvuc']?>&&loaive=<?=$loaiphim?>&&giochieuphim=<?=$row2['ngaychieuphim']?>&&giochieuphim2=<?=$row2['nguyengiochieu']?>"><?php 
					
						
						echo $row2['giochieu'];
					?></A></li>
					<?php
					}
					
						?>
				
				</ul>
			</div>
			<?php
				
				}
			}
				?>