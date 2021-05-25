<?php
if (!defined('TEMPLATE')) {
    die('Bạn không có quyền truy cập vào file này !');
}

$mapt = $_GET['MaPT'];
$makv1=$_GET['MaKV'];
$sql = "SELECT * FROM phongtro 
    WHERE MaPT='$mapt'";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);

if (isset($_POST['sbm'])) {
    $makv = $_POST['MaKV'];
    $sophong = $_POST['SoPhong'];
    $tang = $_POST['Tang'];
    $dientich = $_POST['DienTich'];
    $giatien = $_POST['GiaTienThue'];
    $sltoida = $_POST['SLToiDa'];
    $diachi = $_POST['DiaChi'];


    $sql = "SELECT * FROM phongtro
        WHERE MaPT ='$mapt'";

    $query = mysqli_query($conn, $sql);
    $rowtt = mysqli_fetch_array($query);

    if ($sltoida <  $rowtt['SLHienTai']) {
        $error =  '<div class="alert alert-danger">Số khách tại phòng này vượt quá số lượng tối đa. Không thể thay đổi !</div>';
    } else {
        $sql = "UPDATE phongtro
            SET MaKV='$makv', SoPhong='$sophong', Tang='$tang', DienTich='$dientich', GiaTienThue='$giatien', SLToiDa='$sltoida', DiaChi='$diachi'
            WHERE MaPT='$mapt'";
    }
    $query = mysqli_query($conn, $sql);
    header("location:index.php?page_layout=qlp");
}
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg></a></li>
            <li class="active">Quản lý phòng trọ</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"> Sửa thông tin phòng trọ</h1>
        </div>
    </div>
    <!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-md-8">

                        <form role="form" method="post">
                        <div class="form-group">
                                    <label>Khu vực </label>
                                    <select name="MaKV" class="form-control">
                                        <?php 
                                            $sql44="SELECT * FROM khuvuc";
                                            $query44=mysqli_query($conn,$sql44);
                                            while($row44=mysqli_fetch_array($query44)){
                                        ?>
                                        <option value=<?php echo $row44['MaKV']; ?> <?php if($row44['MaKV']==$makv1){echo "selected";} ?>><?php echo $row44['TenKV']; ?></option>
                                        <?php  } ?>
                                    </select>
                                </div>

                                <!-- <input name="MaKV" required type="text" value="<?php echo $row['MaKV'] ?>" class="form-control"> -->
                            

                            <div class="form-group">
                                <label>Số phòng</label>
                                <input name="SoPhong" required type="text" value="<?php echo $row['SoPhong'] ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Tầng</label>
                                <input name="Tang" required type="text" value="<?php echo $row['Tang'] ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Diện tích</label>
                                <input name="DienTich" required type="text" value="<?php echo $row['DienTich'] ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Giá tiền </label>
                                <input name="GiaTienThue" required type="text" value="<?php echo $row['GiaTienThue'] ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Số lượng tối đa </label>
                                <input name="SLToiDa" required type="text" value="<?php echo $row['SLToiDa'] ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Địa chỉ </label>
                                <input name="DiaChi" required type="text" value="<?php echo $row['DiaChi'] ?>" class="form-control">
                            </div>


                            <!-- ---- -->
                            
                            <button type="submit" name="sbm" class="btn btn-primary">Cập nhật</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                    </div>
                    </form>
                </div>
            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->
</div>