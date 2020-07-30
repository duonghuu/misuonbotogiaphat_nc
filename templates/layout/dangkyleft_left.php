<?php $d->reset();
    $sql_contact = "select noidung_$lang from #_company where type='footer'";
    $d->query($sql_contact);
    $company_contact = $d->fetch_array();
   ?>
<style type="text/css">
  /*hotrotructuyen popup left1*/
.hotrotructuyen_popup_left{position: fixed;z-index: 9999;right: 0px;    top: 100px;}
.title_hotrotructuyen_popup_left{
position: absolute;
  top: 0px;
  left: -43px;
  width: 43px;
  height: 189px;

  border-radius: 5px 0px 0px 5px;
  cursor: pointer;
}
.title_hotrotructuyen_popup_left h2{
  font-family: 'UTMAvoBold';
    font-size: 14px;
    color: white;
    width: 145px;
    text-transform: uppercase;
    transform: rotate(270deg);
    padding-bottom: 120px;
    padding-top: 19px;
} 
.body_hotrotructuyen_popup_left{overflow: hidden;box-sizing:border-box;-webkit-transition:all .4s linear;transition:all .4s linear;min-height: 250px;float: left;width: 0px;}
.box_hotrotructuyen_popup_left{width: 280px;box-sizing:border-box;padding: 15px;background: #ffffff;display: inline-block;z-index: 9999;
    position: relative;}
.text-nhantin1{
  width: 100%;
  height: 33px;
  border: 1px solid #a9a9a9;
  padding: 5px 10px;
  font-family: "RobotoRegular";
  color: #000;
  font-size: 13px;
  font-weight: normal;
  margin-bottom: 10px;
}
.button-gui1{
  width: 100%;
    height: 30px;
    border: 0;
    outline: 0;
    background-color: #c00000;
    font-size: 15px;
    cursor: pointer;
    color: #fff;
}
#frm_mail{
  width: 100%;
}
.title-dangky{
  font-family: MuliSemib;
    color: #c00000;
    font-size: 30px;
    font-weight: normal;
    text-align: center;
    text-transform: uppercase;
}
</style>
<div class="hotrotructuyen_popup_left">
	<div class="title_hotrotructuyen_popup_left"><img src="images/btn-dattiec.png"></div>
	<div class="body_hotrotructuyen_popup_left">
		<div class="box_hotrotructuyen_popup_left">
      <h2 class="title-dangky">Đặt tiệc</h2>
			<form name="frm_mail" id="frm_mail" action="nhan-mail.html" method="post" style="display:inline-block">
		   		<input type="hidden" name="guimail" />
          <div class="col-md-6">
            <input id="txtkey1"  name="ngaythang"  type="text" class="text-nhantin1" placeholder='Ngày đặt tiệc' required/>
          </div>
          <div class="col-md-6">
            <input id="txtkey1"  name="soluong"  type="text" class="text-nhantin1" placeholder='Số lượng khách' required/>
          </div>
          <div class="col-md-6">
            <input id="txtkey1"  name="thoigian"  type="text" class="text-nhantin1" placeholder='Thời gian tổ chức(18h00,18h30,...)' required/>
          </div>
		   		<div class="col-md-6">
		   			<input id="txtkey1"  name="ten"  type="text" class="text-nhantin1" placeholder='Họ tên' required/>
		   		</div>
		   		<div class="col-md-6">
		   			<input id="txtkey1"  name="dienthoai"  type="text" class="text-nhantin1" placeholder='Điện thoại' required/>
		   		</div>
          <input type="hidden" value="datlich" name='datlich' />
		      <input type="submit" class="button-gui1" value="Gửi thông tin" />
			</form>
		</div>
	</div>
</div>
