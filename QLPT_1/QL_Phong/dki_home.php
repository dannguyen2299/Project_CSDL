<?php 
    
    $mapt=$_GET['MaPT'];
    $tien=$_GET['tien'];
    if(isset($_POST['sbm'])){
        $mahd=$_POST['MaHopDong'];
        $makh=$_POST['MaKhachHang'];
        $mapt=$_POST['MaPT'];
        $time=$_POST['TGThue'];
        $start=$_POST['NgaySuDung'];
        $end=$_POST['NgayKetThuc'];
        $tien=$_POST['TienThue']*$_POST['TGThue'];
        $trangthai=1;

        $sql1="INSERT INTO `quanlihopdong`(`MaHopDong`, `MaKhachHang`, `MaPT`, `TGThue`, `NgaySuDung`, `NgayKetThuc`, `TienThue`, `TrangThaiHD`) 
        VALUES ($mahd,'$makh','$mapt',$time,'$start','$end',$tien,$trangthai)";
        $query1=mysqli_query($conn,$sql1);
        header('location:index.php?page_layout=qlhd');      
    }

?>
    <!-- 	START	Phần riêng	main  -->
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Quản lý phòng</li>
            </ol>
        </div><!--/.row-->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Đăng kí phòng</h1>
            </div>
        </div><!--/.row-->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-md-8">
                            <form role="form" method="post">
                                <div class="form-group">
                                    <label>Mã hợp đồng</label>
                                    <input name="MaHopDong" required type="number" class="form-control">
                                </div>   
                                <div class="form-group">
                                    <label>Mã khách hàng </label>
                                    <select name="MaKhachHang" class="form-control">
                                        <?php 
                                            $sql="SELECT * FROM khachhang";
                                            $query=mysqli_query($conn,$sql);
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                        <option value=<?php echo $row['MaKhachHang']; ?>><?php echo $row['Ten'];echo "-";echo $row['MaKhachHang']; ?></option>
                                        <?php  } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Mã phòng trọ</label>
                                    <input name="MaPT" required type="text" class="form-control" value="<?php echo $mapt; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Thời gian thuê</label>
                                    <input name="TGThue" required type="number" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Ngày sử dụng</label>
                                    <input name="NgaySuDung" required type="date"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Ngày kết thúc1</label>
                                    <input name="NgayKetThuc" type="date" required class="form-control"  placeholder="">
                                </div>
                                <div class="form-group">
                                    <label>Tiền phòng 1 tháng</label>
                                    <input  name="TienThue" required type="number" class="form-control" value="<?php echo $tien; ?>" >
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
    </div>	<!--/.main-->
     <!-- 	END  	Phần riêng	 -->
 