<?php
 require("model.php");
date_default_timezone_set('Asia/Ho_Chi_Minh');

$model=new model();
if(isset($_POST['insert-film'])){
	$img=$_POST['img'];
	$video=basename($_POST['video']);
	$thoiluong=$_POST['phut'];
	$ngaykhoichieu=date('Y-m-d',strtotime($_POST['ngaykhoichieu']));
	$ngayketthuc=date('Y-m-d',strtotime($_POST['ngayketthuc']));
	$tenphim=$_POST['tenphim'];
	$content=$_POST['content'];
	$loaiphim=$_POST['loaive'];
	$daodien=$_POST['daodien'];
	$ngonngu=$_POST['ngonngu'];
	$arrdienvien=$_POST['arrdienvien'];
	$arrtheloai=$_POST['arrtheloai'];
	$sql="insert into listfilm values(0,?,?,?,?,?,?,?,?,?,?)";
	$data=$model->update_film($sql,$img,$video,$ngaykhoichieu,$ngayketthuc,$thoiluong,$tenphim,$content,$loaiphim,$ngonngu,$daodien);
	if($data){
		$sql2="select * from listfilm order by id desc limit 1";
		$data2=$model->select($sql2);
		$row2=$data2->fetch_assoc();
		$sql3="insert into theloai_listfilm values(?,?)";
		$sql4="insert into dienvien_listfilm values(?,?)";
		foreach($arrtheloai as $key){
		$data3=$model->update_theloai_listfilm($sql3,$key,$row2['id']);
			
		}
		foreach($arrdienvien as $key2){
			$data3=$model->update_theloai_listfilm($sql4,$key2,$row2['id']);
		}
		echo json_encode(array("status"=>$data));
	}
	else{
		
	
	echo json_encode(array("status"=>$data));
	}
}
else if(isset($_POST['update-film'])){
	$id=$_POST['id'];
	$img=$_POST['img'];
	$video=basename($_POST['video']);
	$thoiluong=$_POST['phut'];
	$ngaykhoichieu=date('Y-m-d',strtotime($_POST['ngaykhoichieu']));
	$ngayketthuc=date('Y-m-d',strtotime($_POST['ngayketthuc']));
	$tenphim=$_POST['tenphim'];
	$content=$_POST['content'];
	$loaiphim=$_POST['loaive'];
	$daodien=$_POST['daodien'];
	$ngonngu=$_POST['ngonngu'];
	$arrdienvien=$_POST['arrdienvien'];
	$arrtheloai=$_POST['arrtheloai'];
	$sql="update listfilm set namefilm=?,thoiluong=?,ngaykhoichieu=?,ngayketthuc=?,contentfilm=?,anhdaidien=?,trailer=?,id_loai=?,ngonngu=?,daodien=? where  id=?";
	$data=$model->update_film2($sql,$img,$video,$ngaykhoichieu,$ngayketthuc,$thoiluong,$tenphim,$content,$loaiphim,$ngonngu,$daodien,$id);
	if($data){
		$model->insert("delete from theloai_listfilm where id=$id");
		$model->insert("delete from dienvien_listfilm where id=$id");
		$sql3="insert into theloai_listfilm values(?,?)";
		$sql4="insert into dienvien_listfilm values(?,?)";
		foreach($arrtheloai as $key){
		$data3=$model->update_theloai_listfilm($sql3,$key,$id);
			
		}
		foreach($arrdienvien as $key2){
			$data3=$model->update_theloai_listfilm($sql4,$key2,$id);
		}
		echo json_encode(array("status"=>$data));
	}
	else{
		
	
	echo json_encode(array("status"=>$data));
	}
}
else if(isset($_POST['deletephim'])){
	$id=$_POST['id'];
	$sql1="delete from theloai_listfilm where id=$id";
	$model->insert($sql1);
	$sql2="delete from dienvien_listfilm where id=$id";
	$model->insert($sql2);
	$sql3="delete from lichchieuphim where id=$id";
	$model->insert($sql3);
	
	$sql4="delete from listfilm where id=$id";
	
	$data6=$model->insert($sql4);
	echo json_encode(array("status"=>$data6));
	
}
else if(isset($_POST['pr'])){
	$ten=$_POST['ten'];
	$img=$_POST['img'];
	$content=$_POST['content'];
	$sql="insert into pr values(0,?,?,?)";
	$data=$model->update_pr($sql,$ten,$img,$content);
	echo json_encode(array("status"=>$data));
}
else if(isset($_POST['deletepr'])){
	$id=$_POST['id'];
	$sql="delete from pr where id_pr=$id";
	$data=$model->insert($sql);
	echo json_encode(array("status"=>$data));
}
else if(isset($_POST['updatepr'])){
	$ten=$_POST['name'];
	$img=$_POST['src'];
	$content=$_POST['content'];
	$id=$_POST['id'];
	$sql="update pr set namepr='$ten',contentpr=$content,imagepr='$img' where id_pr=$id";
	
	$data=$model->insert($sql);
	echo json_encode(array("status"=>$data));
}
else if(isset($_POST['selectthoiluong'])){
	$id=$_POST['id'];
	$thoiluong=array();
	$rapchieuphim=$_POST['idrap'];
	$suatchieu=$_POST['suatchieu'];
	$lichchieuphim=array();
	$ngaychieu=$_POST['ngaychieu'];
	$i=0;
	 foreach($id as $id1){
		 $sql="select thoiluong from listfilm where id=$id1 limit 1";
		 $data=$model->select($sql);
		 $row=$data->fetch_assoc();
		 $thoiluong[$i]=$row['thoiluong'];
		 $i++;
	 }
	$data2=$model->select("select * from rapchieuphim_khuvucchieu where idrap=$rapchieuphim ");
	/*$sql="select thoiluong from listfilm where id=$id limit 1 ";
	$data=$model->select($sql);
	$row=$data->fetch_assoc();*/
	$time="9:00";
	$khuvucchieu=array();
	$thoiluongarr=array();
	$thoiluong2=array();
	$j=0;
	     foreach($id as $id2){
			 $lichchieuphim[$j]=array("index"=>$j,"id"=>$id2,"suatchieu"=>$suatchieu[$j],"thoiluong"=>$thoiluong[$j]+15);
			 $thoiluong2[$j]=$lichchieuphim[$j]['thoiluong'];
			 $j++;
		 }
	$a1=false;
	 $min=sizeof($lichchieuphim);
	
	while(!empty($lichchieuphim)){
	if(empty($khuvucchieu)){
		
		if($data2->num_rows){
			$k=0;
			$n="";
		while($row=$data2->fetch_assoc()){
			if($k>$min-1){
				$thoiluongarr[$k]=0;
				$khuvucchieu[$k]=array("index"=>'',"khuvucchieu"=>$row['id_khuvuc'],"idphim"=>'',"thoiluong"=>0);
			}
			else{
				$thoiluongarr[$k]=0+$lichchieuphim[$k]['thoiluong'];
			$khuvucchieu[$k]=array("index"=>$lichchieuphim[$k]['index'],"khuvucchieu"=>$row['id_khuvuc'],"idphim"=>$lichchieuphim[$k]['id'],"thoiluong"=>$lichchieuphim[$k]['thoiluong']);
			$lichchieuphim[$k]['suatchieu']-=1;
				$boolean2=false;
				if($lichchieuphim[$k]['suatchieu']==0){
					
					$khuvucchieu1=$row['id_khuvuc'];
					$idphim=$lichchieuphim[$k]['id'];
					$giochieuphim=$lichchieuphim[$k]['thoiluong'];
					$sql2="insert into lichchieuphim values(?,?,?,'$ngaychieu')";
					$data3=$model->update_lichchieuphim($sql2,$khuvucchieu1,$idphim,$giochieuphim);
					$boolean2="insert into lichchieuphim values($khuvucchieu1,$idphim,$giochieuphim,'$ngaychieu')";
						
					unset($lichchieuphim[$k]);
					//unset($thoiluongarr[$k]);
					$khuvucchieu[$k]['idphim']='';
				}
				
			
		}
			
		$k++;	
	
		
	}
		}
	}
	else{
		$min=min($thoiluongarr);
		$index=array_search($min,$thoiluongarr);
		if($khuvucchieu[$index]["idphim"]==''){
		$a=reset($lichchieuphim);
			
			$l=0;
			$count=0;
			$boolean=false;
			while($l< sizeof($thoiluongarr)){
				if(isset($thoiluongarr[$l])){
					if(isset($khuvucchieu[$l])){
						$idfilm=$khuvucchieu[$l]['idphim'];
						if($idfilm==$a['id']){
							$boolean=true;
							$count++;
							
						}
					}
				}
				$l++;
			}
			$khuvucchieu[$index]["idphim"]=$a['id'];
			if($boolean ==true){
				$thoiluongarr[$index]+=$a['thoiluong']+($count*10)*$count;
			}
			else{
			$thoiluongarr[$index]+=$a['thoiluong'];
			}
			$khuvucchieu[$index]["index"]=$a['index'];
			$lichchieuphim[$a['index']]['suatchieu']-=1;
			
			if($lichchieuphim[$a['index']]['suatchieu']==0){
					
					$khuvucchieu1=$khuvucchieu[$index]["khuvucchieu"];
					$idphim=$lichchieuphim[$a['index']]['id'];
					$giochieuphim=$thoiluongarr[$index];
					$sql2="insert into lichchieuphim values(?,?,?,'$ngaychieu')";
					$data3=$model->update_lichchieuphim($sql2,$khuvucchieu1,$idphim,$giochieuphim);
					
					
					unset($lichchieuphim[$a['index']]);
				    //unset($thoiluongarr[$index]);
				
					$khuvucchieu[$a['index']]['idphim']='';
				break;
					
				}
			
			
		}
		else{
			$a=reset($lichchieuphim);
			
		
					$khuvucchieu1=$khuvucchieu[$index]["khuvucchieu"];
					$idphim=$khuvucchieu[$index]["idphim"];
					$giochieuphim=$thoiluongarr[$index];
					$sql2="insert into lichchieuphim values(?,?,?,'$ngaychieu')";
					$data3=$model->update_lichchieuphim($sql2,$khuvucchieu1,$idphim,$giochieuphim);
			        $khuvucchieu[$index]["idphim"]='';
			   
			$l1=0;
			$count1=0;
			$boolean1=false;
			while($l1< sizeof($thoiluongarr)){
				if(isset($thoiluongarr[$l1])){
					if(isset($khuvucchieu[$l1])){
					
						$idfilm=$khuvucchieu[$l1]['idphim'];
						if($idfilm==$a['id']){
							$boolean1=true;
							$count1++;
							
						}
					}
				}
				$l1++;
			}
			
			if($boolean1=true){
				$thoiluongarr[$index]+=$a['thoiluong']+($count1*10)*$count1;
			}
			else{
			         $thoiluongarr[$index]+=$a['thoiluong'];
			}
			
			          $khuvucchieu[$index]["idphim"]=$a['id'];
			         $khuvucchieu[$index]["index"]=$a['index'];
			      $lichchieuphim[$a['index']]['suatchieu']-=1;
			
			
			//$n=$lichchieuphim[$a['index']];
			
			
			if($lichchieuphim[$a['index']]['suatchieu']==0){
					
					$khuvucchieu2=$khuvucchieu[$index]["khuvucchieu"];
					$idphim1=$lichchieuphim[$a['index']]['id'];
					$giochieuphim1=$thoiluongarr[$index];
				
					$sql3="insert into lichchieuphim values(?,?,?,'$ngaychieu')";
					$data4=$model->update_lichchieuphim($sql3,$khuvucchieu2,$idphim1,$giochieuphim1);
					
					
				
					unset($lichchieuphim[$a['index']]);
					 // unset($thoiluongarr[$index]);
				$khuvucchieu[$a['index']]['idphim']='';
				
					
				}
			
				
		}
		
		
	}
		
}
	$count=0;
	while(!empty($thoiluongarr)){
		$count++;
		foreach(array_keys($thoiluongarr) as $key){
			$khuvucchieu3=$khuvucchieu[$key]["khuvucchieu"];
					$idphim2=$khuvucchieu[$key]["idphim"];
					$giochieuphim2=$thoiluongarr[$key]+15*$count;
					$sql4="insert into lichchieuphim values(?,?,?,'$ngaychieu')";
					$data5=$model->update_lichchieuphim($sql4,$khuvucchieu3,$idphim2,$giochieuphim2);
			
			     unset($thoiluongarr[$key]);
		}
	}
	
	
	/*}*/
		
	/*else {
		$min=min($thoiluong['thoiluong']);
		$index=array_search($min,$thoiluong);
		$khuvucchieu=$row['id_khuvuc'];
		$idphim=$khuvucchieu[$index]['idphim'];
		if($idphim ==''){
			$khuvucchieu[$index]['index']=0;
			$khuvucchieu[$index]['thoiluong']+=$lichchieuphim[0]['thoiluong'];
			$thoiluong[$index]+=$lichchieuphim[0]['thoiluong'];
			$khuvucchieu[$index]['idphim']=$lichchieuphim[0]['id'];
			$lichchieuphim[0]['suatchieu']-=1;
		}
		else{
		$giochieuphim=$khuvucchieu[$index]['thoiluong'];
		$sql2="insert into lichchieuphim values(?,?,?)";
		$data3=$model->update_lichchieuphim($sql2,$khuvucchieu,$idphim,$giochieuphim);
		
		$khuvucchieu[$index]['index']=0;
		$khuvucchieu[$index]['thoiluong']=$min+$lichchieuphim[0]['thoiluong'];
		
		$lichchieuphim[0]['suatchieu']-=1;
		if($lichchieuphim[0]['suatchieu']==0){
					$khuvucchieu=$row['id_khuvuc'];
					$idphim=$lichchieuphim[0]['id'];
					$giochieuphim=$lichchieuphim[0]['thoiluong'];
					$sql2="insert into lichchieuphim values(?,?,?)";
					$data3=$model->update_lichchieuphim($sql2,$khuvucchieu,$idphim,$giochieuphim);
					unset($lichchieuphim[0]);
					
				}
		}
		
	}*/
	
	   
	echo json_encode(array("status"=>true,"data"=>json_encode("true")));

	
}
else if(isset($_POST['rapchieuphim'])){
	$select=$_POST['select'];
	$tenrap=$_POST['tenrap'];
	$diachi=$_POST['diachi'];
	$quan=$_POST['quan'];
	$thanhpho=$_POST['thanhpho'];
	$date=date("Y-m-d",strtotime($_POST['date']));
	$img=$_POST['img'];
	$sql="insert into rapchieuphim values(0,?,?,?,?,?,?,?)";
	$data=$model->update_rapchieuphim($sql,$select,$tenrap,$diachi,$quan,$thanhpho,$date,$img);
	
	echo json_encode(array("status"=>$data));
}
else if(isset($_POST['deletelichchieuphim'])){
	$id_khuvuc=$_POST['id'];
	$id=$_POST['name'];
	$thoiluong=$_POST['thoiluong'];
	$sql="delete from lichchieuphim where id_khuvuc=$id_khuvuc and id=$id and giochieuphim=$thoiluong";
	$data=$model->insert($sql);
	echo json_encode(array("status"=>$data));
}
else if(isset($_POST['deleterap'])){
	$id=$_POST['id'];
	$sql="delete from rapchieuphim_khuvucchieu where idrap=$id";
	$data=$model->insert($sql);
	if($data){
		$sql1="delete from rapchieuphim where idrap=$id";
		$data1=$model->insert($sql1);
		
			echo json_encode(array("status"=>$data1));
		
	}
	else{
		echo json_encode(array("status"=>$data));
	}
	
	
}
else if(isset($_POST['updaterap'])){
	$tenrap=$_POST['name'];
	$diachi=$_POST['diachi'];
	$quan=$_POST['quan'];
	$thanhpho=$_POST['thanhpho'];
	$date=date("Y-m-d",strtotime($_POST['ngaymorap']));
	$img=$_POST['img'];
	$id=$_POST['id'];
	$sql="update rapchieuphim set namerap=?,Addressrap=?,quan=?,thanhpho=?,ngaymorap='$date',image_daidien='$img' where idrap=?";
	$data=$model->update_rapchieuphim1($sql,$tenrap,$diachi,$quan,$thanhpho,$id);
	echo json_encode(array("status"=>$data));
}
else if(isset($_POST['insertphongchieuphim'])){
	$room=$_POST['room'];
	$name=$_POST['namephongchieu'];
	$soluonghangghe=$_POST['soluonghangghe'];
	$max=$_POST['max'];
	$sum=$_POST['sum'];
	$sql="insert into rapchieuphim_khuvucchieu values(0,?,?,?,?,?)";
	$data=$model->update_khuvucchieu($sql,$room,$name,$soluonghangghe,$max,$sum);
	
	
		if($data){
		?>
		
			
			<script>
			alert("Thành công");
</script>
			<?php
		}
		else{
			?>
			<script>
					alert("Đã xảy ra lỗi");
</script>
			<?php
		
		}
	?>
	 <script>
		 window.history.pushState({}, "Hide", "../?thongtinrap=1");
				 location.reload();
</script>
	
	 <?php
		
}
else if(isset($_POST['naptien'])){
	$id=$_POST['id'];
	$sotien=$_POST['sotien'];
	$sql="update member set moofcard=$sotien where id=$id";
	$data=$model->update($sql);
	echo json_encode(array("status"=>true,"data"=>$data));
}
else if(isset($_POST['insertgiave'])){
	$giave=$_POST['giave'];
	$tag=$_POST['tag'];
	$dotuoi=$_POST['dotuoi'];
	$loaive=$_POST['loaive'];
	$sql="insert into giave values(0,?,?,?,?)";
	foreach($tag as $key){
		$data=$model->update_giave($sql,$loaive,$dotuoi,$key,$giave);
	}
	echo json_encode(array("status"=>true,"data"=>true));
}
else if(isset($_POST['deletebapnuoc'])){
	$id=$_POST['id'];
	
	$sql="delete from thanhtoan_bapnuoc where id_bapnuoc=$id";
	
	$data=$model->update($sql);
	$sql1="delete from bapnuoc where id_bapnuoc=$id";
	$data1=$model->update($sql1);
	
	echo json_encode(array("status"=>$data1));
}
else if(isset($_POST['deleteloaive'])){
	$id=$_POST['id'];
	$sql2="select * from giave where id_loai=$id";
	$data10=$model->select($sql2);
	while($row3=$data10->fetch_assoc()){
		$idgiave=$row3['id_giave'];
		$sql11="delete from thanhtoan_nguoi where id_giave=$idgiave";
		$model->insert($sql11);
	}
	//delete phim
	$sql13="select * from listfilm where id_loai=$id";
	$data13=$model->select($sql13);
	while($row13=$data13->fetch_assoc()){
		$id1=$row13['id'];
	$sql14="delete from theloai_listfilm where id=$id1";
	$model->insert($sql14);
	$sql15="delete from dienvien_listfilm where id=$id1";
	$model->insert($sql15);
	$sql16="delete from lichchieuphim where id=$id1";
	$model->insert($sql16);
	
	$sql4="delete from listfilm where id=$id1";
	
	$data6=$model->insert($sql4);
	}
	//
	$sql="delete from giave where id_loai=$id";
	$data=$model->insert($sql);
	$sql1="delete from loaive where id_loai=$id";
	$data1=$model->insert($sql1);
	echo json_encode(array("status"=>$data1));
}
else if(isset($_POST['updateloaive'])){
	$id=$_POST['id'];
	$tenloai=$_POST['tenloai'];
	$sql="update loaive set tenloai=? where id_loai=$id";
	$data=$model->insert_para_once_string($sql,$tenloai);
	echo json_encode(array("status"=>$sql));
}
else if(isset($_POST['updategiave'])){
	$giave=$_POST['giave'];
	$id=$_POST['id'];
	$sql="update giave  set giave=$giave where id_giave=$id";
	$data=$model->insert($sql);
	echo json_encode(array("status"=>$sql));
}
else if(isset($_POST['deletegiave'])){
	$id=$_POST['id'];
	$sql="delete from giave where id_giave=$id";
	$data=$model->insert($sql);
	echo json_encode(array("status"=>$data));
}
else if(isset($_POST['insertcombo'])){
	$giacombo=$_POST['giacombo'];
	$ten=$_POST['ten'];
	$content=$_POST['content'];
	
	$sql="insert into bapnuoc values(0,?,?,?,'combo.jpg')";
	$data=$model->update_combo($sql,$ten,$giacombo,$content);
	echo json_encode(array("status"=>$data));
}
else if(isset($_POST['updatebapnuoc'])){
	$id=$_POST['id'];
	$name=$_POST['name'];
	$gia=$_POST['gia'];
	$content=$_POST['content'];
	$sql="update bapnuoc set namebap=?,gia=?,detailbap=? where id_bapnuoc=?";
	$data=$model->update_bapnuoc($sql,$name,$gia,$content,$id);
	echo json_encode(array("status"=>$data));
}
else if(isset($_POST['theloai'])){
	$name=$_POST['name'];
	$sql="insert into theloaiphim values(0,'$name')";
	$data=$model->insert($sql);
	echo json_encode(array("status"=>$data));
}
else if(isset($_POST['dienvien'])){
	$name=$_POST['name'];
	$sql="insert into dienvien values(0,'$name')";
	$data=$model->insert($sql);
	echo json_encode(array("status"=>$data));
}
else if(isset($_POST['daodien'])){
	$name=$_POST['name'];
	$sql="insert into daodien values(0,'$name')";
	$data=$model->insert($sql);
	echo json_encode(array("status"=>$data));

}
else if(isset($_POST['updateevent'])){
	$image=$_POST['src'];
$content=$_POST['content'];
$name=$_POST['name'];
	$id=$_POST['id'];
	$sql="update event set nameevent='$name',image_event='$image',content_event=$content where id_event=$id";
	$data=$model->insert($sql);
	echo json_encode(array("status"=>$data));
}
else if(isset($_POST['deleteevent'])){
	$id=$_POST['id'];
	$sql="delete from event where id_event=$id";
	$data=$model->insert($sql);
	echo json_encode(array("status"=>$data));
}
else if(isset($_POST['deleteuser'])){
	$id=$_POST['id'];
	$sql="delete from member where id=$id";
	$data=$model->insert($sql);
	echo json_encode(array("status"=>$data));
}
else if(isset($_POST['deletedaodien'])){
	$id=$_POST['id'];
	$sql5="select* from listfilm where daodien=$id";
	$data7=$model->select($sql5);
	while($row=$data7->fetch_assoc()){
		$idfilm=$row['id'];
		$sql6="delete from lichchieuplhim where id=$idfilm";
		$sql7="delete from theloai_listfilm where id=$idfilm";
		$sql8="delete from dienvien_listfilm where id=$idfilm";
		$data7=$model->insert($sql6);
		$data8=$model->insert($sql7);
		$data9=$model->insert($sql8);
	}
	$sql="delete from listfilm where daodien=$id";
	$model->insert($sql);
	$sql1="delete from daodien where id_daodien=$id";
	$data=$model->insert($sql1);
	echo json_encode(array("status"=>$data));
}
else if(isset($_POST['deletedienvien'])){
	$id=$_POST['id'];
	$sql9="delete from dienvien_listfilm where id_dienvien=$id";
	$model->insert($sql9);
	$sql10="delete from dienvien where id_dienvien=$id";
	$data=$model->insert($sql10);
	echo json_encode(array("status"=>$data));
}
else if(isset($_POST['deletetheloai'])){
	$id=$_POST['id'];
	$sql="delete from theloai_listfilm where id_theloai=$id";
	$model->insert($sql);
	
	$sql1="delete from theloaiphim where id_theloai=$id";
	$data=$model->insert($sql1);
	echo json_encode(array("status"=>$data));
}
else if(isset($_POST['unlink'])){
	$id=basename($_POST['id']);
	if(isset($_POST['imgevent'])){
	$a=unlink("../image/image-event/".$id);
	}
	else if(isset($_POST['imgrapchieuphim'])){
		$a=unlink("../image/image-rapchieuphim/".$id);
	}
	else if(isset($_POST['imgphim'])){
		$a=unlink("../image/image-film/".$id);
	}
	else if(isset($_POST['videoinsertphim'])){
		$a=unlink("../video/upload/".$id);
	}
	else if(isset($_POST['loaive'])){
		$a=unlink("../image/image-loaive/".$id);
	}
	else{
		$a=unlink("../image/image-quangcao/".$id);
	}
	echo json_encode(array("status"=>true));
}
else if(isset($_POST['deletekhuvucchieu'])){
	$id=$_POST['deletekhuvucchieu'];
	$sql1="select * from rapchieuphim_khuvucchieu where id_khuvuc=$id";
	$data1=$model->select($sql1);
	while($row=$data1->fetch_assoc()){
		$idkhuvuc=$row['id_khuvuc'];
		$sql2="delete from lichchieuphim where id_khuvuc=$idkhuvuc";
		$model->insert($sql2);
		$sql3="delete from gheso where id_khuvuc=$idkhuvuc";
		$model->insert($sql3);
	}
	$sql="delete from rapchieuphim_khuvucchieu where id_khuvuc=$id";
	$data=$model->insert($sql);
	echo json_encode(array("status"=>$data));
}
else if(isset($_POST['deletecumrap'])){
	$id=$_POST['deletecumrap'];
	$sql="select * from cumrap where idcumrap=$id";
	$data=$model->select($sql);
	$row=$data->fetch_assoc();
	$idcumrap=$row['idcumrap'];
	$sql1="select * from rapchieuphim where idcumrap=$idcumrap";
	$data1=$model->select($sql1);
	while($row1=$data1->fetch_assoc()){
		$idrap=$row1['idrap'];
		$sql2="select * from rapchieuphim_khuvucchieu where idrap=$idrap";
		$data2=$model->select($sql2);
		while($row2=$data2->fetch_assoc()){
			$idkhuvuc=$row2['id_khuvuc'];
			$sql3="delete from lichchieuphim where id_khuvuc=$idkhuvuc";
		   $model->insert($sql3);
			$sql7="delete from gheso where id_khuvuc=$idkhuvuc";
			$model->insert($sql7);
		}
		
		$sql4="delete from rapchieuphim_khuvucchieu where idrap=$idrap";
		$model->insert($sql4);
		
	}
	$sql5="delete from rapchieuphim where idcumrap=$idcumrap";
	$model->insert($sql5);
	$sql6="delete from cumrap where idcumrap=$idcumrap";
	$data5=$model->insert($sql6);
	echo json_encode(array("status"=>$data5));
}
else{
$image=$_POST['src'];
$content=$_POST['content'];
$name=$_POST['name'];
if(isset($_POST['event'])){
$sql="insert into event values(0,'$name','$image',$content)";
$data=$model->insert($sql);
echo json_encode(array("status"=>$data));
}
/*else{
	$sql="insert into listfilm values(0,'$image',$content)";
$data=$model->insert($sql);
echo json_encode(array("status"=>$data));
}*/
}
 
?>
