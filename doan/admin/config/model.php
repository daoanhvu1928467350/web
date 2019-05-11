<?php
require("config.php");

 class model{
	 public $conn;
	
	public function __construct(){
		$this->conn=connect();
		
	}
	
	 public function login($username,$password){
		try{
		 $sql="select count(*) as total  from  admin where username=? and password=?";
		 $query=$this->conn->prepare($sql);
		 $query->bind_param('ss',$username,$password);
		 $query->execute();
		  $query->bind_result($total);
		$query->fetch();
		
		 return $total;
		}catch(Exception $e){
			return 1;
		}
		 
	 }
	 public function update_film($sql,$img,$video,$ngaykhoichieu,$ngayketthuc,$thoiluong,$tenphim,$content,$loaive,$ngonngu,$daodien){
		 try{
			 $query=$this->conn->prepare($sql);
			 $query->bind_param("sssssssisi",$tenphim,$thoiluong,$ngaykhoichieu,$ngayketthuc,$content,$img,$video,$loaive,$ngonngu,$daodien);
			
			return $query->execute();
			 
		 }catch(Exception $e){
			 return false;
		 }
	 }
	 public function update_film2($sql,$img,$video,$ngaykhoichieu,$ngayketthuc,$thoiluong,$tenphim,$content,$loaive,$ngonngu,$daodien,$id){
		 try{
			 $query=$this->conn->prepare($sql);
			 $query->bind_param("sssssssisii",$tenphim,$thoiluong,$ngaykhoichieu,$ngayketthuc,$content,$img,$video,$loaive,$ngonngu,$daodien,$id);
			
			return $query->execute();
			 
		 }catch(Exception $e){
			 return false;
		 }
	 }
	 public function update_pr($sql,$ten,$img,$content){
		 try{
			 $query=$this->conn->prepare($sql);
			 $query->bind_param("sss",$ten,$content,$img);
			 
			 return  $query->execute();
		 }catch(Exception $e){
			 return false;
			 
		 }
	 }
	 public function update_about($content,$selection){
		 try{
		 $sql="update about set $selection=$content";
			 
		 return $this->conn->query($sql);
		 }catch(Exception $e){
			 return 0;
		 }
	 }
	  public function insert($sql){
		 try{
			 return $this->conn->query($sql);
		 }catch(Exception $e){
			 return $e->getMessage();
		 }
	 }
	 public function select($sql){
		 try{
			 return $this->conn->query($sql);
		 }catch(Exception $e){
			 return $e->getMessage();
		 }
	 }
	 public function update_admin($sql,$taikhoan,$matkhau){
		 try{
			 
			 $query=$this->conn->prepare($sql);
			 $query->bind_param("ss",$taikhoan,$matkhau);
			 $query->execute();
			 return true;
		 }catch(Exception $e){
			 return $e->getMessage();
		 }
	 }
	 public function update_rapchieuphim($sql,$select,$tenrap,$diachi,$quan,$thanhpho,$date,$img){
		 try{
			 $query=$this->conn->prepare($sql);
			 $query->bind_param("ssssssi",$tenrap,$diachi,$quan,$thanhpho,$img,$date,$select);
			
			 return  $query->execute();
		 }catch(Exception $e){
			 return false;
		 }
	 }
	 public function update_khuvucchieu($sql,$room,$namephongchieu,$soluonghangghe,$max,$sum){
		 try{
			 $query=$this->conn->prepare($sql);
			 $query->bind_param("siiii",$namephongchieu,$room,$soluonghangghe,$max,$sum);
			 return $query->execute();
			
		 }catch(Exception $e){
			 return false;
		 }
	 }
	 public function update($sql){
		 try{
			 return $this->conn->query($sql);
		 }catch(Exception $e){
			 return 0;
		 }
	 }
	 public function update_lichchieuphim($sql,$khuvucchieu,$idphim,$giochieuphim){
		 try{
			  $query=$this->conn->prepare($sql);
			 $query->bind_param("iii",$khuvucchieu,$idphim,$giochieuphim);
			 $query->execute();
			 return true;
		 }catch(Exception $e){
			 return false;
		 }
	 }
	 public function insert_para_once_string($sql,$parameter){
		 try{
			  $query=$this->conn->prepare($sql);
			 $query->bind_param("s",$parameter);
			 
			 return $query->execute();
		 }catch(Exception $e){
			 return false;
		 }
	 }
	 public function update_giave($sql,$loaive,$dotuoi,$ngay,$giave){
	try{
		 $query=$this->conn->prepare($sql);
			 $query->bind_param("iiii",$loaive,$dotuoi,$ngay,$giave);
			 $query->execute();
			 return true;
	}catch(Exception $e){
		return false;
	}
	 }
	 public function update_bapnuoc($sql,$name,$gia,$content,$id){
		 try{
			$query=$this->conn->prepare($sql);
			 $query->bind_param("sisi",$name,$gia,$content,$id);
			 return  $query->execute();
		 }catch(Exception $e){
			 return false;
		 }
	 }
	 public function update_combo($sql,$ten,$gia,$content){
		 try{
			 $query=$this->conn->prepare($sql);
			 $query->bind_param("ssi",$ten,$content,$gia);
			 $query->execute();
			 return true;
		 }catch(Exception $e){
			 return false;
		 }
	 }
	 public function update_rapchieuphim1($sql,$namerap,$diachi,$quan,$thanhpho,$id){
		 try{
			  $query=$this->conn->prepare($sql);
			 $query->bind_param("ssssi",$namerap,$diachi,$quan,$thanhpho,$id);
			 $query->execute();
			 return $query->execute();
		 }catch(Exception $e){
			 return false;
		 }
	 }
	 public function update_theloai_listfilm($sql,$idtheloai,$id){
		  try{
			  $query=$this->conn->prepare($sql);
			 $query->bind_param("ii",$idtheloai,$id);
			 $query->execute();
			 return $query->execute();
		 }catch(Exception $e){
			 return false;
		 }
	 }
	 public function update_capdo($sql,$phantram,$mota){
		 try{
			   $query=$this->conn->prepare($sql);
			 $query->bind_param("is",$phantram,$mota);
			 $query->execute();
			 return $query->execute();
		 }catch(Exception $e){
			 return false;
		 }
	 }
	
	 
}

?>