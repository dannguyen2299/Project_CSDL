<?php
if(isset($_POST['sbm'])){
    $makh = $_POST['MaKhachHang'];
    $tenkh = $_POST['Ten'];
    $gioiTinh = $_POST['GioiTinh'];
    $sdt = $_POST['SDT'];
    $cmnd = $_POST['CMND'];
    $trangThai = $_POST['Trangthaitro'];
	$sql = "INSERT INTO khachhang(MaKhachHang,Ten,GioiTinh,SDT,CMND,Trangthaitro)
			VALUES('$makh','$tenkh','$gioiTinh','$sdt','$cmnd','$trangThai')";
	$query = mysqli_query($conn,$sql);
    header('location:index.php?page_layout=qlkt');   
    exit();  // header('location:index.php?page_layout=product'); 
}
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Quản lý khách trọ</li>
            </ol>
        </div><!--/.row-->
        
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"> Thêm khách trọ</h1>
            </div>
        </div><!--/.row-->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-md-8">
                            <form role="form" method="post">
                                <div class="form-group">
                                    <label>Mã khách hàng</label>
                                    <input name="MaKhachHang"  required type="text" class="form-control">
                                </div>   
                                <div class="form-group">
                                    <label>Tên khách hàng</label>
                                    <input name="Ten"  required type="text" class="form-control">
                                </div> 
                                <div class="form-group">
                                    <label>Giới tính</label>
                                    <select name="GioiTinh" class="form-control">
                                        <option value=1>Nam</option>
                                        <option value=0>Nữ</option>
                                    </select>
                                    <!-- <input name="GioiTinh"  required type="text" class="form-control"> -->
                                </div> 
                                <div class="form-group">
                                    <label>Số điện thoại</label>
                                    <input name="SDT"  required type="number" class="form-control">
                                </div> 
                                <div class="form-group">
                                    <label>Số thẻ căn cước</label>
                                    <input name="CMND"  required type="number" class="form-control">
                                </div> 
                                <div class="form-group">
                                    <label>Trạng thái ở</label>
                                    <input name="Trangthaitro"  required type="number" class="form-control">
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