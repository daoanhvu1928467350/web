<?php
ob_start();
require("model.php");

 class controller{
	 public $model;
	 
	public function __construct(){
		$this->model=new model();
	}
	 public function invoke(){
		if(isset($_GET['about-web'])){
	
			?>
         <script>
			 $("#main").load("about-component.php");
</script>
          <?php
           
		}
		 else if(isset($_GET['themmoiphim'])){
			 if(isset($_GET['src'])){
				 ?>
				  <script>
					  	 var a=<?php echo $_GET['src'] ?>;
				$(".component-menu-horizontal").removeClass("active");
		        $("#listfilm-component").addClass("active");
				 $("#category-film").show();
				 $("#themphimmoi").css("color","#AEAFAE");
					  
				 $("#main").load("insert-film.php","src="+a);
</script>
				 <?php
			 }
			
			 else if(isset($_GET['src1'])){
				?>
				<script>
					 var a=<?php echo $_GET['src1'] ?>;
				$(".component-menu-horizontal").removeClass("active");
		        $("#listfilm-component").addClass("active");
				 $("#category-film").show();
				 $("#themphimmoi").css("color","#AEAFAE");
					  
				 $("#main").load("insert-film.php","src1="+a);
</script>
				<?php 
			 } 
			 else{
			 ?>
			 <script>
				$(".component-menu-horizontal").removeClass("active");
		        $("#listfilm-component").addClass("active");
				 $("#category-film").show();
				 $("#themphimmoi").css("color","#AEAFAE");
				 $("#main").load("insert-film.php");
</script>
			 <?php
			 }
		 }
		  else if(isset($_GET['edit-film'])){
				 ?>
				   <script>
					  	 var a=<?php echo $_GET['id'] ?>;
				$(".component-menu-horizontal").removeClass("active");
		        $("#listfilm-component").addClass("active");
				 $("#category-film").show();
				 $("#themphimmoi").css("color","#AEAFAE");
					  
				 $("#main").load("insert-film.php","edit-film=1&&id="+a);
</script>
				 <?php
			 }
		 else if(isset($_GET['dddv'])){
			 $page=$_GET['page'];
			 ?>
			 <script>
				 $(".component-menu-horizontal").removeClass("active");
		        $("#listfilm-component").addClass("active");
				 $("#category-film").show();
				 $("#daodiendienvien").css("color","#AEAFAE");
				 $("#main").load("listdaodiendienvien.php","page=<?=$page?>");
             </script>
			 <?php
		 }
		 else if(isset($_GET['listtheloai'])){
			 $page=$_GET['page'];
			 	 ?>
			 <script>
				 $(".component-menu-horizontal").removeClass("active");
		        $("#listfilm-component").addClass("active");
				 $("#category-film").show();
				 $("#danhsachtheloai").css("color","#AEAFAE");
				 $("#main").load("listtheloai.php","page=<?=$page?>");
             </script>
			 <?php
		 }
		 else if(isset($_GET['dv'])){
			 $page=$_GET['page'];
			 ?>
			  <script>
				 $(".component-menu-horizontal").removeClass("active");
		        $("#listfilm-component").addClass("active");
				 $("#category-film").show();
				 $("#danhsachdienvien").css("color","#AEAFAE");
				 $("#main").load("dienvien.php","page=<?=$page?>");
             </script>
			 <?php
		 }
		 else if(isset($_GET['event'])){
			 ?>
			 <script>
				 $(".component-menu-horizontal").removeClass("active");
		        $("#event-component").addClass("active");
				 $("#main").load("event.php");
             </script>
			 <?php
		 }
		 else if(isset($_GET['insertevent'])){
			 if(isset($_GET['src'])){
				  
			 ?>
			 <script>
				 var a=<?php echo $_GET['src'] ?>;
				
              
				  $(".component-menu-horizontal").removeClass("active");
		        $("#event-component").addClass("active");
				 $("#event-film").show();
				 $("#insertevent").css("color","#AEAFAE");
				 $("#main").load("event.php","src="+a);
				
	
				
</script>
			 <?php
			 }
			 else{
			 ?>
			 <script>
				 $(".component-menu-horizontal").removeClass("active");
		        $("#event-component").addClass("active");
				 $("#event-film").show();
				 $("#insertevent").css("color","#AEAFAE");
				 $("#main").load("event.php");
            </script>
			 <?php
			 }
		 }else if(isset($_GET['danhsachsukien'])){
			 ?>
			 <script>
				 $("#main").load("listevent.php");
				  $(".component-menu-horizontal").removeClass("active");
		        $("#event-component").addClass("active");
				 $("#event-film").show();
				 $("#listevent").css("color","#AEAFAE");
				 
            </script>
			 <?php
		 }
		 
		 else if(isset($_GET['element-sukien'])){
			 $id=$_GET['id'];
			 ?>
			 <script>
				  $("#main").load("element-sukien.php",{id:'<?=$id?>'});
				  $(".component-menu-horizontal").removeClass("active");
		        $("#event-component").addClass("active");
				 $("#event-film").show();
				 $("#listevent").css("color","#AEAFAE");
</script>
			 <?php
		 }
		 else if(isset($_GET['thongtinrap'])){
			 if(isset($_GET['src'])){
				 ?>
				  <script>
					  var a="'"+<?php echo $_GET['src']?>+"'";
				 $("#main").load("insert-cumrap.php","src="+a);
				 $(".component-menu-horizontal").removeClass("active");
		        $("#rapchieuphim-component").addClass("active");
				 $("#list-rapchieuphim").show();
				 $("#themthongtinrap").css("color","#AEAFAE");

</script>
				 <?php
			 }
			 else{
			 ?>
			 <script>
				 $("#main").load("insert-cumrap.php");
				 $(".component-menu-horizontal").removeClass("active");
		        $("#rapchieuphim-component").addClass("active");
				 $("#list-rapchieuphim").show();
				 $("#themthongtinrap").css("color","#AEAFAE");

</script>
			 <?php
			 }
		 }
		 else if(isset($_GET["insert-rapchieuphim"])){
			 
			 if(isset($_GET['src'])){
				 ?>
				  <script>
					  var a="'"+<?php echo $_GET['src']?>+"'";
               $("#main").load("insert-rapchieuphim.php","src="+a);
				 $(".component-menu-horizontal").removeClass("active");
		        $("#rapchieuphim-component").addClass("active");
				 $("#list-rapchieuphim").show();
				 $("#themrapchieuphim").css("color","#AEAFAE");
           </script>
				 <?php
			 }
			 else{
			 ?>
			 <script>
               $("#main").load("insert-rapchieuphim.php");
				 $(".component-menu-horizontal").removeClass("active");
		        $("#rapchieuphim-component").addClass("active");
				 $("#list-rapchieuphim").show();
				 $("#themrapchieuphim").css("color","#AEAFAE");
           </script>
			 <?php
			 }
		 }
		 else if(isset($_GET['edit-rap'])){
			$id=$_GET['id'];
			 ?>
			 <script>
               $("#main").load("edit-rap.php",{id:<?=$id?>});
				 $(".component-menu-horizontal").removeClass("active");
		        $("#rapchieuphim-component").addClass("active");
				 $("#list-rapchieuphim").show();
				 $("#listrapchieuphim").css("color","#AEAFAE");
           </script>
			 <?php
		 }
		 else if(isset($_GET["insert-quangcao"])){
			 if(isset($_GET["src"])){
				 ?>
				  <script>
					 
					  var a=<?php echo $_GET["src"]?>;
					  
               $("#main").load("insert-quangcao.php","insert-quangcao=1&&src="+"'"+a+"'");
				 $(".component-menu-horizontal").removeClass("active");
		        $("#promotional-component").addClass("active");
				 $("#list-promotional").show();
				 $("#insertquangcao").css("color","#AEAFAE");
           </script>
				 <?php
			 }else{
			 ?>
			  <script>
				   
               $("#main").load("insert-quangcao.php");
				 $(".component-menu-horizontal").removeClass("active");
		        $("#promotional-component").addClass("active");
				 $("#list-promotional").show();
				 $("#insertquangcao").css("color","#AEAFAE");
           </script>
			 <?php
			 }
		 }
		 else if(isset($_GET['updatequangcao'])){
			 $id=$_GET['id'];
			  ?>
			  <script>
				   
               $("#main").load("pr-change.php",{id:<?=$id?>});
				 $(".component-menu-horizontal").removeClass("active");
		        $("#promotional-component").addClass("active");
				 $("#list-promotional").show();
				 $("#listquangcao").css("color","#AEAFAE");
           </script>
			 <?php
		 }
		 else if(isset($_GET['listquangcao'])){
			 
			 ?>
			  <script>
				   
               $("#main").load("list-pr.php");
				 $(".component-menu-horizontal").removeClass("active");
		        $("#promotional-component").addClass("active");
				 $("#list-promotional").show();
				 $("#listquangcao").css("color","#AEAFAE");
           </script>
			 <?php
		 }
		 else if(isset($_POST["insert-data-cumrap"])){
			 $tencumrap=$_POST['tencumrap'];
			 $sql="insert into cumrap values(0,'$tencumrap')";
			$data =$this->model->insert($sql);
			 if($data==1){
				 ?>
				 <script>
					  window.history.pushState({}, "Hide", "./?thongtinrap=1");
				 location.reload();
</script>
				
				 <?php
			 }
			 else{
				 ?>
				 <script>
					 alert("Thêm dữ liệu thất bại");
					 window.history.pushState({}, "Hide", "./?thongtinrap=1");
				 location.reload();
					 
</script>
				 <?php
			 }
		 }
		 else if(isset($_GET['changeinfo-admin'])){
			 ?>
			 <script>
				 $("#main").load("changeinfo.php");
</script>
			 
			 <?php
		 }
		 else if(isset($_POST['changeinfo-data-admin'])){
			 $sql="update admin set username=?,password=?";
			 $taikhoan=$_POST['taikhoan'];
			 $matkhau=$_POST['password'];
			 $data=$this->model->update_admin($sql,$taikhoan,$matkhau);
			 if($data){
				 ?>
				 
				 <script>
					 alert("Cập nhật thành công");
					  window.history.pushState({}, "Hide", "./?changeinfo-admin=1");
				 location.reload();
					 
</script>
				 <?php
			 }
		 }
		  else if(isset($_GET['insert-phongchieuphim'])){
			 ?>
			 <script>
               $("#main").load("insert-phongchieuphim.php");
				 $(".component-menu-horizontal").removeClass("active");
		        $("#rapchieuphim-component").addClass("active");
				 $("#list-rapchieuphim").show();
				 $("#themphongchieuphim").css("color","#AEAFAE");
           </script>
			 <?php 
		  }
		 else if(isset($_GET['insert-showtimes'])){
			
			 ?>
			 <script>
				 $("#main").load("insert-showtimes.php");
				  $(".component-menu-horizontal").removeClass("active");
		        $("#rapchieuphim-component").addClass("active");
				 $("#list-calendar").show();
				 $("#insert-calendar").css("color","#AEAFAE");
</script>
			 <?php
		 }
		 else if(isset($_GET['listcalendar1'])){
			 ?>
			 	 <script>
				 $("#main").load("list-calendar.php");
				  $(".component-menu-horizontal").removeClass("active");
		        $("#rapchieuphim-component").addClass("active");
				 $("#list-calendar").show();
				 $("#list-calendar1").css("color","#AEAFAE");
</script>
			 <?php
		 }
		 else if(isset($_GET['continue-lichchieuphim'])){
			 if(isset($_POST['selectthoiluong'])){
				 echo json_encode(array("status"=>true,"data"=>"xin chao"));
				
			 }
			 else{
			 $ngaychieu=$_GET['ngaychieu'];
			 $sophim=$_GET['sophim'];
			 $rp=$_GET['rp'];
			 ?>
			 	 <script>
					 
				 $("#main").load("datlich-chieuphim.php",{rp:'<?=$rp?>',ngaychieu:'<?=$ngaychieu?>',sophim:'<?=$sophim?>'});
				  $(".component-menu-horizontal").removeClass("active");
		        $("#rapchieuphim-component").addClass("active");
				 $("#list-calendar").show();
				 $("#insert-calendar").css("color","#AEAFAE");
</script>
			 <?php
			 }
		 }
		 else if(isset($_GET['naptien-user'])){
			 $page=$_GET['page'];
			 ?>
			  <script>
					 
				 $("#main").load("naptien.php","page=<?=$page?>");
				  $(".component-menu-horizontal").removeClass("active");
		        $("#user-component").addClass("active");
				 $("#list-user").show();
				 $("#naptien").css("color","#AEAFAE");
</script>
			 <?php
		 }
		 else if(isset($_GET['history-user-element'])){
			  ?>
			  <script>
					 
				 $("#main").load("history-user.php",);
				  $(".component-menu-horizontal").removeClass("active");
		        $("#user-component").addClass("active");
				 $("#list-user").show();
				 $("#history-user-element").css("color","#AEAFAE");
</script>
			 <?php
		 }
		 else if(isset($_GET['insert-kind-ticket'])){
			 ?>
			  <script>
					 
				 $("#main").load("insert-kind-ticket.php",);
				  $(".component-menu-horizontal").removeClass("active");
		        $("#ticket-component").addClass("active");
				 $("#list-ticket").show();
				 $("#insert-kind-ticket").css("color","#AEAFAE");
</script>
			 <?php
		 }
		 else if(isset($_GET['themthongtinve'])){
			 if(isset($_GET['src2'])){
				
				 
				 ?>
				 <script>
					var a= <?=$_GET['src2']?>;
				 $("#main").load("themthongtinve.php","src2="+a);
				  $(".component-menu-horizontal").removeClass("active");
		        $("#ticket-component").addClass("active");
				 $("#list-ticket").show();
				 $("#themthongtinve").css("color","#AEAFAE");
</script>
				 <?php
			 }
			 else{
			 ?>
			  <script>
					 
				 $("#main").load("themthongtinve.php",);
				  $(".component-menu-horizontal").removeClass("active");
		        $("#ticket-component").addClass("active");
				 $("#list-ticket").show();
				 $("#themthongtinve").css("color","#AEAFAE");
</script>
			 <?php
			 }
		 }
		  else if(isset($_GET['danhsachve'])){
			  ?>
			  <script>
					 
				 $("#main").load("danhsachve.php",);
				  $(".component-menu-horizontal").removeClass("active");
		        $("#ticket-component").addClass("active");
				 $("#list-ticket").show();
				 $("#danhsachve").css("color","#AEAFAE");
</script>
			 <?php
		 }
		 else if(isset($_GET['loaibapnuoc'])){
			 ?>
			 	  <script>
					 
				 $("#main").load("loaibapnuoc.php");
				  $(".component-menu-horizontal").removeClass("active");
		        $("#ticket-component").addClass("active");
				 $("#list-ticket").show();
				 $("#loaibapnuoc").css("color","#AEAFAE");
</script>
			 <?php
		 }
		 else if(isset($_GET['update-bapnuoc'])){
			 
			 $id=$_GET['id'];
			 ?>
			  <script>
					
				 $("#main").load("update-bapnuoc.php",{id:'<?=$id?>'});
				  $(".component-menu-horizontal").removeClass("active");
		        $("#ticket-component").addClass("active");
				 $("#list-ticket").show();
				 $("#loaibapnuoc").css("color","#AEAFAE");
</script>
			 <?php
		 }
		 else if(isset($_GET['insert-ticket'])){
			 ?>
			 <script>
					 
				 $("#main").load("insert-ticket.php",);
				  $(".component-menu-horizontal").removeClass("active");
		        $("#ticket-component").addClass("active");
				 $("#list-ticket").show();
				 $("#insert-ticket").css("color","#AEAFAE"); 
</script>
			 <?php
		 }
		 else if(isset($_POST['themloaive'])){
			 $ve=$_POST['loaive'];
			 $image=$_POST['img-loaive']; 
			 
			 $sql="insert into loaive values(0,?,'$image')";
			 $data=$this->model->insert_para_once_string($sql,$ve);
			 if($data==true){
				 ?>
				 <script>
					  alert("Thành công");
					  /*window.history.pushState({}, "Hide", "./?insert-kind-ticket=1");*/
					 window.history.pushState({}, "Hide", "./?themthongtinve=1");
				 location.reload();
					
					 
</script>
				 <?php
			 }
			 else{
				 echo  "<script>alert('Thất bại');</script>";
				 ?>
				 <script>
					  window.history.pushState({}, "Hide", "./?themthongtinve=1");
				 location.reload();
</script>
				 <?php
				 
			 }
		 }
		 else if(isset($_GET['themgoicombo'])){
			?>
			<script>
				 $("#main").load("insert-combo.php");
				  $(".component-menu-horizontal").removeClass("active");
		        $("#ticket-component").addClass("active");
				 $("#list-ticket").show();
				 $("#themgoicombo").css("color","#AEAFAE"); 
</script>
			<?php
		 }
		 else if(isset($_GET['phimdangchieu'])){
			 ?>
			 <script>
				  $("#main").load("listfilm.php","phimdangchieu=1");
				  $(".component-menu-horizontal").removeClass("active");
		        $("#listfilm-component").addClass("active");
				 $("#category-film").show();
				 $("#phimdangchieu").css("color","#AEAFAE"); 
</script>
			 <?php
		 }
		 else if(isset($_GET['muclienquan'])){
			 if(isset($_GET['error-upload'])){
				 ?>
				 <script>
					  $("#main").load("relationfilm.php","error-upload=1");
				  $(".component-menu-horizontal").removeClass("active");
		        $("#listfilm-component").addClass("active");
				 $("#category-film").show();
				 $("#muclienquan").css("color","#AEAFAE"); 
</script>
				 <?php
			 }
			 else{
			 ?>
			  <script>
				  $("#main").load("relationfilm.php");
				  $(".component-menu-horizontal").removeClass("active");
		        $("#listfilm-component").addClass("active");
				 $("#category-film").show();
				 $("#muclienquan").css("color","#AEAFAE"); 
</script>
			 <?php
			 }
		 }
		 else if(isset($_GET['listrapchieuphim'])){
			 ?>
			 <script>
				  $("#main").load("list-rapchieuphim.php");
				  $(".component-menu-horizontal").removeClass("active");
		        $("#rapchieuphim-component").addClass("active");
				 $("#list-rapchieuphim").show();
				 $("#listrapchieuphim").css("color","#AEAFAE"); 
</script>
			 <?php
		 }
		 else if(isset($_GET['listcumrap'])){
			 ?>
			  <script>
				  $("#main").load("cumrap.php");
				  $(".component-menu-horizontal").removeClass("active");
		        $("#rapchieuphim-component").addClass("active");
				 $("#list-rapchieuphim").show();
				 $("#listcumrap").css("color","#AEAFAE"); 
</script>
			 <?php
		 }
		 else if(isset($_GET['khuvucchieu'])){
			 $id=$_GET['khuvucchieu'];
			 ?>
			 	 <script>
				  $("#main").load("khuvucchieu.php","khuvucchieu=<?=$id?>");
				  $(".component-menu-horizontal").removeClass("active");
		        $("#rapchieuphim-component").addClass("active");
				 $("#list-rapchieuphim").show();
				 $("#listrapchieuphim").css("color","#AEAFAE"); 
</script>
			 <?php
		 }
		else if(isset($_GET['thequatang'])){
		
			?>
			 <script>
				  $("#main").load("thequatang.php");
				  $(".component-menu-horizontal").removeClass("active");
		        $("#gift").addClass("active");
				 $("#gift-element").show();
				 $("#thequatang").css("color","#AEAFAE"); 
</script>
			<?php
		}
		else if(isset($_GET['edit-thequatang'])){
				$id=$_GET['id'];
			?>
			 <script>
				  $("#main").load("edit-thequatang.php","id=<?=$id?>");
				  $(".component-menu-horizontal").removeClass("active");
		        $("#gift").addClass("active");
				 $("#gift-element").show();
				 $("#thequatang").css("color","#AEAFAE"); 
</script>
			<?php
		}
		 else if(isset($_POST['updatethequatang'])){
			 $id=$_POST['id'];
			 $phantram=$_POST['phantram'];
			 $description=$_POST['description'];
			 $sql="update capdo set phantram=?,descriptioncapdo=? where id_capdo=$id";
			 $data=$this->model->update_capdo($sql,$phantram,$description);
			 if($data){
				 ?>
				 <script>
					  window.history.pushState({}, "Hide", "./?thequatang=1");
				 location.reload();
					 
</script>
				 <?php
			 }
		 }
		 else if(isset($_GET['doanhthu'])){
			 ?>
			 <script >
			 $("#main").load("doanhthu.php");
				 </script>
			 <?php
		 }
		 
		 else {
			 ?>
			 <script>
				 $("#main").load("statistic.php");
</script>
			 <?php
			
			
		}

		 
	 }
}
?>