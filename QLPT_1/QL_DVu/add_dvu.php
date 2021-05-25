<?php
if(isset($_POST['sbm'])){
    $maDV = $_POST['MaDV'];
    $tenDV = $_POST['TenDV'];
    $donGia = $_POST['DonGia'];
	$donViTinh = $_POST['DonViTinh'];
	$sql = "INSERT INTO dichvu(MaDV,TenDV,DonGia,DonViTinh)
			VALUES('$maDV','$tenDV','$donGia','$donViTinh')";
	$query = mysqli_query($conn,$sql);
    header('location:index.php?page_layout=dsdv');   
    exit();  // header('location:index.php?page_layout=product'); 
}
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Quản lý dịch vụ</li>
            </ol>
        </div><!--/.row-->
        
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"> Thêm dịch vụ</h1>
            </div>
        </div><!--/.row-->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-md-8">
                            <form role="form" method="post">
                                <div class="form-group">
                                    <label>Mã dịch vụ</label>
                                    <input name="MaDV"  required type="number" class="form-control">
                                </div>   
                                <div class="form-group">
                                    <label>Tên dịch vụ</label>
                                    <input name="TenDV" required type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Đơn giá</label>
                                    <input name="DonGia" required type="text" inputmode="decimal" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Đơn vị tính</label>
                                    <input name="DonViTinh" required  type="text" class="form-control">
                                </div>
                                <button name="sbm" type="submit" class="btn btn-success">Thêm mới</button>
                                <button type="reset" class="btn btn-default">Làm mới</button>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div><!--/.row-->	
    </div>