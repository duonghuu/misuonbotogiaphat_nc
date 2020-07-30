<script language="javascript" src="js/my_script.js"></script>
<script language="javascript">
function js_submit(){

	if(isEmpty(document.getElementById('pass'), "Xin nhập Password .")){
		document.getElementById('pass').focus();
		return false;
	}
	
	if(!isEmpty(document.dangky.password) && document.dangky.password.value.length<5){
		alert("Mật khẩu phải nhiều hơn 6 ký tự.");
		document.dangky.password.focus();
		return false;
	}
	
	if(!isEmpty(document.dangky.password) && document.dangky.password.value!=document.dangky.renew_pass.value){
		alert("Nhập lại mật khẩu mới không chính xác.");
		document.dangky.renew_pass.focus();
		return false;
	}
	

	

	document.form_tt.submit();
}
</script>
<div class="ui-corner-all custom-corners">
	<div class="ui-bar ui-bar-a"><h3>Đổi mật khẩu</h3></div> 
		<div class="ui-body ui-body-a">
		<div id="info">
				<div class="tt_tintuc"><h3 class="title">Đổi mật khẩu</h3></div> 
					<div class="khung">
							  <form id="frm_tk" action="doi-mat-khau.html" name="form_tt" method="post" enctype="multipart/form-data">
								  <input type="hidden" name="info_member[id]" value="<?=$member['id']?>">
								 
								  <div class="form_body send_form">
									  
									  
								   
										<div class="tieude col-md-3 col-sm-3 col-xx-3 col-xs-12">
											<div class="column first-child"><label for="password">Mật khẩu cũ (<span>*</span>):</label></div>
										</div>
										<div class="col-md-8 col-sm-8 col-xx-8 col-xs-12">
											<input id="password" class="form-control" name="info_member[password]" value="" type="password" required ></br>
										</div>
								 
										<div class="clear"></div>
								  
										<div class="tieude col-md-3 col-sm-3 col-xx-3 col-xs-12">
										  <div class="column first-child"><label for="new_password">Mật khẩu mới (<span>*</span>):</label></div>
										</div>
										<div class="col-md-8 col-sm-8 col-xx-8 col-xs-12">
										  <input id="new_password" class="form-control" name="info_member[new_password]"  value="" type="password" required></br>
										 </div>
									
										<div class="clear"></div>
								   
									<div class="tieude col-md-3 col-sm-3 col-xx-3 col-xs-12">
										<label for="re_new_password">Nhập lại mật khẩu (<span>*</span>):</label>
									</div>
									<div class="col-md-8 col-sm-8 col-xx-8 col-xs-12">
										<input id="re_new_password" class="form-control" name="info_member[re_new_password]" value="" type="password" required></br>
									</div>
								   
										<div class="clear"></div>
								   
									
										  <div class="column first-child"><label for="diachi1"></label></div>
										  <div class="column last-child"><button type="submit" onclick="js_submit();" class="cart-enter1 dp_block tran_all_05" >Cập nhật mật khẩu <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button> </div>
									 
								  </div> 
								  
								  
							  </form>
					  </div>
		</div>
</div>
</div>

