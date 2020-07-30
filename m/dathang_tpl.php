<style>
.clear{padding:0px;
margin:0px;
clear:both;}
li{margin:0px;padding:0px;}
li{list-style-type:none;}
#contact1 form li {
  position: relative;
  margin-bottom: 15px;
}

#contact1 form li.name input {
  background-image: url(images/name.png);
}

#contact1 form li.email input {
  background:url(images/email.png) no-repeat 7px 7px;
}

#contact1 form li.phone input {
  background:url(images/phone.png) no-repeat 7px 7px;
}
#contact1 form input, #contact1 form textarea {
  color: #8C8C8C;
  border: solid 1px #E6E6E6;
  padding: 10px 10px 10px 50px;
  width: 100%;
  background-repeat: no-repeat;
  background-position: 9px 7px;
}

#contact1 form li.address input {
 background-image:url(images/name.png);
}
#contact1 form li.subject input {
  background-image: url(images/subject.png);
}

#contact1 form li.ngay input {
 
   background-image: url(images/post-date.jpg);
}
.formCol {
  float: left;
  width: 49%;
}
.formCol.right {
  float: right;
  width: 49%;
  
}
#contact1 form li.text textarea {
  background-image: url(images/text.png);
}
#contact1 form textarea {
  width: 100%;
  height: 140px;
}
#contact1 input:hover,#contact1 textarea:hover{
	box-shadow:0 0 8px rgba(0,0,255,0.6);
	}
#contact1 input:focus,#contact1 textarea:focus{
	box-shadow:0 0 8px rgba(0,0,255,0.6);
	}
.nut:hover{
	background:rgba(255,0,0,0.8) !important;
	color:#FFF !important;
	}
</style>
<div id="contact1">
<h3 style="color:#00F;font-family:V;font-size:15px;">Đặt hàng</h3>
 <form action="" method="post" name="lichhen" id="lichhen">
	                	
                       
			                <li class="name"><input name="ten" type="text" placeholder="Họ và tên" value="Họ và tên" onFocus="if (this.value == 'Họ và tên'){this.value='';}" onBlur="if (this.value == '') {this.value='Họ và tên';}"/></li>
			              
			                <li class="phone"><input name="dienthoai" type="text" placeholder="Số điện thoại" value="Số điện thoại" onFocus="if (this.value == 'Số điện thoại'){this.value='';}" onBlur="if (this.value == '') {this.value='Số điện thoại';}"/></li>
			                <li class="ngay"><input name="ngay" type="date" placeholder="Mã bảo vệ" value="Mã bảo vệ" onFocus="if (this.value == 'Mã bảo vệ'){this.value='';}" onBlur="if (this.value == '') {this.value='Mã bảo vệ';}"/></li> 
                            
                      <li class="email"><input name="s_email" type="text" placeholder="Email" value="Email" onFocus="if (this.value == 'Email'){this.value='';}" onBlur="if (this.value == '') {this.value='Email';}"/></li>
                      
		               
		                <li class="text"><textarea name="noidung" cols="" rows="" placeholder="Nội dung" value="Nội dung" onFocus="if (this.value == 'Nội dung'){this.value='';}" onBlur="if (this.value == '') {this.value='Nội dung';}"></textarea></li>
                        
                        <div class="clear"></div>
		                 <input class="button nut" type="button" value="<?=_send?>" onClick="js_submit();" style="padding: 5px;width:100px;height:30px;" />
					<input class="button nut" type="button" value="<?=_reset?>" onClick="document.frm.reset();" style="padding: 5px;width:100px;height:30px;" />
		               
		               </form>
                       <div class="clear"></div>
</div>