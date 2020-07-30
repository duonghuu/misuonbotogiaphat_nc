<script language="javascript" src="admin/media/scripts/my_script.js"></script>
<script type="text/javascript">
	
	function checkValue(){
		
		
		if(!check_email(document.frm_re_pass.email.value)){
		alert("Email không hợp lệ");
		document.frm_re_pass.email.focus();
		return false;
	}
	
		
		document.frm_re_pass.submit();
		
	}
	
</script>

<div class="breadcrumb"><?=$title_abc?></div>
<div class="sub_main">
	<div class="content_main">
		<div class="contain_form_send_ask">
                    <div class="title_send_aks"><h2>Lấy lại mật khẩu</h2></div>

                  <form method="post" action="forgot-password.html" id="frm_re_pass" name="frm_re_pass">
                    <input type="hidden" name="ok" value="1">
                    <div class="my_table table_send_ask">
                    	
                        <div class="my_row">
                            <div class="my_cell my_cell_text">Email:</div>
                            <div class="my_cell"><input type="text" name="email" class="input_send" id="email"/></div>
                        </div><!--end row-->
                        
                        

                        <div class="my_row">
                            <div class="my_cell my_cell_text"></div>
                            <div class="my_cell">
                            	<!-- <input type="button" onclick="checkLogin()" class="button" value="<?=_login?>"> -->
                            	<a href="javascript:" onclick="checkValue()" class="btn_send_ask">Gửi</a></div>
                            </div>
                        </div><!--end row-->

                    </div><!--end table form send ask-->
                </form>
                </div><!--end contain form send ask-->
	</div>
</div><!--end dangky-->



