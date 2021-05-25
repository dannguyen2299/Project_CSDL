<?php if (isset($_POST['sbm'])) {
    $makhach1 = $row['MaKhachHang'];
    $maDV = $_POST['maDV'];
    // $sql3 = "INSERT INTO `dangkidichvu`(`MaDV`, `MaKhachHang`)
    // VALUES ('$makhach','$maDV')";
    // $query3 = mysqli_query($conn, $sql3);
    // header('location:index.php?page_layout=dsdkdv');
    // exit();

    $sql3 = array(); 
    foreach( $data as $value ) {
  //  $sql3[] = '("'.mysql_real_escape_string($maDV.'", '.$makhach1.')';
}
    //$query3 = mysql_query('INSERT INTO dangkidichvu (MaDV, MaKhachHang) VALUES '.implode(',', $sql));

} ?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg></a></li>
            <li class="active">Quản lý dịch vụ</li>
        </ol>
    </div>
    <!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"> Đăng kí dịch vụ</h1>
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
                                    <label>Chọn khách trọ</label>
                                    <select name="maKhach" class="form-control">
                                        <?php
                                            $sql = "SELECT * FROM khachhang";
                                            $query = mysqli_query($conn, $sql);
                                            while ($row = mysqli_fetch_array($query)) {
                                        ?>
                                            <option value=<?php echo $row['MaKhachHang']; ?> <?php if (isset($_POST['sbm_khach'])) {
                                                    $makhach = $_POST['maKhach'];
                                                    if ($makhach == $row['MaKhachHang']) {
                                                        echo "selected";
                                                    }
                                                } ?>><?php echo $row['Ten'];echo "-";echo $row['MaKhachHang']; ?></option>
                                        <?php } ?>
                                    </select>
                                    <input name="sbm_khach" type="submit" class="btn btn-primary" value="Xác nhận"></input>
                            </div>
                        </form>
                        <form role="form" method="post">
                            <!-- <div class="form-group">
                                    <label>Khách trọ</label>
                                    <input name="TenKH" required type="text" class="form-control" value="<?php if(isset($_POST['sbm_khach'])){echo $makhach ;} ?>">
                                </div> -->
                            <div class="form-group">
                            <label>Dịch vụ <?php if (isset($_POST['sbm_khach'])) {
                                                echo  "Cho khách $makhach";
                                            } ?></label><br>
                            <?php
                                if (isset($_POST['sbm_khach'])) {
                                    $makhach = $_POST['maKhach'];
                                    $sql2 = "SELECT * FROM dichvu WHERE dichvu.MaDV NOT IN (SELECT MaDV FROM dangkidichvu WHERE MaKhachHang='$makhach')";
                                } else {
                                    $sql2 = "SELECT * FROM dichvu";
                                }
                                $query2 = mysqli_query($conn, $sql2);
                                while ($row2 = mysqli_fetch_array($query2)) {
                            ?>
                                <input type="checkbox" name="maDV[]" value="<?php echo $row2['MaDV']; ?>">
                                <label> <?php echo $row2['TenDV']; ?></label><br>
                            <?php } ?>
                            </div>
                            <button type="submit" name="sbm" class="btn btn-primary">Cập nhật</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->
</div>