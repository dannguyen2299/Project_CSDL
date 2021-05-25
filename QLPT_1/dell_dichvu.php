<?php
session_start();
if(isset($_SESSION['mail']) && isset($_SESSION['pass'])){
	define('TEMPLATE', true);
	include_once('config/connect.php');
	
	$maDV = $_GET['MaDV'];
	$sql = "DELETE FROM dichvu
			WHERE MaDV = $maDV";
	mysqli_query($conn, $sql);
	header('location:index.php?page_layout=dsdv');
}
else{
	header('location:index.php');
}
?>