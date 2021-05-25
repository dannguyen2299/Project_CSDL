<?php
session_start();
if(isset($_SESSION['mail']) && isset($_SESSION['pass'])){
	define('TEMPLATE', true);
	include_once('config/connect.php');
	$makh = $_GET['MaKhachHang'];
	$sql = "DELETE FROM khachhang
			WHERE MaKhachHang = '$makh'";
	mysqli_query($conn, $sql);
	header('location:index.php?page_layout=qlkt');
}
else{
	header('location:index.php');
}
?>