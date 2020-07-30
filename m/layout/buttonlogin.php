
<?php if($_SESSION['login']['thanhvien']==''){ ?>
	<div class="button_d register"><a href="dang-ky.html">Đăng ký</a> </div>
	<div class="button_d dangnhap"><a href="dang-nhap.html">Đăng nhập</a></p></div>
<?php }else{ ?>
	<div class="dangnhap logout"><p><?=$_SESSION['login']['thanhvien']?></p></div>
	<div class="box-logout"><a href="logout.html"><img src="images/image-logout.png">Đăng xuất</a></div>
<?php } ?>