<?php 
    if(isset($_POST['sbm'])){
        $hd1=$_POST['mahDong'];
      
        $arr=$_POST['maDV'];
        foreach($arr as $key=>$val){
            $dv=$val;
            $sql001="INSERT INTO `dangkidichvu`(`MaDV`, `MaHopDong`) 
            VALUES ('$dv','$hd1')";
            $query001=mysqli_query($conn,$sql001);
        }
        header('location:index.php?page_layout=dsdkdv');   
        exit();


    //     $sql99="SELECT ID FROM dangkidichvu ORDER BY ID DESC LIMIT 1";
    //     $query99=mysqli_query($conn,$sql99);
    //     //$count=mysqli_fetch_object($query99);
    //     $count=mysqli_fetch_object($query99);
    //     //$a=settype($count,"string");
       
    //     $a=mysqli_field_count($count);
    //     echo "---------";
    //     echo $a;
    }
 ?>
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
                            <div class="form-group">
                                <form class="form-inline" method="post">
                                    <label>Chọn hợp đồng </label>
                                    <select name="mahDong" class="form-control">
                                        <?php
                                            $sql = "SELECT * FROM quanlyhopdong_view";
                                            $query = mysqli_query($conn, $sql);
                                            while ($row = mysqli_fetch_array($query)) {
                                        ?>
                                            <option value=<?php echo $row['MaHopDong']; ?> <?php if (isset($_POST['sbm_khach'])) {
                                                    $mahDong = $_POST['mahDong'];
                                                    if ($mahDong == $row['MaHopDong']) {
                                                        echo "selected";
                                                    }
                                                } ?>><?php echo $row['MaHopDong']; echo "-"; echo $row['Ten'];echo "-";echo $row['MaKhachHang']; ?></option>
                                        <?php } ?>
                                    </select>
                                    <input name="sbm_khach" type="submit" class="btn btn-primary" value="Xác nhận"></input>
                                </form>
                            </div>
                        <form role="form" method="post">
                        <div class="form-group">
                            <label>Dịch vụ <?php if (isset($_POST['sbm_khach'])) {
                                                echo  "Cho hợp đồng $mahDong";
                                            } ?></label>
                            <br>
                            <input type="text" name="mahDong" id="" hidden value="<?php echo $mahDong; ?>">
                            <label hidden for="">Mã khách</label>
                            <?php
                            if (isset($_POST['sbm_khach'])) {
                                // $makhach = $_POST['maKhach'];
                                $sql2 = "SELECT * FROM dichvu WHERE dichvu.MaDV NOT IN (SELECT MaDV FROM dangkidichvu WHERE MaHopDong='$mahDong')";
                            } else {
                                $sql2 = "SELECT * FROM dichvu";
                            }
                            $query2 = mysqli_query($conn, $sql2);
                            while ($row2 = mysqli_fetch_array($query2)) {
                            ?>  
                               

                                <input type="checkbox" name="maDV[]" value="<?php echo $row2['MaDV']; ?>" >
                                <label > <?php echo $row2['TenDV']; ?></label><br/>
                            <?php } ?>
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