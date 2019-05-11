<?php

session_start();
if(isset($_SESSION['user'])){
?><script>
  $("#tab-menu").load("./account-user.php");
  </script>
   <?php
    
}
else{
	require("../login-user.php");
}
?>
