<script type="text/javascript">
	
		function checkLogin(){
			if(document.frm_login.log_email.value==''){
				return false;	
			}
			if(document.frm_login.log_pass.value==''){
				return false;	
			}
			document.frm_login.submit();
		}
	
    </script>


<div class="ui-corner-all custom-corners">
    <div class="ui-bar ui-bar-a"><h3>Đăng nhập</h3></div>
    <div class="ui-body ui-body-a">

            <form action="login.html" method="post" id="frm_login" name="frm_login">
                    <input type="hidden" name="ok" value="1">
                    <div class="my_table table_send_ask">
                    	
                        <div class="my_row">
                            <div class="my_cell my_cell_text">Email:</div>
                            <div class="my_cell"><input type="text" name="log_email" class="input_send" id="log_email"/></div>
                        </div><!--end row-->
                         <div class="my_row">
                            <div class="my_cell my_cell_text">Mật khẩu:</div>
                            <div class="my_cell"><input type="password" name="log_pass" class="input_send" id="log_pass"/></div>
                        </div><!--end row--> 
                        <div class="my_row" style="margin-bottom:10px">
                            <div class="my_cell my_cell_text"></div>
                            <div class="my_cell">
                            	<input type="checkbox" name="remember" value="1" data-role="none"> <?=_remember?> | <a href="forgot-password.html"><?=_forgot?>
                            </div>
                        </div><!--end row-->
                        
                       
                        

                        <div class="my_row">
                            <div class="my_cell my_cell_text"></div>
                            <div class="my_cell">
                            	<!-- <input type="button" onclick="checkLogin()" class="button" value="<?=_login?>"> -->
                            	<a href="javascript:" onclick="checkLogin()" class="btn_send_ask">Đăng nhập</a>
                            </div>
                        </div><!--end row-->

                    </div><!--end table form send ask-->
            </form>
    
	</div>
</div><!--end dangky-->

