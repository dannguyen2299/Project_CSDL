<?php
if(!defined('TEMPLATE')){
	die('Ban khong co quyen truy cap vao file nay !');
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Quản lý phòng trọ</title>
<link href="design/css/bootstrap.min.css" rel="stylesheet">
<link href="design/css/datepicker3.css" rel="stylesheet">
<link href="design/css/bootstrap-table.css" rel="stylesheet">
<link href="design/css/styles.css" rel="stylesheet">
<!--Icons-->
<script src="design/js/lumino.glyphs.js"></script>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="author" content="colorlib.com">
<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
</head>

<body>

<!--/.sidebar-->
    <?php include_once("sidebar/nav.php"); ?>
<!--/.sidebar-->
    <!-- 	START	Phần riêng	main  -->
    <?php
        if(isset($_GET['page_layout'])){
            switch($_GET['page_layout']){
                case 'home' :include_once('ad/main.php'); break;
                // quản lý phòng
                case 'qlp' :include_once('QL_Phong/list_useHome.php');break;
                case 'qldc' :include_once('Ql_Phong/mana_address.php');break;
                case 'addhome' :include_once('Ql_Phong/add_home.php');break;
                //quản lý hợp đồng
                case 'qlhd' : include_once('QL_HopDong/DS_Hopdong.php');break;
                // quản lý khách trọ
                case 'qlkt': include_once('QL_Ktro/DS_KhachTro.php');break;
                // quản lý dịch vụ
                case 'dsdv': include_once('QL_DVu/DSDVU.php');break;
                case 'dsdkdv': include_once('QL_DVu/DS_DKY.php');break;
                case 'add_dvu': include_once('QL_DVu/add_dvu.php');break;
                // quản lý phiếu thu
                case 'qlpt' :include_once('QL_PThu/DS_PhieuThu.php');break;
                case 'tPThu' :include_once('QL_PThu/add_PT.php');break;
            }
        }
        else{
            include_once('ad/main.php');
        }

    ?>
        <!-- 	END  	Phần riêng	 -->
</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="design/js/jquery-1.11.1.min.js"></script>
    <script src="design/js/bootstrap.min.js"></script>
    <script src="design/js/bootstrap.min1.js"></script>
    <script src="design/js/bootstrap-table.js"></script>