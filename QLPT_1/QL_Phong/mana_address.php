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
                <li class="active">Quản lý phòng</li>
            </ol>
        </div><!--/.row-->
        
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Quản lý địa chỉ</h1>
            </div>
        </div><!--/.row-->
        <div id="toolbar" class="btn-group">
            <a href="index.php?page_layout=add_address" class="btn btn-success">
                <i class="glyphicon glyphicon-plus"></i> Thêm địa chỉ
            </a>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <table 
                            data-toolbar="#toolbar"
                            data-toggle="table">
    
                            <thead>
                            <tr>
                                <th data-field="MaKV" data-sortable="true">Mã khu vực</th>
                                <th data-field="TenKV"  data-sortable="true">Tên khu vực</th>
                                <th>Hành động</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php  
                                    $sql = "SELECT * FROM khuvuc
                                            ORDER BY MaKV ASC";
                                    $query = mysqli_query($conn, $sql);
                                    while($row = mysqli_fetch_array($query)){
                                ?>
                            
                                <tr>
                                    <td ><?php  echo $row['MaKV']; ?></td>
                                    <td ><?php  echo $row['TenKV'];  ?></td>
                                    <td class="form-group">
                                        <a href="index.php?page_layout=edit_address&MaKV=<?php echo $row['MaKV'];?>" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i></a>
                                        <a href="del_address.php?MaKV=<?php echo $row['MaKV']; ?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                                    </td>
                                </tr>
                                <?php  } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><!--/.row-->	
    </div>	<!--/.main-->
     <!-- 	END  	Phần riêng	 -->
