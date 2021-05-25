<?php 
session_start();
if(isset($_SESSION['mail']) && isset($_SESSION['pass'])){
	define('TEMPLATE' ,true);
	include_once('config/connect.php');
	$ma_Kv=$_GET['MaKV'];
	$sql= "DELETE FROM khuvuc 
			WHERE MaKV= '$ma_Kv'";
	mysqli_query($conn,$sql);
	header('location: index.php?page_layout=qldc');
}
else{
	header('location:index.php');
}
?>