<?php
if(!defined('TEMPLATE')){
	die('Bạn không có quyền truy cập vào file này !');
}

    $maP=$_GET['MaP'];
    $sql= "SELECT * FROM quanlyphieuthu
    WHERE MaPhieuThuDV=$maP";
    $query=mysqli_query($conn, $sql);
    $row=mysqli_fetch_array($query);

    if(isset($_POST['sbm'])){
        $maKhach = $_POST['maKhach'];
        $maPhong = $_POST['maPhong'];
        $ghiChu = $_POST['ghiChu'];
        $tien = $_POST['tien'];
        $ngayThu = $_POST['ngayThu'];
        $trangThai = $_POST['trangThai'];

        // $sql="SELECT * FROM quanlyphieuthu
        // WHERE MaPhieuThuDV !='$maP'";
        // $query=mysqli_query($conn,$sql);
        // if(mysqli_fetch_array($query) > 0){
        //     $error=  '<div class="alert alert-danger">Phiếu thu đã tồn tái !</div>';
        // }
        // else{
            $sql= "UPDATE quanlyphieuthu
            SET MaKhachHang='$maKhach',MaPT='$maPhong',GhiChu='$ghiChu',Tien='$tien',NgayThu='$ngayThu',TrangThaiPhieu='$trangThai'
            WHERE MaPhieuThuDV='$maP'";     
        // }
        $query=mysqli_query($conn, $sql);
        header("location:index.php?page_layout=qlpt");
    }
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
            <li><a href="">Quản lý phiếu thu</a></li>
            <li class="active">Thêm phiếu thu</li>
        </ol>
    </div><!--/.row-->
    
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Sửa phiếu thu-<?php echo $row['MaPhieuThuDV']; ?> </h1>
        </div>
    </div><!--/.row-->
    <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-md-8">
                            <form role="form" method="post">
                                <div class="form-group">
                                    <label>Chọn khách trọ</label>
                                    <select name="maKhach" class="form-control">
                                    <option value="<?php echo $row['MaKhachHang']; ?>" selected><?php echo $row['MaKhachHang']; ?></option>
                                        <?php 
                                        $sql1="SELECT * FROM khachhang";
                                        $query1 = mysqli_query($conn, $sql1); 
                                        while($row1=mysqli_fetch_array($query1)){
                                    ?>
                                        <option value=<?php echo $row1['MaKhachHang']; ?>><?php echo $row1['Ten'];echo "-"; ;echo $row1['MaKhachHang']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label>Chọn phòng trọ</label>
                                    <select name="maPhong" class="form-control">
                                    <option selected value="<?php echo $row['MaPT']; ?>"><?php echo $row['MaPT']; ?></option>
                                        <?php 
                                        $sql2="SELECT * FROM phongtro";
                                        $query2 = mysqli_query($conn, $sql2); 
                                        while($row2=mysqli_fetch_array($query2)){
                                    ?>
                                        <option value=<?php echo $row2['MaPT']; ?>><?php echo $row2['SoPhong'];echo '-' ;echo $row2['MaPT']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Ghi chú</label>
                                    <input name="ghiChu" required class="form-control" value="<?php echo $row['GhiChu']; ?>" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label>Tiền</label>
                                    <input name="tien" required type="text" inputmode="decimal" value="<?php echo $row['Tien']; ?>" class="form-control" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label>Ngày thu</label>
                                    <input name="ngayThu" type="date" required class="form-control" value="<?php echo $row['NgayThu']; ?>" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label>Trạng thái phiếu</label>
                                    <select name="trangThai" class="form-control">
                                        <option value=1 <?php if($row['TrangThaiPhieu'] == 1){echo 'selected';}?>>Đã thu</option>
                                        <option value=2 <?php if($row['TrangThaiPhieu'] == 2){echo 'selected';}?>>Chưa thu</option>
                                    </select>
                                </div>
                                <button name="sbm" type="submit" class="btn btn-success">Thêm mới</button>
                                <button type="reset" class="btn btn-default">Làm mới</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div><!-- /.col-->
        </div><!-- /.row -->
    
</div>	<!--/.main-->	
