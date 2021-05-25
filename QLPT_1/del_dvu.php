<?php
session_start();
if(isset($_SESSION['mail']) && isset($_SESSION['pass'])){
	define('TEMPLATE', true);
	include_once('config/connect.php');
	
	$maDKDV = $_GET['ID'];
	$sql = "DELETE FROM dangkidichvu
			WHERE ID = $maDKDV";
	mysqli_query($conn, $sql);
	header('location:index.php?page_layout=dsdkdv');
}
else{
	header('location:index.php');
}
?>