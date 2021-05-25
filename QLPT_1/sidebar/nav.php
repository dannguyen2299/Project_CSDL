<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index.php"><span>Nhà Trọ </span>62PM3</a>
						<ul class="user-menu">
							<li class="dropdown pull-right">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> <?php if(isset($_SESSION['mail'])){echo $_SESSION['mail'];}?> <span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Hồ sơ</a></li>
									<li><a href="logout.php"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Đăng xuất</a></li>
								</ul>
							</li>
						</ul>
					</div>				
				</div><!-- /.container-fluid -->
			</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<ul class="nav menu">
            <!-- Start Ql_PTro -->
            <div class="dropdown" >
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="background: white; border: none; color: teal; font-size: 25px;">
                   <svg class="glyph stroked home"><use xlink:href="#stroked-home"/></svg><u>Quản lý phòng trọ</u>
                <span class="caret"></span></button>
                <ul class="nav menu" style="font-size: 18px;">
                <li><a href="index.php?page_layout=qlp"> Danh sách phòng đang thuê</a></li>
                <li><a href="index.php?page_layout=qldc"> Quản lý địa chỉ</a></li>
                <li><a href="index.php?page_layout=addhome">Tạo phòng</a></li>
            </ul>
              </div>
               <!-- End Ql_PTro -->

               <!-- Start QL_hopDong-->
               <div class="dropdown" style="margin-top: 25px;">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"style="background: white; border: none; color: teal;font-size: 25px;">
                    <svg class="glyph stroked table"><use xlink:href="#stroked-table"/></svg><u>Quản lý hợp đồng </u>  
                <span class="caret"></span></button>
                <ul class="nav menu" style="font-size: 18px;">
                <li><a href="index.php?page_layout=qlhd"> Danh sách hợp đồng</a></li> 
            </ul>
              </div>
            <!-- End QL_hopDong-->

            <!-- Start QL_DVu   -->
            <div class="dropdown" style="margin-top: 20px;">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"style="background: white; border: none; color: teal;font-size: 25px;">
                    <svg class="glyph stroked table"><use xlink:href="#stroked-table"/></svg><u>Quản lý dịch vụ  </u>  
                <span class="caret"></span></button>
                <ul class="nav menu" style="font-size: 18px;">
                <li><a href="index.php?page_layout=dsdv"> Danh sách dịch vụ</a></li>
                <li><a href="index.php?page_layout=dsdkdv"> Danh sách đăng kí dịch vụ</a></li>
                <li><a href="index.php?page_layout=add_dvu">Thêm dịch vụ</a></li>
            </ul>
              </div>
              
            <!-- End Ql_DVu -->
            <!-- Start QL_Ktro   -->
            <div class="dropdown" style="margin-top: 20px;">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"style="background: white; border: none; color: teal;font-size: 25px;">
                    <svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg><u>Quản lý khách trọ</u> 
                <span class="caret"></span></button>
                <ul class="nav menu" style="font-size: 18px;">
                    <li><a href="index.php?page_layout=qlkt"> Danh sách khách trọ</a></li>
                </ul>
            </div>
            <!-- End QL_Ktro  -->
             <!-- Start QL_PThu   -->
             <div class="dropdown" style="margin-top: 20px;">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"style="background: white; border: none; color: teal;font-size: 25px;">
                    <svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg><u>Quản lý phiếu thu</u> 
                <span class="caret"></span></button>
                <ul class="nav menu" style="font-size: 18px;">
                <li><a href="index.php?page_layout=qlpt"> Danh sách phiếu thu</a></li>
                <li><a href="index.php?page_layout=tPThu"> Thêm phiếu thu</a></li>
            </ul>
              </div> 
            <!-- End QL_PThu  -->
		</ul>
</div>