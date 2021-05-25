<?php
if(isset($_POST['sbm'])){
    $maKV = $_POST['MaKV'];
    $maPT = $_POST['MaPT'];
    $soPhong = $_POST['SoPhong'];
	$tang = $_POST['Tang'];
    $dienTich = $_POST['DienTich'];
    $giaTienThue = $_POST['GiaTienThue'];
    $slToiDa= $_POST['SLToiDa'];
    $slHienTai = 0;
    $diaChi= $_POST['DiaChi'];
    
	
	$sql1 = "INSERT INTO `phongtro`(`MaPT`, `MaKV`, `SoPhong`, `Tang`, `DienTich`, `GiaTienThue`, `SLToiDa`, `SLHienTai`, `DiaChi`) 
    VALUES ('$maPT','$maKV',$soPhong,$tang,$dienTich,$giaTienThue,$slToiDa,$slHienTai,'$diaChi')";
	$query = mysqli_query($conn, $sql1);
    header('location:index.php?page_layout=home');
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
                <h1 class="page-header"> Tạo phòng</h1>
            </div>
        </div><!--/.row-->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-md-8">
                            <form role="form" method="post">
                                <div class="form-group">
                                    <label>Mã phòng</label>
                                    <input name="MaPT" required type="text" class="form-control">
                                </div>   
                                <div class="form-group">
                                    <label>Khu vực </label>
                                    <select name="MaKV" class="form-control">
                                        <?php 
                                            $sql="SELECT * FROM khuvuc";
                                            $query=mysqli_query($conn,$sql);
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                        <option value=<?php echo $row['MaKV']; ?>><?php echo $row['TenKV']; ?></option>
                                        <?php  } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Số phòng</label>
                                    <input name="SoPhong" required type="number" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Tầng</label>
                                    <input name="Tang" required type="number" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Diện tích</label>
                                    <input name="DienTich" required type="text" inputmode="decimal" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Giá tiền</label>
                                    <input name="GiaTienThue" required type="number"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Số lượng tối đa</label>
                                    <input name="SLToiDa" required type="number" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Địa chỉ</label>
                                    <input name="DiaChi" required type="text" class="form-control">
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