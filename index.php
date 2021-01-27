<?php
session_start();
ob_start();
if(!isset($_SESSION["login"])){

header("Location: login.php"); 

} else {

echo "adminsin";

}

//$_SESSION["login"] = "true";
//$_SESSION["user"] = user;







?>
