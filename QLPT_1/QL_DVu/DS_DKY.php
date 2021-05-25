<?php
if (!defined('TEMPLATE')) {
    die('Bạn không có quyền truy cập ');
}
?>
<!-- 	START	Phần riêng	main  -->
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
    <!-- START BIỂU ĐỒ -->
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row" style="margin-top: 25px;">
                    <div class="col-md-12">
                        <!-- tiêu đề -->
                        <h1 style="font-size: 40px; text-align: center;">DANH SÁCH ĐĂNG KÝ DỊCH VỤ</h1>
                        <!--   Start search dich_vu -->
                        <div id="search" class="col-lg-6 col-md-6 col-sm-12" style="text-align: center;">
                            <form class="form-inline" method="post">
                                <select value='' data-trigger="" name="txtdichvu" style="width:120px;height:35px;">
                                    <option value="" selected>Lựa chọn</option>
                                    <?php
                                    $sql = "SELECT * FROM dichvu";
                                    $query = mysqli_query($conn, $sql);
                                    while ($row = mysqli_fetch_array($query)) {
                                    ?>
                                        <option value="<?php echo $row['MaDV']; ?>" <?php
                                    if (isset($_POST['sbm'])) {
                                        $txtdichvu = $_POST['txtdichvu'];
                                        if ($txtdichvu == $row['MaDV']) {
                                            echo "selected";
                                        }
                                    }
                                    ?>><?php echo $row['TenDV']; ?></option>
                                    <?php  } ?>
                                </select>
                                <input name="sbm" class="btn btn-danger mt-3" type="submit" value="Tìm kiếm"></input>
                            </form>
                        </div>
                        <!-- End search tong hop-->
                    </div>
                </div>
                <!-- END BIỂU ĐỒ-->
                <!-- START SEARCH-->
                <!-- Start Table-->
                <table data-toolbar="#toolbar" data-toggle="table">
                    <thead>
                        <tr>
                            <th data-field="Ten" data-sortable="true">Tên khách hàng</th>
                            <th data-field="TenDV" data-sortable="true">Tên dịch vụ</th>
                            <th data-field="DonGia" data-sortable="true">Đơn giá</th>
                            <th data-field="DonViTinh" data-sortable="true">Đơn vị tính</th>
                            <th class="form-group">
                                <a href="index.php?page_layout=dki_dichVu" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i></a>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (isset($_POST['sbm'])) {
                            if($txtdichvu != null){
                            $txtdichvu = $_POST['txtdichvu'];
                            $sql2 = "select * from dk_dichvu_view
                            WHERE dk_dichvu_view.MaDV=" . $txtdichvu;
                            $query2 = mysqli_query($conn, $sql2);
                            }else{
                                $sql3 = "select * from dk_dichvu_view";
                                $query2 = mysqli_query($conn, $sql3);
                            }
                        } else {
                            $sql3 = "select * from dk_dichvu_view";
                            $query2 = mysqli_query($conn, $sql3);
                        }
                        while ($row = mysqli_fetch_array($query2)) {
                        ?>
                            <tr>
                                <td><?php echo $row['Ten']; ?></td>
                                <td><?php echo $row['TenDV']; ?></td>
                                <td><?php echo number_format($row['DonGia'], 0, '', '.'); ?></td>
                                <td><?php echo $row['DonViTinh']; ?></td>
                                <td class="form-group">
                                    <a href="del_dvu.php?ID=<?php echo $row['ID']; ?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <!-- End Table-->
            </div>
            <!--/.row  pain body  END SEARCH-->
        </div>
    </div>
</div>
<!--/.main-->