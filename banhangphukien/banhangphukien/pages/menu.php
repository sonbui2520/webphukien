
<?php
	if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
		unset($_SESSION['dangky']);
	} 
?>
<div class="menu">
			<ul class="list_menu">
				<li><a href="index.php">TRANG CHỦ</a></li>
				
				<li><a href="index.php?quanly=giohang">GIỎ HÀNG</a></li>
				<?php
				if(isset($_SESSION['dangky'])){ 

				?>
				<li><a href="index.php?dangxuat=1">ĐĂNG XUẤT</a></li>
				<li><a href="index.php?quanly=thaydoimatkhau">CÀI ĐẶT TÀI KHOẢN</a></li>
				<?php
				}else{ 
				?>
				<li><a href="index.php?quanly=dangky">ĐĂNG KÝ</a></li>
				<?php
				} 
				?>
				<li><a href="index.php?quanly=tacgia">THÔNG TIN NHÓM</a></li>
				
				
					
				
			</ul>
			<p>
				<form action="index.php?quanly=timkiem" method="POST">
					<input type="text" placeholder="Tìm kiếm sản phẩm..." name="tukhoa">
					<input type="submit" name="timkiem" value="Tìm kiếm">
				</form>
			</p>
			<h3>
				<a href="http://localhost:8080/banhangphukien/admincp/login.php" style="float:right;"> Đăng nhập Admin</a>
			</h3>
			
		</div>