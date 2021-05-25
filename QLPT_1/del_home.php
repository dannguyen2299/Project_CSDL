<?php
session_start();
if(isset($_SESSION['mail']) && isset($_SESSION['pass'])){
	define('TEMPLATE', true);
	include_once('config/connect.php');
	$mapt = $_GET['MaPT'];
	$sql = "DELETE FROM phongtro
			WHERE MaPT = '$mapt' AND SLHienTai=0;";
	mysqli_query($conn, $sql);
	header('location:index.php?page_layout=home');
}
else{
	header('location:index.php');
}
?>