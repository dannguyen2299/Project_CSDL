<?php
if(!defined('TEMPLATE')){
	die('Bạn không có quyền truy cập vào file này !');
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
</head>>

<body>

<?php
if(isset($_POST['sbm'])){
	$mail = $_POST['mail'];
	$pass = $_POST['pass'];
	
	$sql = "SELECT * FROM chuphong
			WHERE Username = '$mail'
			AND UserPass = '$pass'";
	$query = mysqli_query($conn, $sql);
	$row = mysqli_num_rows($query);
	
	if($row > 0){
		$_SESSION['mail'] = $mail;
		$_SESSION['pass'] = $pass;
		header('location:index.php');
	}
	else{
		$error = '<div class="alert alert-danger">Tài khoản không hợp lệ !</div>';
	}
}

?>
	
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading" style="text-align: center;"> ĐĂNG NHẬP</div>
				<div class="panel-body">
					<form role="form" method="post">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="E-mail" name="mail" type="email" autofocus>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Mật khẩu" name="pass" type="password" value="">
							</div>
							
							<button type="submit" name="sbm" class="btn btn-primary">Đăng nhập</button>
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->
</body>

</html>
