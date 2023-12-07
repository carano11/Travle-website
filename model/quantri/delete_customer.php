<?php
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	try{
		include("../../model/quantri/connection.php");
		$sql="DELETE FROM `customers` WHERE ID='$id'";
		$connect->exec($sql);
		header("location:../../view/quantri/dskhachdk.php");
	}
	catch(PDOException $e)
	{
		echo $sql."<br>".$e->getMessage();
		header("location:../../view/quantri/dskhachdk.php");
	}
}
$connect=null;
?>
