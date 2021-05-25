<?php 
    $ma_kv=$_GET['MaKV'];
    $sql="SELECT * FROM khuvuc WHERE MaKV='$ma_kv'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);

    if(isset($_POST['sbm'])){
        $tenKV=$_POST['TenKV'];

        $sql="SELECT * FROM khuvuc
        WHERE TenKV='$tenKV' AND MaKV !='$ma_kv'";
        $query=mysqli_query($conn,$sql);

        if(mysqli_fetch_array($query) > 0){
            $error=  '<div class="alert alert-danger">Khu vực đã tồn tái !</div>';
        }
        else{
            $sql= "UPDATE khuvuc
            SET TenKV='$tenKV'
            WHERE MaKV='$ma_kv'";     
        }
        $query=mysqli_query($conn, $sql);
        header("location:index.php?page_layout=qldc");
    }
?>  
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Quản lý địa chỉ</li>
            </ol>
        </div><!--/.row-->
        
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sửa khu vực</h1>
            </div>
        </div><!--/.row-->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-md-8">
                            <form role="form" method="post">
                            <div class="form-group">
                                    <label>Tên khu vực</label>
                                    <input name="TenKV" required type="text" value="<?php echo $row['TenKV'];  ?>" class="form-control">
                                </div>
                                <button type="submit" name="sbm" class="btn btn-primary">Cập nhật</button>
                                <button type="reset" class="btn btn-default">Làm mới</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div><!-- /.col-->
        </div><!-- /.row -->	
    </div>