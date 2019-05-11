<?php
class member{
   
	public $name;
	public $phone;
	public $email;
	public $password;
	public $numofcard;
	public function __construct ($name1,$phone1,$email1,$password1,$numofcard){
		$this->name=$name1;
		$this->phone=$phone1;
		$this->password=$password1;
		$this->email=$email1;
	      $this->numofcard=$numofcard;
		
	}
	
}
?>