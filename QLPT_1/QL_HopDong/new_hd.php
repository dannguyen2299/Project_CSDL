<?php 
    if(!defined('TEMPLATE')){
        die('Bạn không có quyền truy cập ');
    }
?>
    <!-- 	START	Phần riêng	main  -->
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">	
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Quản lý hợp đồng</li>
            </ol>
        </div><!--/.row-->

                <!-- START BIỂU ĐỒ -->
        <div class="row" >
                <div class="panel panel-default">
            <div class="panel-body" >

                <!-- END BIỂU ĐỒ-->
        <!-- START SEARCH-->
                   <h1 style="font-size: 40px; text-align: center;">HỢP ĐỒNG MỚI NHẤT</h1>
                    <!-- Start Table-->
                    <table 
                        data-toolbar="#toolbar"
                        data-toggle="table">

                        <thead>
                        <tr>
                            <th data-field="MaHopDong" data-sortable="true">Mã hợp đồng</th>
                            <th data-field="MaKhachHang"  data-sortable="true">Mã khách hàng</th>
                            <th data-field="MaPT" data-sortable="true">Mã phòng trọ</th>
                            <th data-field="TGThue" data-sortable="true">Thời gian thuê</th>
                            <th data-field="NgaySuDung" data-sortable="true">Ngày sử dụng</th>
                            <th data-field="NgayKetThuc"  data-sortable="true">Ngày kết thúc</th>
                            <th data-field="TienThue" data-sortable="true">Tiền thuê</th>
                            <th data-field="TrangThaiHD" data-sortable="true">Trạng thái hợp động</th>
                            <th>Hành động</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php  
                                    $sql = "SELECT * FROM quanlihopdong ORDER BY MaHopDong DESC LIMIT 1";
                                    $query = mysqli_query($conn, $sql);
                                    while($row = mysqli_fetch_array($query)){
                                ?>
                            <tr>
                                <td ><?php echo $row['MaHopDong']; ?></td>
                                <td ><?php echo $row['MaKhachHang']; ?></td>
                                <td ><?php echo $row['MaPT'] ;?></td>
                                <td ><?php echo $row['TGThue']; ?></td>
                                <td ><?php echo $row['NgaySuDung']; ?></td>
                                <td ><?php echo $row['NgayKetThuc']; ?></td>
                                <td ><?php echo number_format($row['TienThue'], 0, '', '.'); ?></td>
                                <td ><?php if( $row['TrangThaiHD']==1){echo "Kích hoạt";}else{echo "Đã hủy";} ?></td>
                                <td class="form-group">
                                    <a href="index.php?page_layout=edit_hDong&MaHD=<?php echo $row['MaHopDong'];?>" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i></a>
                                    <a href="del_dvu.php?MaDV=<?php echo $row['MaDV']; ?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                                </td>
                            </tr>
                            <?php  } ?>                          
                        </tbody>
                    </table>
                    
                     <!-- End Table-->
                </div><!--/.row  pain body  END SEARCH-->
            </div>
        </div>
    </div>
    	<!--/.main-->
    