<div class="nhan_mail">
	<form name="frm_mail" id="frm_mail" action="nhan-mail.html" method="post" >
   		<input type="hidden" name="guimail" />
   		<input name="ten" type="text" class="input" id="ten" size="50" placeholder="Họ và tên"/>
    	<input id="txtkey1"  name="email"  type="email" class="text-nhantin" placeholder='<?=_dknhantin?>' required/>
    	<input name="dienthoai" type="text" class="input" id="dienthoai" size="50" placeholder="Số điện thoại"/>
    	<input name="thoigian" type="text" class="input" id="thoigian" size="50" placeholder="Thời gian"/>
    	<textarea placeholder="Nội dung" name="noidung" cols="50" rows="5" class="ta_noidung" id="noidung"></textarea>
        <input type="submit" class="bt-nhantin" value="<?=_dangky?>" />
	</form>
</div>