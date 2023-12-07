<?php
$id= $_GET['id'];
include("../../model/quantri/connection.php");
$sql = "SELECT * FROM `thongtinchitiettour`where ID='$id'";
$tours= $connect->query($sql);	
?>