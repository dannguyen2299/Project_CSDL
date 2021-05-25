<?php
if(!defined('TEMPLATE')){
	die('Bạn không có quyền truy cập vào file này !');
}

    $makh=$_GET['MaKhachHang'];
    $sql= "SELECT * FROM khachhang 
    WHERE MaKhachHang='$makh'";
    $query=mysqli_query($conn, $sql);
    $row=mysqli_fetch_array($query);

    if(isset($_POST['sbm'])){
        $ten_Kh=$_POST['Ten'];
        $gt=$_POST['GioiTinh'];
        $sdt=$_POST['SDT'];
        $cmnd=$_POST['CMND'];
        $tt_tro=$_POST['Trangthaitro'];

        $sql="SELECT * FROM khachhang
        WHERE Ten ='$ten_Kh'
        AND MaKhachHang !='$makh'";

        $query=mysqli_query($conn,$sql);
        if(mysqli_fetch_array($query) > 0){
            $error=  '<div class="alert alert-danger">Khách hàng đã tồn tại !</div>';
        }
        else{
            $sql= "UPDATE khachhang
            SET Ten='$ten_Kh', GioiTinh='$gt', SDT='$sdt', CMND='$cmnd', Trangthaitro='$tt_tro'
            WHERE MaKhachHang='$makh'";     
        }
        $query=mysqli_query($conn, $sql);
        header("location:index.php?page_layout=qlkt");
    }
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Quản lý khách hàng</li>
            </ol>
        </div><!--/.row-->
        
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"> Sửa khách trọ</h1>
            </div>
        </div><!--/.row-->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-md-8">
                      
                            <form role="form" method="post">
                            <div class="form-group">
                                <label>Tên khách hàng </label>
                                <input name="Ten" required type="text" value="<?php echo $row['Ten'] ?>" class="form-control">
                            </div>
                           
                            <div class="form-group">
                                <label>Giới tính</label>
                                <select name="GioiTinh" class="form-control">
                                        <option value=1  <?php if($row['GioiTinh'] == 1){echo 'selected';}?> >Nam</option>
                                        <option value=0 <?php if($row['GioiTinh'] == 0){echo 'selected';}?>>Nữ</option>
                                    </select>
                                <!-- <input name="GioiTinh" required type="text" value="<?php echo $row['GioiTinh'] ?>" class="form-control"> -->
                            </div>
                            <div class="form-group">
                                <label>Số điện thoại</label>
                                <input name="SDT" required type="text" value="<?php echo $row['SDT'] ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Số thẻ căn cước</label>
                                <input name="CMND" required type="text" value="<?php echo $row['CMND'] ?>" class="form-control">
                            </div>
                            <!-- <div class="form-group">
                                <label>Trạng thái ở</label>
                                <input name="Trangthaitro" required type="text" value="<?php echo $row['Trangthaitro'] ?>" class="form-control">
                            </div> -->
                                <button type="submit" name="sbm" class="btn btn-primary">Cập nhật</button>
                                <button type="reset" class="btn btn-default">Làm mới</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div><!-- /.col-->
        </div><!-- /.row -->	
    </div>