<?php
require("config.php");

 class model{
	 public $conn;
	
	public function __construct(){
		$this->conn=connect();
		
	}
	public function register($member){
		try{
		$sql="insert into member values(0,?,?,?,?,0,0,0)";
		
		$query=$this->conn->prepare($sql);
		$param=$query->bind_param("ssss",$member->name,$member->password,$member->phone,$member->email);
		$data=$query->execute();
			$query->fetch();
		/*$sql2="select count(*) as total from member where email=?";
			$query1=$this->conn->prepare($sql2);
		$param=$query1->bind_param("s",$member->email);
		$query1->execute();
			
			$query1->fetch();*/
			if($data===true){
				return 1;
			}
			else{
				return 0;
			}
				
			
			
			
		}catch(Exception $e){
			return $data=0;
		}
		
		
		
		
	}
	 public function login($email,$password){
		try{
		 $sql="select *  from  member where email=? and password=?";
		 $query=$this->conn->prepare($sql);
		 $query->bind_param('ss',$email,$password);
		 $query->execute();
		  $query->bind_result($id,$name,$phone,$email,$password,$numofcard,$diemtichluy,$tongchitieu);
		$query->fetch();
		$member=array("id"=>$id,"name"=>$name,"phone"=>$phone,"email"=>$email,"password"=>$password,"numofcard"=>$numofcard,"diemtichluy"=>$diemtichluy,"tongchitieu"=>$tongchitieu);
		 return $member;
		}catch(Exception $e){
			return 1;
		}
		 
	 }
	 public function update_user($member,$id){
		 try{
			 $sql="update member set username=?,password=?,phone=?,email=? where id=?";
			 $query=$this->conn->prepare($sql);
			 $query->bind_param('ssssi',$member->name,$member->password,$member->phone,$member->email,$id);
			
			
			 
			return  $query->execute();
		 }catch(Exception $e){
			 return $e->getMessage();
		 }
	 }
	 public function get_footer($selection){
		 try{
			 $sql="select $selection from about  ";
			 return $this->conn->query($sql);
		 }
		 catch(Exception $e){
			 return $e->getMessage();
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
	
	
	 
}

?>