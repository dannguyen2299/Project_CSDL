<!-- <?php
if(isset($_POST['sbm'])){
    $maKv = $_POST['MaKV'];
    $tenkv = $_POST['TenKV'];
    
	$sql = "INSERT INTO khuvuc(MaKV,TenKV)
			VALUES('$maKv','$tenkv')";
	$query = mysqli_query($conn,$sql);
    header('location:index.php?page_layout=qldc');   
    exit();  // header('location:index.php?page_layout=product'); 
}
?> -->
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Quản lý địa chỉ</li>
            </ol>
        </div><!--/.row-->
        
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"> Thêm khu vực</h1>
            </div>
        </div><!--/.row-->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-md-8">
                            <form role="form" method="post">
                                <div class="form-group">
                                    <label>Mã khu vực</label>
                                    <input name="MaKV"  required type="text" class="form-control">
                                </div>   
                                <div class="form-group">
                                    <label>Tên khu vực</label>
                                    <input name="TenKV" required type="text" class="form-control">
                                </div>
                                <button name="sbm" type="submit" class="btn btn-success">Thêm mới</button>
                                <button type="reset" class="btn btn-default">Làm mới</button>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div><!--/.row-->	
    </div>