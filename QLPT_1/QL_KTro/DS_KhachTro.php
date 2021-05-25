<?php  
    if(!defined('TEMPLATE')){
        die("Ban khong co quyen truy cap! ");
    }
?>
    <!-- 	START	Phần riêng	main  -->
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">	
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Quản lý khách trọ</li>
            </ol>
        </div><!--/.row-->

                <!-- START BIỂU ĐỒ -->
        <div class="row" >
                <div class="panel panel-default">
            <div class="panel-body" >

                <!-- END BIỂU ĐỒ-->
        <!-- START SEARCH-->
                   <h1 style="font-size: 40px; text-align: center;">DANH SÁCH KHÁCH TRỌ</h1>
                    <!-- Start Table-->

                    <table 
                        data-toolbar="#toolbar"
                        data-toggle="table">

                        <thead>
                        <tr>
                            <th data-field="MaKhachTro" data-sortable="true">Mã khách hàng</th>
                            <th data-field="Ten"  data-sortable="true">Tên</th>
                            <th data-field="SDT" data-sortable="true">SĐT</th>
                            <th data-field="GioiTinh" data-sortable="true">Giới tính</th>
                            <th data-field="CMND" data-sortable="true">CMND</th>
                            <!-- <th data-field="Trangthaitro" data-sortable="true">Trạng thái ở</th> -->
                            <th class="form-group">
                                <a href="index.php?page_layout=add_khach" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i></a>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php 
                            $sql= "SELECT * FROM khachhang";
                            $query= mysqli_query($conn, $sql);
                            while($row= mysqli_fetch_array($query)){
                        ?>
                        
                            <tr>
                                <td ><?php echo $row['MaKhachHang']; ?></td>
                                <td ><?php echo $row['Ten']; ?></td>
                                <td ><?php echo $row['SDT']; ?></td>
                                <td ><?php if($row['GioiTinh']==1){echo 'Nam';}else{echo 'Nữ';}?></td>
                                <td ><?php echo $row['CMND']; ?></td>
                                <!-- <td ><?php echo $row['Trangthaitro']; ?></td>                               -->
                                <td class="form-group">
                                    <a href="index.php?page_layout=edit_khach&MaKhachHang=<?php echo $row['MaKhachHang'];  ?>" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i></a>
                                    <a href="del_khach.php?MaKhachHang=<?php echo $row['MaKhachHang'] ;?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                                </td>
                            </tr>
                                <?php }?>
                            
                        </tbody>
                    </table>
                     <!-- End Table-->
                </div><!--/.row  pain body  END SEARCH-->
            </div>
        </div>
    </div>
    	<!--/.main-->
    