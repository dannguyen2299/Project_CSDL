<?php
if(!defined('TEMPLATE')){
	die('Bạn không có quyền truy cập vào file này !');
}

    $maHD=$_GET['MaHD'];
    $sql= "SELECT * FROM quanlihopdong
    WHERE MaHopDong=$maHD";
    $query=mysqli_query($conn, $sql);
    $row=mysqli_fetch_array($query);

    if(isset($_POST['sbm'])){
        $maKH=$_POST['MaKhachHang'];
        $maPT=$_POST['MaPT'];
        $time=$_POST['TGThue'];
        $ngaySD=$_POST['NgaySuDung'];
        $ngayKT=$_POST['NgayKetThuc'];
        $tien=$_POST['TienThue'];
        $tThai=$_POST['TrangThaiHD'];
        

        $sql= "UPDATE quanlihopdong
            SET MaKhachHang='$maKH', MaPT='$maPT', TGThue='$time', NgaySuDung='$ngaySD', NgayKetThuc='$ngayKT', TienThue='$tien', TrangThaiHD='$tThai'
            WHERE MaHopDong='$maHD'";     
        $query=mysqli_query($conn, $sql);
        header("location:index.php?page_layout=qlhd");
    }
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Quản lý hợp đồng</li>
            </ol>
        </div><!--/.row-->
        
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"> Sửa hợp đồng</h1>
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
                                    <select name="MaKhachHang" class="form-control">
                                    <option value="<?php echo $row['MaKhachHang']; ?>" selected><?php echo $row['MaKhachHang']; ?></option>
                                        <?php 
                                        $sql1="SELECT * FROM khachhang";
                                        $query1 = mysqli_query($conn, $sql1); 
                                        while($row1=mysqli_fetch_array($query1)){
                                    ?>
                                        <option value=<?php echo $row1['MaKhachHang']; ?>><?php echo $row1['Ten'];echo "-"; ;echo $row1['MaKhachHang']; ?></option>
                                        <?php } ?>
                                    </select>
                                    <!-- <input name="MaKhachHang" required type="text" value="<?php echo $row['MaKhachHang'] ?>" class="form-control"> -->
                                    <option value=""></option>
                                </div>
                                <div class="form-group">
                                    <label>Mã phòng trọ</label>
                                    <select name="MaPT" class="form-control">
                                    <option selected value="<?php echo $row['MaPT']; ?>"><?php echo $row['MaPT']; ?></option>
                                        <?php 
                                        $sql2="SELECT * FROM phongtro";
                                        $query2 = mysqli_query($conn, $sql2); 
                                        while($row2=mysqli_fetch_array($query2)){
                                    ?>
                                        <option value=<?php echo $row2['MaPT']; ?>><?php echo $row2['SoPhong'];echo '-' ;echo $row2['MaPT']; ?></option>
                                        <?php } ?>
                                    </select>
                                    <!-- <input name="MaPT" required type="text" value="<?php echo $row['MaPT'] ?>" class="form-control"> -->
                                </div>
                                <div class="form-group">
                                    <label>Thời gian thuê</label>
                                    <input name="TGThue" required type="number" value="<?php echo $row['TGThue'] ?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Ngày sử dụng</label>
                                    <input name="NgaySuDung" required type="date" value="<?php echo $row['NgaySuDung'] ?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Ngày kết thúc</label>
                                    <input name="NgayKetThuc" required type="date" value="<?php echo $row['NgayKetThuc'] ?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Tiền thuê</label>
                                    <input name="TienThue" required type="text" inputmode="decimal"  value="<?php echo $row['TienThue'] ?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Trạng thái hợp đồng</label>
                                    <!-- <input name="TrangThaiHD" required type="text" value="<?php echo $row['TrangThaiHD'] ?>" class="form-control"> -->
                                    <select name="TrangThaiHD" class="form-control">
                                        <option value=1 <?php if($row['TrangThaiHD'] == 1){echo 'selected';}?>>Kích hoạt</option>
                                        <option value=0 <?php if($row['TrangThaiHD'] == 0){echo 'selected';}?>>Đã hủy</option>
                                    </select>
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