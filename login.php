<?php
session_start();
ob_start();
if(isset($_SESSION["login"])){

header("Location: index.php"); 

}


//form kodları




?>
