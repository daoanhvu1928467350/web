<?php
ob_start();
require("model.php");

 class controller{
	 public $model;
	 
	public function __construct(){
		$this->model=new model();
	}
	 public function invoke(){
		 if(isset($_POST['register-member'])){
			 $name=$_POST['name'];
			 $phone=$_POST['phone'];
			 $email=$_POST['email'];
			 $password=$_POST['password'];
			 $member=new member($name,$phone,$email,$password,0);
			 $data=$this->model->register($member);
			if($data==1){
			 ?>
			 <script>
				alert("Đăng ký thành công");
				 window.history.pushState({}, "Hide", "./member.php?login=1");
				 location.reload();
</script>
			 <?php
			}
			 else {
				 ?>
			 				<script>
								
								alert("Đã xảy ra lỗi trong quá trình đăng ký");
								 window.history.pushState({}, "Hide", "./member.php?register=1");
								location.reload();
						</script>
				 				
<?php
			 }
			 
		 }
		 else if(isset($_POST['login-confirm'])){
			 $name=$_POST['username'];
			 $password=$_POST['password-login'];
			 $data=$this->model->login($name,$password);
			if(!isset($data)){
				
				?>
				
				<script>
					 window.history.pushState({}, "Hide", "./member.php?login=1&error=1");
				 location.reload();
					
</script>
				<?php
			}
			 else{
				
				 $_SESSION['user']=$data;
				//header("Location:./");
				  if(isset($_POST['infomation-thanhvien'])){
					  ?>
<script> 
	window.history.pushState({}, "Hide", "./?account-user=1");
					  location.reload();
</script>
					 
<?php
				 }
				 else{
				 ?>
				 <script>
					  window.history.pushState({}, "Hide","<?=$_SERVER['HTTP_REFERER']?>");
					 location.reload();
</script>
				 <?PHP
				 }
				 
			 }
			 
		 }
		 else if(isset($_POST['update-member'])){
			 $name=$_POST['name'];
			 $phone=$_POST['phone'];
			 $email=$_POST['email'];
			 $password=$_POST['password'];
			 $id=$_POST['id'];
			 $member=new member($name,$phone,$email,$password,0);
			 $data=$this->model->update_user($member,$id);
			echo $data;
			 if($data==true){
				 ?>
				 <script>
					 alert('Thành công!');
				window.history.pushState({}, "Hide", "./?account-user=1");
				 location.reload();
                 </script>
				
				 <?php
			 }
			 else{
				 alert('Đã xảy ra lỗi');
			 }
		 }
		 else if(isset($_GET['infomation-event'])){
			 
			 ?>
			 <script>
				 $("#main").load("infomation-event.php","event_id=<?=$_GET['event_id']?>");
</script>
			 <?php
		 }
		 else if(isset($_GET['account-user'])){
			 if(isset($_GET['tongtienve'])){
				?>
				  <script>
		   $("#main").removeClass("container");
		   $("#main").addClass("container-fluid");
		   $(".breadcrumb li").remove();
		   $(".breadcrumb").append(" <li class='breadcrumb-item'><a href='./'>Home</a></li><li class='breadcrumb-item active' aria-current='page'>Member</li>");
		   $("#pr").hide();
	        $("#main").load("account-user.php","account-user=1&&tongtienve=1&&thanhtoan=<?=$_GET['thanhtoan']?>");
       </script>
				<?php
			 }
			 else if(isset($_GET['tongtienbap'])){
				 ?>
				  <script>
		   $("#main").removeClass("container");
		   $("#main").addClass("container-fluid");
		   $(".breadcrumb li").remove();
		   $(".breadcrumb").append(" <li class='breadcrumb-item'><a href='./'>Home</a></li><li class='breadcrumb-item active' aria-current='page'>Member</li>");
		   $("#pr").hide();
	        $("#main").load("account-user.php","account-user=1&&tongtienbap=1&&bap=<?=$_GET['bap']?>");
       </script>
				 <?php
			 }else{
				  ?>
       <script>
		   $("#main").removeClass("container");
		   $("#main").addClass("container-fluid");
		   $(".breadcrumb li").remove();
		   $(".breadcrumb").append(" <li class='breadcrumb-item'><a href='./'>Home</a></li><li class='breadcrumb-item active' aria-current='page'>Member</li>");
		   $("#pr").hide();
	        $("#main").load("account-user.php");
       </script>
<?php
			 }
			
		 }
		 else if(isset($_GET['thongtinchitietphim'])){
			 ?>
			 <script>
				 var id=<?php echo $_GET['id']?>;
				 $(".breadcrumb li").remove();
				 $(".breadcrumb").append(" <li class='breadcrumb-item'><a href='./'><i class='fas fa-home'></i>Home /</a></li><li><a href='./?phimdangchieu=1'>Thông tin phim đang chiếu /</a></li><li class='breadcrumb-item active' aria-current='page'> Thông tin chi tiết phim /</li>");
				 $("#container-menu").hide();
				 $("#main").removeClass("container");
				 $("#main").addClass("container-fluid");
				  $("#main").load("chitiet-thongtin-phim.php","thongtinchitietphim=1&&id="+id);
</script>
			
			 <?php
		 }
		else if(isset($_GET['phimdangchieu'])){
			$page=$_GET['page'];
			?>
			<script>
				$("#main").load("thongtin-phimdangchieu.php","page=<?=$page?>");
				$("#pr").hide();
				$("#header-menu").hide();
				 $(".breadcrumb li").remove();
				 $(".breadcrumb").append(" <li class='breadcrumb-item'><a href='./'> <i class='fas fa-home'></i>Home</a></li><li class='breadcrumb-item active' aria-current='page'>Thông tin phim đang chiếu/</li>");
           </script>
			<?php
		}
		 else if(isset($_GET['phimsapchieu'])){
			 $page=$_GET['page'];
			 ?>
			 <script>
				$("#main").load("phimsapchieu.php",'page=<?=$page?>');
				$("#pr").hide();
				$("#header-menu").hide();
				 $(".breadcrumb li").remove();
				 $(".breadcrumb").append(" <li class='breadcrumb-item'><a href='./'> <i class='fas fa-home'></i>Home</a></li><li class='breadcrumb-item active' aria-current='page'>Thông tin phim sắp chiếu/</li>");
           </script>
			 <?php
		 }
		 else if(isset($_GET['datve'])){
			 
			 ?>
			 <script>
				 $("#container-menu").hide();
				 $("#main").removeClass("container");
				 $("#main").addClass("container-fluid");
				 $("#main").load("datve.php","rp=<?=$_GET['rp']?>&&suatchieu=<?=$_GET['suatchieu']?>&&idphim=<?=$_GET['idphim']?>&&idkhuvuc=<?=$_GET['idkhuvuc']?>&&loaive=<?=$_GET['loaive']?>&&giochieuphim=<?=$_GET['giochieuphim']?>&&giochieuphim2=<?=$_GET['giochieuphim2']?>");
</script>
			 <?php
			 
		 }
		 else if(isset($_POST['chongoi'])){
			 $idphim=$_POST['tenphim'];
			 $idkhuvuc=$_POST['khuvuc'];
			 $idrap=$_POST['rapchieuphim'];
			 $suatchieu=$_POST['suatchieu'];
			 $tong=$_POST['tong'];
			 $soluongve=$_POST['soluongve'];
			 $giaarr=$_POST['giaarr'];
			 $soluongcombo=$_POST['soluongcombo'];
			 $giacomboarr=$_POST['giacomboarr'];
			 $ngaychieuphim=$_POST['ngaychieuphim'];
			 $giochieuphim=$_POST['giochieuphim'];
			  ?>
			 <script>
				
				 $("#main").removeClass("container");
				 $("#main").addClass("container-fluid");
				 $("#main").load("datcho.php",{idphim:'<?=$idphim?>',idkhuvuc:'<?=$idkhuvuc?>',idrap:'<?=$idrap?>',suatchieu:'<?=$suatchieu?>',soluongve:'<?php echo $soluongve?>',tong:'<?php echo $tong?>',giaarr:'<?php echo $giaarr?>',soluongcombo:'<?=$soluongcombo?>',giacomboarr:'<?=$giacomboarr?>',ngaychieuphim:'<?=$ngaychieuphim?>',giochieuphim:'<?=$giochieuphim?>'});
</script>
			 <?php
		 }
		  else if(isset($_GET['all-rap'])){
			  if(isset($_GET['id-cumrap'])){
				  if(isset($_GET['id-rapchieuphim']))
				  {
					?>
					 	 <script>
				 $("#main").load("all-rap.php","all-rap=1&&id-cumrap="+<?=$_GET['id-cumrap']?>+"&&id-rapchieuphim="+<?=$_GET['id-rapchieuphim']?>);
</script>			  
					<?php  
				  }else{
				  ?>
				  	 <script>
				 $("#main").load("all-rap.php","all-rap=1&&id-cumrap="+<?=$_GET['id-cumrap']?>);
</script>			  
			  <?php
				  }
			  }else {
			 ?>
			 <script>
				 $("#main").load("all-rap.php");
</script>
			 <?php
			  }
		 }
		 else if(isset($_GET['pr-detail'])){
			 ?>
			 <script>
				 
				 $("#main").load("pr-detail.php","pr-detail=1&&id_pr=<?=$_GET['id_pr']?>");
</script>
			 <?php
		 }
		 else if(isset($_GET['will-rap'])){
			 if(isset($_GET['id-rap'])){
				 ?>
				  <script>
				 $("#main").load("rapsapmo.php","will-rap=1&&id-rap=<?=$_GET['id-rap']?>");
</script>
				 <?php
			 }
			 else{
			 ?>
			 <script>
				 $("#main").load("rapsapmo.php");
</script>
			 <?php
			 }
		 }
		 else if(isset($_POST['thanhtoan'])){
			 $idfilm=$_POST['idfilm'];
			 $khuvuc=$_POST['khuvuc'];
			 $rap=$_POST['rap'];
			 $tong=$_POST['tong'];
			 $gheso=$_POST['gheso'];
			 $soluongve=$_POST['soluongve'];
			 $suatchieu=$_POST['suatchieu'];
			 $giave=0;
			 $soluongvearr=$_POST['soluongvearr'];
			 $giaarr=$_POST['giaarr'];
			 $soluongcombo=$_POST['soluongcombo'];
			 $giacomboarr=$_POST['giacomboarr'];
			 $ngaychieuphim=$_POST['ngaychieuphim'];
			 $giochieuphim=$_POST['giochieuphim'];
			 ?>
			 <script>
				 $("#main").removeClass("container");
				 $("#main").addClass("container-fluid");
				 $("#main").load("thanhtoan.php",{idfilm:'<?=$idfilm?>',khuvuc:'<?=$khuvuc?>',rap:'<?=$rap?>',tong:'<?=$tong?>',gheso:'<?=$gheso?>',soluongve:'<?=$soluongve?>',suatchieu:'<?=$suatchieu?>',giave:'<?=$giave?>',soluongvearr:'<?=$soluongvearr?>',giaarr:'<?=$giaarr?>',soluongcombo:'<?=$soluongcombo?>',giacomboarr:'<?=$giacomboarr?>',ngaychieuphim:'<?=$ngaychieuphim?>',giochieuphim:'<?=$giochieuphim?>'});
</script>
			 <?php
		 }
		 else if(isset($_GET['thanhtoan-endpoint'])){
			
			 
			 $user=$_SESSION['user'];
			 $idfilm=$_POST['idfilm'];
			 $idrap=$_POST['idrap'];
			 $idkhuvuc=$_POST['idkhuvuc'];
			 $suatchieu=$_POST['suatchieu'];
			 $soluongve=$_POST['soluongve'];
			 $iduser=$user['id'];
			 $tongtienve=(int)$_POST['tongtienve']*1000;
			   $sql13="select *from thequatang_member  where id=$iduser and action=0 order by id_capdo desc";
			
	   $data13=$this->model->select($sql13);
	  
			 if($data13->num_rows>0){
				 $thequatang=$data13->fetch_assoc();
				 $id=$thequatang['id'];
				 $id_capdo=$thequatang['id_capdo'];
				 $sql14="select * from capdo where id_capdo=$id_capdo limit 1";
				 $data14=$this->model->select($sql14);
				 $row14=$data14->fetch_assoc();
				 $phantram=$row14['phantram'];
			    if($phantram>0){
				 ?>
				 <script>
					
				 var value=confirm("Bạn có thẻ quà tặng được giảm <?=$phantram?> tổng tiền vé,bạn có muốn sử dụng nó không?");
					 if(value){
						 <?php
				       $sql15="update  thequatang_member set action=1 where id=$id and id_capdo=$id_capdo";
				 $this->model->insert($sql15);
				 $tongtienve=$tongtienve-(($tongtienve*$phantram)/100);
				 ?>
						
					 }
                 </script>
				 <?php
				}
			 }
			 $tongtienbap=$_POST['tongtienbap'];
			 if($tongtienbap>0){
				 
				
				$diemtichluy=(int)$user['diemtichluy']*1000;
				
				 if($diemtichluy>=$tongtienbap){
					 ?>
					 <script>
						 var value1=confirm("Bạn có điểm tích lũy có thể đổi thành giá trị của bắp nước,bạn có muốn đổi không");
						 if(value1){
							 <?php
					          $diemtichluy=floor(($diemtichluy-$tongtienbap)/1000);
					       $user['diemtichluy']=$diemtichluy;
					 $_SESSION['user']=$user;
				
					 $sql17="update member set diemtichluy=$diemtichluy where id=$iduser";
					 $this->model->insert($sql17);
					 $tongtienbap=0;
					 ?>
						 }
						 
</script>
					 <?php
				 }
				
			 }
			 $tongtatca=$tongtienbap+$tongtienve;
			 $giochieuphim=$_POST['giochieuphim'];
			 $name=$user['name'];
			 $phone=$user['email'];
			 
			 $ngaychieuphim=$_POST['ngaychieuphim'];
			 $gheso=explode(",",$_POST['soghe']);
			$sodu=$user['numofcard']-$tongtatca;
			 
			 if($sodu>=0){
			 $sql1="select * from listfilm where id=$idfilm limit 1";
			 $data=$this->model->select($sql1);
			 $row=$data->fetch_assoc();
			 $namefilm=$row['namefilm'];
			 $thoiluongfilm=$row['thoiluong'];
			$soluongvearr=json_decode($_POST['soluongvearr']);
			 $soluongcombo=json_decode($_POST['soluongcombo']);
				 $tongtienbap=$tongtienbap;
			$sql="insert into thanhtoan values(0,'$name','$phone',$iduser,'$namefilm',$idfilm,'$idrap','$idkhuvuc',$thoiluongfilm,$soluongve,$tongtienve,$tongtienbap/1,$tongtatca,$giochieuphim,'$ngaychieuphim',now())";
			
			 $data2=$this->model->insert($sql);
			
			 if($data2==1){
				
				 $sql2="select * from thanhtoan order by id_thanhtoan desc limit 1";
				 $data2=$this->model->select($sql2);
				 $row2=$data2->fetch_assoc();
				 $date=getdate(strtotime($ngaychieuphim));
				$id_thanhtoan=$row2['id_thanhtoan'];
				 
				 $date1=0;
				
				 switch($date['weekday']){
					 case 'Monday':
						 $date1=2; break;
					 case 'Tuesday':$date1=3; break;
					 case 'Wednesday':$date1=4; break;
					 case 'Thursday':$date1=5; break;
					 case 'Friday':$date1=6; break;
					 case 'Saturday':$date1=7; break;
					 case 'Sunday':$date1=8; break;
				
				 }
				 $sql3="select * from giave where ngay=$date1 ";
			     $data3=$this->model->select($sql3);
				 $i=0;
				 if($data3->num_rows>0){
					 while($row3=$data3->fetch_assoc()){
						 $id_giave=$row3['id_giave'];
						 if($soluongvearr[$i]==0){
							 continue;
							 
						 }
						 $sql4="insert into thanhtoan_nguoi values($id_giave,$id_thanhtoan,$soluongvearr[$i])";
						 //echo $sql4;
						$data4=$this->model->insert($sql4);
						 $i++;
					 }
				 }
				 $sql5="select * from bapnuoc ";
					 $data5=$this->model->select($sql5);
				  $i=0;
				 if($data5->num_rows>0){
					 while($row5=$data5->fetch_assoc()){
						 $id_bapnuoc=$row5['id_bapnuoc'];
						 if($soluongcombo[$i]==0 || empty($soluongcombo[$i])){
							 $i++;
							 continue;
							 
						 }
						 $sql6="insert into thanhtoan_bapnuoc values($id_thanhtoan, $id_bapnuoc,$soluongcombo[$i])";
						 $data6=$this->model->insert($sql6);
						 
						 $i++;
					 }
				 }
				 foreach($gheso as $key){
					 	 $sql7="insert into gheso values(0,$idkhuvuc,'$key',$id_thanhtoan)";
					 
					 $data7=$this->model->insert($sql7);
				 }
			$sql8="update member set moofcard=$sodu where id=$iduser ";
				 $data8=$this->model->insert($sql8);
				 $data9=$this->model->login($user['password'],$user['phone']);
				 $_SESSION['user']=$data9;
				 /*echo json_encode($data9);*/
				 $sql10="select * from member where id=$iduser limit 1";
				 $data=$this->model->insert($sql10);
				 $row4=$data->fetch_assoc();
				 $diemtichluy=$row4['diemtichluy']+$soluongve;
				 $tongchitieu=$row4['tongchitieu']+$tongtatca;
				 $sql9="update member set tongchitieu=$tongchitieu,diemtichluy=$diemtichluy where id=$iduser";
				 $this->model->insert($sql9);
				 $a=$tongchitieu<=5000000?0:($tongchitieu<=10000000?1:($tongchitieu<=20000000)?2:($tongchitieu<=40000000)?3:($tongchitieu<=80000000)?4:($tongchitieu<=160000000)?5:($tongchitieu<=1000000000)?6:7
				 );
				 $sql11="select * from capdo limit $a,1";
				 $data11=$this->model->insert($sql11);
				 $capdo=$data11->fetch_assoc();
				 $idcapdo=$capdo['id_capdo'];
				 $sql12="insert into thequatang_member values($iduser,$idcapdo,0)";
				
				 $this->model->insert($sql12);
			 }
			?>
			
			<script>
				alert("Thanh toán thành công");
				window.history.pushState({}, "Hide", "./");
				 location.reload();
</script>
			<?php
			 }
			 else{
				?>
				<script>
					$(".img-error-thanhtoan").show();
					$("#night2").show();
</script>
				<?php
			 }
		 }
		 else if(isset($_GET['search2'])){
			 $s=$_GET['search2'];
			 $page=$_GET['page'];
			 ?>
			 <script>
				 $("#main").load("search.php",{s:'<?=$s?>',page:'<?=$page?>'});
</script>
			 <?php
		 }
		 else{
			
					 ?>
					 <script>
						 $(".breadcrumb li").remove();
		   $(".breadcrumb").append(" <li class='breadcrumb-item active'><i class='fas fa-home'></i> Home/</li>");
						 $("#container-menu").show();
						 $("#slide-tintuc").load("pr.php");
						 
						$("#main").load("mid.php");
							
								
							
						
						 
						
</script>
					 <?php
				 
			 
			
			
			 
		 }
		 
		 
	 }
}
?>