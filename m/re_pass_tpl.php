<script type="text/javascript">
	
	function checkValue(){
		
		if($('#oldpass').attr('value') == ''){
			$('<span style="font-size: 15px;color: #F00"> *</span>').insertAfter('#oldpass');
			$('#oldpass').focus();
			return false;	
		}
		if($('#pass').attr('value') == ''){
			$('<span style="font-size: 15px;color: #F00"> *</span>').insertAfter('#pass');
			$('#pass').focus();
			return false;	
		}
		if($('#repass').attr('value') == ''){
			$('<span style="font-size: 15px;color: #F00"> *</span>').insertAfter('#repass');
			$('#repass').focus();
			return false;	
		}
		document.frm_re_pass.submit();
		
	}
	
</script>
<div class="info">
<div class="info-content">
	<div class="text">
		<div id="left">
			<div class="left" style="border-right: 1px solid #ccc;">
				
				<div class="title"><h2><a href="account/" class="transitionAll"><?=_account?></a></h2></div>
				<div class="content">
					<p><a href="account/history-order.html" class="transitionAll"><?=_history_order?></a></p>
					<p><a href="account/personal.html" class="transitionAll"><?=_personal?></a></p>
					<p><a href="account/change-password.html" class="transitionAll active"><?=_repass?></a></p>
				
				</div>
				<div class="title"><h2><a href="lien-he.html" class="transitionAll"><?=_contact?></a></h2></div>
			</div>
		</div><!-- #left -->
		
		<div id="right">
			<div class="right">
				
				<div class="content">
					
					<form method="post" action="account/change-password.html" id="frm_re_pass" name="frm_re_pass">
						<table cellspacing="10" style="width: 550px;">
						  <tr>
							<td><span style="font-weight: bold; color:#036;">Email</span></td>
							<td><b style="color: #ff5555"><?=$_SESSION['logging']['email']?></b></td>
						  </tr>  
						  <tr>
							<td><span style="font-weight: bold; color:#036;"><?=_oldpass?></span></td>
							<td><input type="password" name="oldpass" id="oldpass" value="" style="width: 250px; height: 23px" class="input" /></td>
						  </tr>
						  
						  <tr>
							<td><span style="font-weight: bold; color:#036;"><?=_newpass?></span></td>
							<td><input type="password" name="pass" id="pass" value="" style="width: 250px; height: 23px" class="input" /></td>
						  </tr>
						  
						  <tr>
							<td><span style="font-weight: bold; color:#036;"><?=_newspass?></span></td>
							<td><input type="password" name="repass" id="repass" value="" style="width: 250px; height: 23px" class="input" /></td>
						  </tr>
						  
						  <tr>
							<td></td>
							<td ><input type="button" value="<?=_capnhat?>" class="button" onclick="checkValue()" /></td>
						  </tr>
						</table>
					</form>
				</div>
				
			</div>
		</div>
	</div></div>
	<div class="clear"></div>
</div>


