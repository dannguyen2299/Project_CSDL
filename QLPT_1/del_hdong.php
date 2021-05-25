<?php
session_start();
if(isset($_SESSION['mail']) && isset($_SESSION['pass'])){
	define('TEMPLATE', true);
	include_once('config/connect.php');
$maHD=$_GET['MaHD'];
$tThai=0;
$sql= "UPDATE quanlihopdong SET TrangThaiHD='$tThai'
            WHERE MaHopDong='$maHD'";     
        mysqli_query($conn, $sql);
        header("location:index.php?page_layout=qlhd");
}
?>