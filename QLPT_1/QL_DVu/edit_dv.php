<?php
if(!defined('TEMPLATE')){
	die('Bạn không có quyền truy cập vào file này !');
}

    $maDVU=$_GET['MaDV'];
    $sql= "SELECT * FROM dichvu
    WHERE MaDV=$maDVU";
    $query=mysqli_query($conn, $sql);
    $row=mysqli_fetch_array($query);

    if(isset($_POST['sbm'])){
        $ten_Dv=$_POST['TenDV'];
        $donGia=$_POST['DonGia'];
        $donViTinh=$_POST['DonViTinh'];

        $sql="SELECT * FROM dichvu
        WHERE TenDV='$ten_Dv'
        AND MaDV !='$MaDV'";
        $query=mysqli_query($conn,$sql);
        if(mysqli_fetch_array($query) > 0){
            $error=  '<div class="alert alert-danger">Dịch vụ đã tồn tái !</div>';
        }
        else{
            $sql= "UPDATE dichvu
            SET TenDV='$ten_Dv', DonGia='$donGia', DonViTinh='$donViTinh'
            WHERE MaDV='$maDVU'";     
        }
        $query=mysqli_query($conn, $sql);
        header("location:index.php?page_layout=dsdv");
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
                <h1 class="page-header"> Sửa dịch vụ</h1>
            </div>
        </div><!--/.row-->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-md-8">
                            <form role="form" method="post">
                                <div class="form-group">
                                    <label>Tên dịch vụ</label>
                                    <input name="TenDV" required type="text" value="<?php echo $row['TenDV'] ?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Đơn giá</label>
                                    <input name="DonGia" required type="text" inputmode="decimal" value="<?php echo $row['DonGia'] ?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Đơn vị tính</label>
                                    <input name="DonViTinh" required  type="text" value="<?php echo $row['DonViTinh'] ?>" class="form-control">
                                </div>
                                <button type="submit" name="sbm" class="btn btn-primary">Cập nhật</button>
                                <button type="reset" class="btn btn-default">Làm mới</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div><!-- /.col-->
        </div><!-- /.row -->	
    </div>