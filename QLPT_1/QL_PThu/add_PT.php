<?php
if(isset($_POST['sbm_1'])){
    $mapthu = $_POST['MaPhieuThuDV'];
    $kh = $_POST['MaKhachHang'];
    $maptro = $_POST['MaPT'];
    $ghichu = $_POST['GhiChu'];
    $tien = $_POST['Tien'];
    $ngaythu = $_POST['NgayThu'];
    $trangthai = 0;
	$sql0077 = "INSERT INTO `quanlyphieuthu`(`MaPhieuThuDV`, `MaKhachHang`, `MaPT`, `GhiChu`, `Tien`, `NgayThu`, `TrangThaiPhieu`)
     VALUES ($mapthu,'$kh','$maptro','$ghichu',$tien,'$ngaythu',$trangthai)";
	$query0077 = mysqli_query($conn,$sql0077);
    header('location:index.php?page_layout=qlpt');   
    exit();  // header('location:index.php?page_layout=product'); 
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
            <h1 class="page-header">Thêm phiếu thu</h1>
        </div>
    </div><!--/.row-->
    <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-md-8">
                            <div class="form-group">
                                <form role="form" method="post">
                                    <label>Chọn hợp đồng</label>
                                    <select name="MaHopDong" class="form-control">
                                        <?php 
                                        $sql1="SELECT * FROM quanlyhopdong_view WHERE TrangThaiHD=1";
                                        $query1 = mysqli_query($conn, $sql1); 
                                        while($row1=mysqli_fetch_array($query1)){
                                    ?>
                                        <option value="<?php echo $row1['MaHopDong'];?>" 
                                            <?php if(isset($_POST['sbm'])){
                                                $mmm=$_POST['MaHopDong'];
                                                if($mmm==$row1['MaHopDong']){
                                                    echo "selected";
                                                }

                                            } ?>
                                        ><?php echo $row1['MaHopDong'];echo "-" ;echo $row1['MaPT'];echo "-"; ;echo $row1['MaKhachHang'];echo "-";echo $row1['Ten']; ?></option>
                                        
                                        <?php } ?>
                                    </select>
                                    <button name="sbm" type="submit" class="btn btn-success">Xác nhận</button>
                                </form>
                            </div>
                            <form role="form" method="post">
                            <?php if(isset($_POST['sbm'])){ ?>
                            <?php 

                                $sql11="SELECT * FROM quanlyhopdong_view WHERE MaHopDong=$mmm";
                                $query11=mysqli_query($conn,$sql11);
                                $row11=mysqli_fetch_array($query11);
                            ?>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>Mã phiếu thu dịch vụ</label>
                                        <input name="MaPhieuThuDV" required type="number" class="form-control">
                                    </div> 
                                    <div class="form-group">
                                        <label> Khách hàng</label>
                                        <input name="MaKhachHang" required type="text" class="form-control" value="<?php echo $row11['MaKhachHang']; ?>">
                                    </div> 
                                    <div class="form-group">
                                        <label>Mã phòng trọ</label>
                                        <input name="MaPT" required type="text" class="form-control" value="<?php echo $row11['MaPT'] ?>" >
                                    </div> 
                                    <div class="form-group">
                                        <label>Ghi chú</label>
                                        <input name="GhiChu" required type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Tien</label>
                                        <input name="Tien" required type="decimal" class="form-control" value="<?php 
                                $sql = "SELECT SUM(dichvu.DonGia) FROM dangkidichvu inner join dichvu on dangkidichvu.MaDV = dichvu.MaDV WHERE dangkidichvu.MaHopDong = $mmm";
                                                                                                                                $query = mysqli_query($conn, $sql);
                                                                                                                                while ($row = mysqli_fetch_array($query)) {
                                                                                                                                    echo number_format($row[0], 0, '', '.');
                                                                                                                                }
                            ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Ngày thu</label>
                                        <input name="NgayThu" required type="date" class="form-control">
                                    </div>
                                <button name="sbm_1" type="submit" class="btn btn-success">Xác nhận</button>                               
                                </div>
                                <?php } ?>
                            </form>
                            
                    </div>
                </div>
            </div><!-- /.col-->
        </div><!-- /.row -->
    
</div>	<!--/.main-->	
