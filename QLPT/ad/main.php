<?php
if(!defined('TEMPLATE')){
	die('Ban khong co quyen truy cap vao file nay !');
}
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">	
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
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
                                    <div class="large">120</div>
                                    
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
                                    <div class="large">24</div>
                                    
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
                                    <div class="large">25.2k</div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- END BIỂU ĐỒ-->
        <!-- START SEARCH-->
                    <div class="row" style="margin-top: 250px;">
                        <div class="col-md-12">
                                <!-- Start Số phòng   -->
                                <div id="search" class="col-lg-6 col-md-6 col-sm-12">
                                    <form class="form-inline" method="post" action="#" >
                                        <input name="keyword" class="form-control mt-3" type="search" placeholder="Số phòng" aria-label="Search">
                                        <button class="btn btn-danger mt-3" type="submit">Tìm kiếm</button>
                                    </form>
                                </div>
                                <!-- End Số phòng   -->
                                 <!--   Start search tong hop-->
                                <div id="search" class="col-lg-6 col-md-6 col-sm-12">
                                    <form class="form-inline" method="post" action="#">
                                        <select data-trigger="" name="choices-single-defaul" style="width:120px;height:35px;">
                                            <option>Hai Bà Trưng</option>
                                            <option>Hà Đông</option>
                                            <option>Hà Tây</option>
                                            <option>Nam Từ Niêm</option>
                                          </select>
                                          <select data-trigger="" name="choices-single-defaul" style="width:100px;height:35px;">
                                            <option placeholder="">Còn Slot</option>
                                            <option>Hết slot</option>
                                          </select>
                                        <button class="btn btn-danger mt-3" type="submit">Tìm kiếm</button>
                                    </form>
                                </div>
                                <!-- End search tong hop-->

                        </div>
                    </div>

                    <!-- Start Table-->

                    <table 
                        data-toolbar="#toolbar"
                        data-toggle="table">

                        <thead>
                        <tr>
                            <th data-field="TenKV" data-sortable="true">Khu vực</th>
                            <th data-field="SoPhong"  data-sortable="true">Số phòng</th>
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
                            $sql="SELECT * FROM phongtro
                            WHERE SLHienTai=0";
                            $query=mysqli_query($conn, $sql);
                            while($row=mysqli_fetch_array($query)){
                        ?>
                            <tr>
                                <td ><?php echo $row['MaKV']; ?></td>
                                <td ><?php echo $row['SoPhong']; ?></td>
                                <td ><?php echo $row['Tang']; ?></td>
                                <td ><?php echo $row['DienTich']; ?></td>
                                <td ><?php echo $row['GiaTienThue']; ?></td>
                                <td ><?php echo $row['SLToiDa']; ?></td>
                                <td ><?php echo $row['SLHienTai']; ?></td>
                                <td ><?php echo $row['DiaChi']; ?></td>                              
                                <td class="form-group">
                                    <a href="#" class="btn btn-primary" >
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key" viewBox="0 0 16 16">
                                            <path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z"/>
                                            <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                          </svg>
                                    </a>
                                    <a href="#" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i></a>
                                    <a href="#" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                                </td>
                            </tr>

                          

                          <?php } ?>
                            
                        </tbody>
                    </table>
                     <!-- End Table-->
                </div><!--/.row  pain body  END SEARCH-->
            </div>
        </div>
    </div>