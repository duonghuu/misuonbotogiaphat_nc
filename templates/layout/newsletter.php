<?php
	$d->reset();
	$sql = "select noidung_$lang,title,keywords,description,mota_$lang from #_info where type='about' ";
	$d->query($sql);
	$row_about = $d->fetch_array(); 
 ?>

<script type="text/javascript">
function js_submit(){
	if(isEmpty(document.getElementById('ten'), "Xin nhập Họ tên.")){
		document.getElementById('ten').focus();
		return false;
	}
	
	if(isEmpty(document.getElementById('dienthoai'), "Xin nhập Số điện thoại.")){
		document.getElementById('dienthoai').focus();
		return false;
	}
	
	if(!isNumber(document.getElementById('dienthoai'), "Số điện thoại không hợp lệ.")){
		document.getElementById('dienthoai').focus();
		return false;
	}
	
	if(!check_email(document.frm.email.value)){
		alert("Email không hợp lệ");
		document.frm.email.focus();
		return false;
	}
	
	if(isEmpty(document.getElementById('noidung'), "Xin nhập Nội dung.")){
		document.getElementById('noidung').focus();
		return false;
	}
	
	document.frm.submit();
}
</script>

<div class="col-n">
	<div class="bao-contactus">
		<div class="title-n"><h1>Đặt lịch hẹn</h1> </div>
		<p>Hãy điền thông tin của bạn ở đây đề đăng ký đặt lịch hẹn với <font><?=$row_setting['ten_'.$lang]?></font> vào thời gian sớm nhất</p>
		<form method="post" name="frm" action="nhan-mail.html" enctype="multipart/form-data" class="formnhanemail">
				
		  		<table width="100%" cellpadding="5" cellspacing="0" border="0" class="tablelienhe">
		  			<div class="col-6">
		  				<input name="ten" type="text" class="input" id="ten" size="50" placeholder="Họ và tên"/>
		  			</div>
		            <div class="col-6">
		             	<input name="email" type="text" class="input" size="50"  placeholder="Email"/>
		            </div>
		            <div class="col-6">
		             	<input name="dienthoai" type="text" class="input" id="dienthoai" size="50" placeholder="Số điện thoại"/>
		            </div>
		            <div class="col-6">
		             	<input name="thoigian" type="text" class="input" id="thoigian" size="50" placeholder="Thời gian"/>
		            </div>
		            <div class="col-12">
		            	 <textarea placeholder="Nội dung" name="noidung" cols="50" rows="5" class="ta_noidung" id="noidung"></textarea>
		            </div>                                                       
		             <tr class="button-contac-index">
		                <td height="43"> 
		                    <input class="button button-n" type="button" value="<?=_gui?>" onclick="js_submit();" />
		                    <input class="button button-n" type="button" value="<?=_nhaplai?>" onclick="document.frm.reset();" />
		                                                         
		                </td>
					</tr>
		         </table>                      
			</form>
	</div>

</div>
<div class="col-n">
	<div id="map_canvas1"></div>
</div>
<div class="clear"></div>
  