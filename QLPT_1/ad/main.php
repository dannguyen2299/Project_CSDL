<?php
if(!defined('TEMPLATE')){
	die('Ban khong co quyen truy cap vao file nay !');
}
$sql="SELECT * FROM phongtro";
$query=mysqli_query($conn, $sql);
$row=mysqli_fetch_array($query);
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">	
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="index.php?page_layout=home"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">ADMINSTORE</li>
            </ol>
        </div><!--/.row-->

                <!-- START BIỂU ĐỒ -->
        <div class="row" >
                <div class="panel panel-default">
            <div class="panel-body" >
                    <div class="col-xs-12 col-md-6 col-lg-3" style="margin-top: 100px;">
                        <div class="panel panel-blue panel-widget ">
                            <div class="row no-padding">
                                <div class="col-sm-3 col-lg-5 widget-left">
                                    <svg class="glyph stroked home"><use xlink:href="#stroked-home"/></svg></use></svg>
                                </div>
                                <div class="col-sm-9 col-lg-7 widget-right">
                                    <div class="text-muted">Tổng số phòng</div>
                                    <div class="large"><?php  $query1="SELECT * FROM phongtro" ;  $result = mysqli_query($conn,$query1);$rows = mysqli_num_rows($result);echo $rows ; ?></div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-3" style="margin-top: 100px;">
                        <div class="panel panel-teal panel-widget">
                            <div class="row no-padding">
                                <div class="col-sm-3 col-lg-5 widget-left">
                                    <svg class="glyph stroked home"><use xlink:href="#stroked-home"/></svg></use></svg>
                                </div>
                                <div class="col-sm-9 col-lg-7 widget-right">
                                    <div class="text-muted">Phòng còn slot</div>
                                    <div class="large"><?php  $query1="SELECT * FROM phongtro WHERE  SLHienTai<SLToiDa" ;  $result = mysqli_query($conn,$query1);$rows = mysqli_num_rows($result);echo $rows ; ?></div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-3" style="margin-top: 100px;">
                        <div class="panel panel-red panel-widget">
                            <div class="row no-padding">
                                <div class="col-sm-3 col-lg-5 widget-left">
                                    <svg class="glyph stroked home"><use xlink:href="#stroked-home"/></svg></use></svg>
                                </div>
                                <div class="col-sm-9 col-lg-7 widget-right">
                                    <div class="text-muted">Số phòng hết slot </div>
                                    <div class="large"><?php  $query1="SELECT * FROM phongtro WHERE  SLHienTai=SLToiDa" ;  $result = mysqli_query($conn,$query1);$rows = mysqli_num_rows($result);echo $rows ; ?></div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- END BIỂU ĐỒ-->
        <!-- START SEARCH-->
        <div class="row" style="margin-top: 100px;">
                    <div class="col-md-12">
                        <!-- Start Số phòng   -->
                        <div id="search" class="col-lg-6 col-md-6 col-sm-12">
                            <form class="form-inline" method="post" action="#">
                                <input name="keyword" value="<?php
                                                                if (isset($_POST['sbm'])) {
                                                                    $txttimkiem = $_POST['keyword'];
                                                                    echo $txttimkiem;
                                                                }

                                                                ?>" class="form-control mt-3" type="search" placeholder="Số phòng" aria-label="Search">
                                <button name="sbm" class="btn btn-danger mt-3" type="submit">Tìm kiếm</button>
                            </form>
                        </div>
                        <!-- End Số phòng   -->
                        <!--   Start search tong hop-->
                        <div id="search" class="col-lg-6 col-md-6 col-sm-12">
                            <form class="form-inline" method="post" action="#">
                                <select data-trigger="" name="txtKV" style="width:120px;height:35px;">
                                    <?php
                                    $sql = "SELECT * FROM khuvuc";
                                    $query = mysqli_query($conn, $sql);
                                    while ($row = mysqli_fetch_array($query)) {
                                    ?>
                                        <option value="<?php echo $row['MaKV'] ?>"><?php 
                                            if (isset($_POST['sbm'])) {
                                                $txtKV = $_POST['TenKV'];
                                                if ($txtKV == $row['TenKV']) {
                                                    echo $txtKV;
                                                }
                                            }
                                            echo $row['TenKV']; ?></option>
                                    <?php } ?>
                                </select>
                                <select data-trigger="" name="txtTT" style="width:100px;height:35px;">
                                    <option placeholder="">Còn Slot</option>
                                    <option>Hết slot</option>
                                </select>
                                <button name="sub" class="btn btn-danger mt-3" type="submit">Tìm kiếm</button>
                            </form>
                        </div>
                        <!-- End search tong hop-->

                    </div>
                </div>
                <!-- Start Table-->
                <table data-toolbar="#toolbar" data-toggle="table">
                    <thead>
                        <tr>
                            <th data-field="TenKV" data-sortable="true">Khu vực</th>
                            <th data-field="SoPhong" data-sortable="true">Số phòng</th>
                            <th data-field="Tang" data-sortable="true">Tầng</th>
                            <th data-field="DienTich" data-sortable="true">Diện tích</th>
                            <th data-field="GiaTienThue" data-sortable="true">Giá tiền</th>
                            <th data-field="SLToiDa" data-sortable="true">Số lượng tối đa</th>
                            <th data-field="SLHienTai" data-sortable="true">Số lượng hiện tại</th>
                            <th data-field="DiaChi" data-sortable="true">Địa chỉ</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        if (isset($_POST['sbm'])) {
                            $txttimkiem = $_POST['keyword'];
                            if ($txttimkiem != NULL) {
                                $sql = "SELECT * FROM phongtro WHERE SoPhong=$txttimkiem OR DiaChi LIKE '%$txttimkiem%'";
                                $query = mysqli_query($conn, $sql);
                            } else {
                                $sql = "SELECT * FROM phongtro WHERE SLHienTai<>0";
                                $query = mysqli_query($conn, $sql);
                            }
                        } else if (isset($_POST['sub'])) {
                            $txtKV = $_POST['txtKV'];
                            $txtTT = $_POST['txtTT'];

                            if ($txtTT == 'Còn Slot') {
                                $sql1="SLHienTai<SLToiDa";
                            } else {
                                $sql1 = "SLHienTai=SLToiDa";
                            }

                            $sql = "SELECT * FROM phongtro WHERE MaKV='$txtKV' AND $sql1";
                            $query = mysqli_query($conn, $sql);
             
                        } else {
                            $sql = "SELECT * FROM phongtro ";
                            $query = mysqli_query($conn, $sql);
                        }

                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <td><?php echo $row['MaKV']; ?></td>
                                <td><?php echo $row['SoPhong']; ?></td>
                                <td><?php echo $row['Tang']; ?></td>
                                <td><?php echo $row['DienTich']; ?></td>
                                <td> <?php echo  number_format($row['GiaTienThue'], 0, '', '.'); ?></td>
                                <td><?php echo $row['SLToiDa']; ?></td>
                                <td><?php echo $row['SLHienTai']; ?></td>
                                <td><?php echo $row['DiaChi']; ?></td>
                                <td class="form-group">
                                    
                                    <a href="index.php?page_layout=edit_home&MaPT=<?php echo $row['MaPT']; ?>&MaKV=<?php echo $row['MaKV']; ?>" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i></a>
                                    <a href="del_home.php?MaPT=<?php echo $row['MaPT']; ?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
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
<!-- 	END  	Phần riêng	 -->