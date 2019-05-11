<div class="row row2 col-md-12 col-xs-12 col-lg-12" id="element-header">
<a href="./" class="col-md-3 col-xs-3 col-lg-3" id="img-web">
	<div id="title" class="col-sm-12 col-xs-12">
	
	
	<img src="image/title2.png">
	
	
</div>
</a>
<div id="search" class="col-md-6 col-xs-6 col-lg-6">
	<!--<DIV id="timkiem" class="col-sm-12 col-xs-12">
         <input type="text" placeholder="Tìm kiếm" class="col-sm"><button class="col-sm"><i class="fas fa-search" id="icon"></i></button>
         </DIV>-->
         <form class="example" action="./" method="get" style="margin:auto;">
         
  <input type="text" placeholder="Tìm kiếm phim" name="search2" id="search2">
  <input type="hidden" placeholder="Tìm kiếm phim" name="page" id="search2" value="1">
  <button type="submit" id="btn-search2"><i class="fa fa-search"></i></button>
</form>
<div id="filter">
<script>$("#filter").load("filter.php")</script>
	
</div>
</div>
<div id="login" class="col-sm-3 col-xs-3">
		<div id="element-login" class="col-sm-12 col-xs-12" id="thanhvien">
		
		<?php
			
			if(isset($_SESSION['user'])){
				$data=$_SESSION['user'];
				?>
				<div class="col-sm-12 col-xs-12">
				<div id="button-login">
				<div class="dropdown-toggle">
			<img src="./image/user.PNG" style="vertical-align: middle">
			<span><?php echo $data['name']?></span>	
			</div>
			<div id="money-user">
			<small>
			<?php  echo number_format($data['numofcard'],0)?> VNĐ
			</small>
			</div>
		</div>
	         <div id="form-infomation-user" class="col-sm-12 col-xs-12">
              <ul>
              	
              	<li><a href="./?account-user=1"><button class="button-user">Thông tin cá nhân</button></a></li>
              	<li><button class="button-user" id="logout">Đăng xuất</button></li>
              </ul>
            </div>
			</div>
			
				<?php
			}else{
			?>
			<a href="./member.php?login=1" class="anchor-background col-sm-12 col-xs-12" id="thanhvien">
		<button class="btn btn-success "  id="button-login">
		
			<img src="./image/user.PNG">
			<span>Thành viên</span>
			
		</button>
		</a>
		<?php
			}
				?>
		</div>		
</div>
</div>