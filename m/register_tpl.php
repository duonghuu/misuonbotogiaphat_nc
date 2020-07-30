<script>
	$(document).ready(function(e) {

		$('#register').click(function(){
			var name = $('#name');
			if(name.val()==''){alert("Bạn chưa nhập tên");name.focus();return false;}
			if(name.val().length <5){alert("Tên phải lớn hơn 5 ký tự");name.focus();return false;}
			
			var email = $('#email');
			if(email.val()==''){alert("Bạn chưa nhập Email");email.focus();return false;}else{var emailRegExp = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.([a-z]){2,4})$/;if(!emailRegExp.test(email.val())){email.val("");alert('Địa chỉ Email không hợp lệ');email.focus();return false;}}
			
			var pass1 = $('#pass1');
			if(pass1.val()==''){alert("Bạn chưa nhập mật khẩu");pass1.focus();return false;}
			if(pass1.val().length <5){alert("Mật khẩu ít nhất 8 ký tự");pass1.focus();return false;}
			
			var pass2 = $('#pass2');
			if(pass2.val()==''){alert("Bạn chưa xác nhận mật khẩu");pass2.focus();return false;}
			if(pass2.val()!=pass1.val()){alert("Mật khẩu xác nhận không chính xác");pass2.focus();return false;}
			
			var phone = $('#phone');if(phone.val()==''){alert("Bạn chưa nhập số điện thoại");phone.focus();return false;}else{var str = "0123456789";for(var j=0; j < phone.val().length; j++){if(str.indexOf(phone.val().charAt(j))==-1){alert("Số điện thoại không hợp lệ");phone.val("");phone.focus();return false;}}}
			
			var address = $('#address');
			if(address.val()==''){alert("Bạn chưa nhập địa chỉ.");address.focus();return false;}
			
			$('#frm_register').submit();
		});
		
	});
</script>
<script language='javascript'>
  function isNumberKey(evt)
 {
 var charCode = (evt.which) ? evt.which : event.keyCode
 if (charCode > 31 && (charCode < 48 || charCode > 57))
 return false;
 return true;
 }

</script>
<div class="ui-corner-all custom-corners">
    <div class="ui-bar ui-bar-a"><h3>Đăng ký thành viên</h3></div>
    <div class="ui-body ui-body-a">

                        <form action="register.html" method="post" id="frm_register" name="frm_register">
                        <input type="hidden" name="ok" value="1">
                        <div class="my_table table_send_ask">
                        	<div class="my_row">
                                <div class="my_cell my_cell_text">Họ và tên:</div>
                                <div class="my_cell"><input type="text" name="name" class="input_send" id="name"/></div>
                            </div><!--end row-->
                            <div class="my_row">
                                <div class="my_cell my_cell_text">Email:</div>
                                <div class="my_cell"><input type="text" name="email" class="input_send" id="email"/></div>
                            </div><!--end row-->
                             <div class="my_row">
                                <div class="my_cell my_cell_text">Mật khẩu:</div>
                                <div class="my_cell"><input type="password" name="pass" class="input_send" id="pass1"/></div>
                            </div><!--end row-->
                             <div class="my_row">
                                <div class="my_cell my_cell_text">Nhập lại mật khẩu:</div>
                                <div class="my_cell"><input type="password" name="repass" class="input_send" id="pass2"/></div>
                            </div><!--end row-->
                            <div class="my_row">
                                <div class="my_cell my_cell_text">Số điện thoại:</div>
                                <div class="my_cell"><input type="text" name="phone" class="input_send" id="phone" onkeypress="return isNumberKey(event)" /></div>
                            </div><!--end row-->
                            <div class="my_row">
                                <div class="my_cell my_cell_text">Địa chỉ:</div>
                                <div class="my_cell"><input type="text" name="address" class="input_send" id="address"/></div>
                            </div><!--end row-->
                           
                            <div class="my_row">
                                <div class="my_cell my_cell_text"></div>
                                <div class="my_cell">
                                	 <!--<input type="button" value="<?=_register?>" id="register" class="button">-->
                                	<a href="javascript:"  class="btn_send_ask" id="register">Đăng ký</a></div>
                            </div><!--end row-->
                        </div><!--end table form send ask-->
                    </form>
    </div><!--end dangky-->
</div>
