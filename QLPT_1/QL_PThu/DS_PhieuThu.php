<?php 
    if(!defined('TEMPLATE')){
        die("Banj khong co quyen truy cap");
    }
?>
    <!-- 	START	Phần riêng	main  -->
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">	
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Quản lý phiếu thu</li>
            </ol>
        </div><!--/.row-->
                <!-- START BIỂU ĐỒ -->
        <div class="row" >
                <div class="panel panel-default">
            <div class="panel-body" >
                <!-- END BIỂU ĐỒ-->
        <!-- START SEARCH-->
                   <h1 style="font-size: 40px; text-align: center;">DANH SÁCH PHIẾU THU</h1>
                    <!-- Start Table-->
                    <table 
                        data-toolbar="#toolbar"
                        data-toggle="table">
                        <thead>
                        <tr>
                            <th data-field="MaPhieu" data-sortable="true">Mã phiếu</th>
                            <th data-field="MaKhachHang"  data-sortable="true">Mã khách hàng</th>
                            <th data-field="MaPT" data-sortable="true">Mã phòng</th>
                            <th data-field="GhiChu" data-sortable="true">Ghi chú</th>
                            <th data-field="Tien" data-sortable="true">Tiền</th>
                            <th data-field="NgayThu" data-sortable="true">Ngày thu</th>
                            <th data-field="TrangThai" data-sortable="true">Trạng thái</th>
                            <th class="form-group">
                                <a href="index.php?page_layout=tPThu" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i></a>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php 
                            $sql="SELECT * FROM quanlyphieuthu";
                            $query=mysqli_query($conn,$sql);
                            while($row=mysqli_fetch_array($query)){
                        ?>
                            <tr>
                                <td ><?php echo $row['MaPhieuThuDV'];  ?></td>
                                <td ><?php echo $row['MaKhachHang'];  ?></td>
                                <td ><?php echo $row['MaPT'];  ?></td>
                                <td ><?php echo $row['GhiChu'];  ?></td>
                                <td ><?php echo number_format($row['Tien'], 0, '', '.');  ?></td>
                                <td ><?php echo $row['NgayThu'];  ?></td>
                                <td ><span class="label <?php if($row['TrangThaiPhieu']==1){echo 'label-danger';}else{echo 'label-success';}?>"><?php if($row['TrangThaiPhieu']==1){echo 'Đã thu';}else{echo 'Chưa thu';}?></span></td>                               
                                <td class="form-group">
                                    <a href="index.php?page_layout=edit_pthu&MaP=<?php echo $row['MaPhieuThuDV'];?>" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i></a>
                                    <a href="del_pthu.php?MaPhieuThuDV=<?php echo $row['MaPhieuThuDV'];?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
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
   