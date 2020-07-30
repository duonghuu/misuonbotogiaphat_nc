<div class="maxwidth">
	<div class="bg-tieudesanpham"><h2>Liên Hệ</h2></div>
	<div class="product-all">   
		<div id="contact">        
		    <div><?=$company_contact['noidung_'.$lang];?>  </div>
		    <div class="clear" style="border-bottom:1px solid #999; margin-bottom:20px; ">&nbsp;</div>   
			<form method="post" name="frm" action="" enctype="multipart/form-data">
				
	      		<table width="100%" cellpadding="5" cellspacing="0" border="0" class="tablelienhe">
	                <tr>
	                    <td height="33px" class="title-f"><?=_hovaten?><span style="color:red">*</span></td>
						<td><input name="ten" type="text" class="inputc" id="ten" size="50" required/></td>
	                </tr>                        
	                <tr>
		                <td height="33px" class="title-f"><?=_diachi?><span style="color:red">*</span></td>
						<td><input id="diachi" name="diachi" type="text"  class="inputc" size="50" required/></td>
	                </tr>
	                <tr>
		                <td height="33px" class="title-f"><?=_dienthoai?><span style="color:red">*</span></td>
						<td><input name="dienthoai" type="text" class="inputc" id="dienthoai" size="50" required/></td>
	                </tr>
	                <tr>
		                <td height="33px" class="title-f">Email<span style="color:red">*</span></td>
						<td><input name="email" type="text" class="inputc" size="50"  required/></td>
	                </tr>                                                  
	                <tr>
		                <td height="33px" class="title-f"><?=_chude?><span style="color:red">*</span></td>
						<td>
						<input name="tieude" type="text" class="inputc" id="tieude" size="50"  required/>
						</td>
	                </tr>                         
	                <tr>
		                <td height="95px" class="title-f"><?=_noidung?><span style="color:red">*</span></td>
						<td>
		                <textarea name="noidung" cols="50" rows="5" class="ta_noidung" id="noidungc" style="background-color:#FFFFFF; color:#666666;" required></textarea>
		                </td>
	                </tr>
	                <tr>
	                	<td>
			                 
			              </td>
			          	<td>
			                  <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
			              </td>

	                </tr>
	                 <tr>
		                <td>&nbsp;</td>
		                <td height="43"> 
		                    <input class="button button-n" type="submit" value="<?=_gui?>"/>
		                    <input class="button button-n" type="button" value="<?=_nhaplai?>" onclick="document.frm.reset();" /> </td>
					</tr>
	             </table>                      
			</form>
	    </div>  
	     <div id="map_canvas"></div>    
	     <div class="clear"></div>            
	</div> 
</div>

<div class="clear"></div>  

<!-- <script type="text/javascript">
function dcv_random(a){
  for(var b="",c=0;c<a;c++)b+="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890".charAt(Math.floor(Math.random()*62));
  return b
}
function nv_change_captcha(a,b){
  var c=document.getElementById(a);
  nocache=dcv_random(10);
  c.src="captcha_image.php?&nocache="+nocache;  
  document.getElementById(b).value="";return!1
}
</script>    -->