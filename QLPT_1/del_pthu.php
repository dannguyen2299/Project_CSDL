<?php
session_start();
if(isset($_SESSION['mail']) && isset($_SESSION['pass'])){
	define('TEMPLATE', true);
	include_once('config/connect.php');
	$maP = $_GET['MaPhieuThuDV'];
	$sql = "DELETE FROM quanlyphieuthu
			WHERE MaPhieuThuDV = $maP";
	mysqli_query($conn, $sql);
	header('location:index.php?page_layout=qlpt');
}
else{
	header('location:index.php');
}
?>