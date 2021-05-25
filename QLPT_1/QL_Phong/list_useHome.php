<!-- 	START	Phần riêng	main  -->
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="index.php?page_layout=home"><svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg></a></li>
            <li class="active">Quản lý phòng trọ</li>
        </ol>
    </div>
    <!--/.row-->
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-body">
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
                                        <option value="<?php echo $row['MaKV'] ?>" ><?php 
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
                                $sql = "SELECT * FROM phongtro_view WHERE SoPhong=$txttimkiem OR DiaChi LIKE '%$txttimkiem%'";
                                $query = mysqli_query($conn, $sql);
                            } else {
                                $sql = "SELECT * FROM phongtro_view WHERE SLHienTai<>0";
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

                            $sql = "SELECT * FROM phongtro_view WHERE MaKV='$txtKV' AND $sql1";
                            $query = mysqli_query($conn, $sql);
             
                        } else {
                            $sql = "SELECT * FROM phongtro_view WHERE SLHienTai<SLToiDa";
                            $query = mysqli_query($conn, $sql);
                        }

                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <td><?php echo $row['TenKV']; ?></td>
                                <td><?php echo $row['SoPhong']; ?></td>
                                <td><?php echo $row['Tang']; ?></td>
                                <td><?php echo $row['DienTich']; ?></td>
                                <td> <?php echo  number_format($row['GiaTienThue'], 0, '', '.'); ?></td>
                                <td><?php echo $row['SLToiDa']; ?></td>
                                <td><?php echo $row['SLHienTai']; ?></td>
                                <td><?php echo $row['DiaChi']; ?></td>
                                <td class="form-group">
                                    <a href="index.php?page_layout=dki_home&MaPT=<?php echo $row['MaPT']; ?>&tien=<?php echo $row['GiaTienThue'];?>" class="btn btn-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key" viewBox="0 0 16 16">
                                            <path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z" />
                                            <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                        </svg>
                                    </a>
                                    <a href="index.php?page_layout=edit_home&MaPT=<?php echo $row['MaPT']; ?>&MaKV=<?php echo $row['MaKV']; ?>&tien=<?php echo $row['GiaTienThue']; ?>" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i></a>
                                    <!-- <a href="del_home.php?MaPT=<?php echo $row['MaPT']; ?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></a> -->
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