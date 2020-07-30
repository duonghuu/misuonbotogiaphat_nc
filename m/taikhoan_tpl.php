
<script language="javascript" src="js/my_script.js"></script>
<script language="javascript">
function js_submit(){

	if(isEmpty(document.getElementById('email'), "Xin nhập email.")){
		document.getElementById('email').focus();
		return false;
	}

	if(!check_email(document.dangky.email.value)){
		alert("Email không hợp lệ");
		document.dangky.email.focus();
		return false;
	}
	
	
	
	
	if(isEmpty(document.getElementById('hoten'), "Xin nhập họ tên .")){
		document.getElementById('hoten').focus();
		return false;
	}
	if(isEmpty(document.getElementById('diachi'), "Xin nhập địa chỉ .")){
		document.getElementById('diachi').focus();
		return false;
	}
	if(isEmpty(document.getElementById('dienthoai'), "Xin nhập điện thoại .")){
		document.getElementById('dienthoai').focus();
		return false;
	}
	/*if(isEmpty(document.getElementById('captcha-code'), "Xin nhập mã xác nhận .")){
		document.getElementById('captcha-code').focus();
		return false;
	}*/
	document.dangky.submit();
}
</script>
<div class="ui-corner-all custom-corners">
	<div class="ui-bar ui-bar-a"><h3>Đăng nhập</h3></div> 
		<div class="ui-body ui-body-a">
		<div id="info">
				<article id="info">
				<div class="dieuhuong">
					<ul>
						<li><a href="trang-chu.html"><img src="images/home.png" alt="home" title="trang chủ"> Trang chủ </a></li>
						<li><a href="dang-ky.html" title="Đăng ký thành viên"> Đăng ký thành viên </a></li>
						 <li><a href="doi-mat-khau.html" title="Đăng ký thành viên"> Đổi mật khẩu </a></li>
						  <!--<li><a href="quan-ly-don-hang.html" title="Quản lý đơn hàng"> Quản lí đơn hàng </a></li>-->
					</ul>
				</div>
					<div class="noidung">
						<form method="post" name="dangky" action="thong-tin-ca-nhan.html" class="dangnhaptv" enctype="multipart/form-data">
									<div class="thongtin-dn"><a>Thông tin tài khoản</a></div>
									<div class="tieude col-md-3 col-sm-3 col-xx-3 col-xs-12">
									<label>Email : <span>*</span></label>
									</div>
									<div class="col-md-8 col-sm-8 col-xx-8 col-xs-12">
									<input type="text" name="email" id="email"    placeholder="Nhập email của bạn" class="form-control" value="<?=$thanhvien1[0]['email']?>" /><br />
									</div>
									<div class="clear"></div>
									<div class="tieude col-md-3 col-sm-3 col-xx-3 col-xs-12">
									<label>Mật Khẩu : <span>*</span></label>
									</div>
									<div class="col-md-8 col-sm-8 col-xx-8 col-xs-12">
									<input id="pass" type="password" name="password" onchange="toggle_pass('pass')" placeholder="Nhập password (Mật khẩu ít nhất 6 ký tự)" class="form-control" value="" /></br>
								  
									</div>
									
									<div class="clear"></div>
									
									<!--<div class="col-md-3 col-sm-3 col-xx-3 col-xs-12">
									<label>Nhập Lại Mật Khẩu : <span>*</span></label>
									</div>
									<div class="col-md-8 col-sm-8 col-xx-8 col-xs-12">
									<input type="password" name="renew_pass"   placeholder="Nhập lại mật khẩu trên" class="form-control"  value="" /><br />
									</div>
									
									<div class="clear"></div>
									-->
									<div class="thongtin-dn"><a>Thông tin cá nhân</a></div>
									<div class="tieude col-md-3 col-sm-3 col-xx-3 col-xs-12">
									<label>Họ Và Tên : <span>*</span></label>
									</div>
									<div class="col-md-8 col-sm-8 col-xx-8 col-xs-12">
									<input type="text" name="hoten" id="hoten"   placeholder="Nhập họ tên" class="form-control" value=" <?=$thanhvien1[0]['ten']?>" /><br />
									</div>
									<div class="clear"></div>
									<div class="tieude col-md-3 col-sm-3 col-xx-3 col-xs-12">
									<label>Giới Tính : </label>
									</div>
									<div class="col-md-8 col-sm-8 col-xx-8 col-xs-12">
									<input type="radio" name="gioitinh" value="Nam" <?php if($thanhvien1[0]['sex']=='Nam'){ echo "checked='checked'";}?> />&nbsp;&nbsp;&nbsp;Nam&nbsp;&nbsp;&nbsp; 
									<input type="radio" name="gioitinh" value="Nữ" <?php if($thanhvien1[0]['sex']=='Nữ'){ echo "checked='checked'";}?>/>&nbsp;&nbsp;&nbsp; Nữ
									</div><br /> 
											<div class="clear"></div>               
									<div class="tieude col-md-3 col-sm-3 col-xx-3 col-xs-12">                       
									<label>Địa Chỉ : <span>*</span></label>
									</div>
									<div class="col-md-8 col-sm-8 col-xx-8 col-xs-12">
									<input type="text" name="diachi" id="diachi"  size="35"  placeholder="Nhập địa chỉ" class="form-control" value="<?=$thanhvien1[0]['diachi']?>"  /><br />
									</div>
									<div class="clear"></div>
									<div class="formRow">
										<div class="tieude col-md-3 col-sm-3 col-xx-3 col-xs-12">    
										<label>Hình Hiện Tại :</label>
										</div>
										<div class="tieude col-md-3 col-sm-3 col-xx-3 col-xs-12">    
										<div class="formRight">
										
										<div class="mt10"><img src="<?=_upload_thanhvien_l.$thanhvien1[0]['photo']?>"  alt="NO PHOTO" width="90" /></div></br>

										</div>
										</div>
										<div class="clear"></div>
									</div>
									 <div class="clear"></div>
									<div class="tieude col-md-3 col-sm-3 col-xx-3 col-xs-12">  
									<label>Ảnh Đại Diện : </label>
									</div>
									<div class="col-md-8 col-sm-8 col-xx-8 col-xs-12">  
									<input type="file" name="photo"/><br /><br />
									</div>
									<div class="clear"></div>
									<div class="tieude col-md-3 col-sm-3 col-xx-3 col-xs-12">  
									<label>Điện Thoại : <span>*</span></label>
									</div>
									<div class="col-md-8 col-sm-8 col-xx-8 col-xs-12">  
									<input type="text" name="dienthoai" id="dienthoai"  size="35"  placeholder="Nhập Số điện thoại" class="form-control" value="<?=$thanhvien1[0]['dienthoai']?>" /><br />
									</div>
									
									<div class="clear"></div>
									<div class="tieude col-md-3 col-sm-3 col-xx-3 col-xs-12">  
									<label>Người giới thiệu : <span>*</span></label>
									</div>
									<div class="col-md-8 col-sm-8 col-xx-8 col-xs-12">  
									<input type="text" name="nguoigt" id="nguoigt"  size="35"  placeholder="Nhập tên người giới thiệu" class="form-control" value="<?=$thanhvien1[0]['nguoigt']?>" /><br />
									</div>
									<div class="clear"></div>
								   
									<label>&nbsp;</label><span style="color:rgba(255,0,0,1);"><?=$loi?></span><br />
									<div class="clear"></div>
									
									<div class="dangky_icon"><a class="dkt" onclick="js_submit();" style="cursor:pointer;">Cập nhật</a><a href="index.html" class="dkt">Thoát</a></div>

						</form>
					   
						
				   </div>
		</article>
		</div>
</div>
</div>