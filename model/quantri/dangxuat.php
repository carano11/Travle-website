<?php session_start(); 
 
if (isset($_SESSION['username'])){
    unset($_SESSION['username']); // xóa session login
}
header("location:../../view/quantri/index.php");
?>
<!-- <a href="index.php">HOME</a> -->