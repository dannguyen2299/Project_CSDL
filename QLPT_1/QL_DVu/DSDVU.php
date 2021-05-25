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
                <li class="active">Quản lý dịch vụ</li>
            </ol>
        </div><!--/.row-->

                <!-- START BIỂU ĐỒ -->
        <div class="row" >
                <div class="panel panel-default">
            <div class="panel-body" >

                <!-- END BIỂU ĐỒ-->
        <!-- START SEARCH-->
                   <h1 style="font-size: 40px; text-align: center;">DANH SÁCH DỊCH VỤ</h1>
                    <!-- Start Table-->

                    <table 
                        data-toolbar="#toolbar"
                        data-toggle="table">

                        <thead>
                        <tr>
                            <th data-field="MaDV" data-sortable="true">Mã dịch vụ</th>
                            <th data-field="TenDV"  data-sortable="true">Tên dịch vụ</th>
                            <th data-field="DonGia" data-sortable="true">Đơn giá</th>
                            <th data-field="DonViTinh" data-sortable="true">Đơn vị tính</th>
                            <th class="form-group">
                                <a href="index.php?page_layout=add_dvu" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i></a>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php  
                                    $sql = "SELECT * FROM dichvu";
                                    $query = mysqli_query($conn, $sql);
                                    while($row = mysqli_fetch_array($query)){
                                ?>
                            <tr>
                                <td ><?php echo $row['MaDV']; ?></td>
                                <td ><?php echo $row['TenDV']; ?></td>
                                <td ><?php echo  number_format($row['DonGia'], 0, '', '.'); ?></td>
                                <td ><?php echo $row['DonViTinh'] ?></td>
                                <td class="form-group">
                                    <a href="index.php?page_layout=edit_dvu&MaDV=<?php echo $row['MaDV'];?>" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i></a>
                                    <a href="dell_dichvu.php?MaDV=<?php echo $row['MaDV']; ?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
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
  