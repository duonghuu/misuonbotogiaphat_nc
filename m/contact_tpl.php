<script type="text/javascript" src="js/my_script.js"></script>
<script type="text/javascript">
function js_submit(){
	if(isEmpty(document.getElementById('ten'), "Xin nhập Họ tên.")){
		document.getElementById('ten').focus();
		return false;
	}
	
	if(isEmpty(document.getElementById('diachi'), "Xin nhập địa chỉ.")){
		document.getElementById('diachi').focus();
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
	
	if(isEmpty(document.getElementById('tieude'), "Xin nhập Chủ đề.")){
		document.getElementById('tieude').focus();
		return false;
	}
	
	if(isEmpty(document.getElementById('noidung'), "Xin nhập Nội dung.")){
		document.getElementById('noidung').focus();
		return false;
	}
	
	document.frm.submit();
}
</script>

<div class="ui-corner-all custom-corners">
	<div class="ui-bar ui-bar-a"><h3><?= _lienhe ?></h3></div>
	<div class="ui-body ui-body-a">
		<div><?=$company_contact['noidung_'.$lang];?> </div>
		<div id="map_canvas"></div>
		<div>
			<form method="post" name="frm" action="index.php?com=lien-he">

				<table width="100%" cellpadding="5" cellspacing="0" border="0" class="tablelienhe ">
					<tr>
						<td><input name="ten" type="text" class="input" id="ten" size="40" placeholder="<?=_hovaten?>"/></td>
					</tr>                        
					<tr>
						<td><input name="diachi" id="diachi" type="text"  class="input" size="40" placeholder="<?=_diachi?>" /></td>
					</tr>
					<tr>
						<td><input name="dienthoai" type="text" class="input" id="dienthoai" size="40" placeholder="<?=_dienthoai?>" /></td>
					</tr>
					<tr>
						<td><input name="email" id="email" type="text" class="input" size="40" placeholder="Email" /></td>
					</tr>                                                  
					<tr>
						<td><input name="tieude" type="text" class="input" id="tieude" size="40" placeholder="<?=_chude?>" /></td>
					</tr>                         
					<tr>
						<td><textarea name="noidung" cols="40" rows="5" class="ta_noidung" id="noidung" placeholder="<?=_noidung?>" ></textarea></td>
					</tr>
					<tr>
					 
						<td> 
							<input  class="button" style="background:#0065b3" type="button" value="<?=_gui?>" onclick="js_submit();" />
							<input class="button" style="background:#0065b3" type="button" value="<?=_nhaplai?>" onclick="document.frm.reset();" />						 
						</td>
					</tr>
				</table>   
			</form>
		</div>
	</div>
</div>


            <script type="text/javascript">
            var map;
            var infowindow;
            var marker= new Array();
            var old_id= 0;
            var infoWindowArray= new Array();
            var infowindow_array= new Array();function initialize(){
               var defaultLatLng = new google.maps.LatLng(<?=$row_setting['toado']?>);
               var myOptions= {
            	   zoom: 16,
            	   center: defaultLatLng,
            	   scrollwheel : false,
            	   mapTypeId: google.maps.MapTypeId.ROADMAP
            	};
            	map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);map.setCenter(defaultLatLng);			    
               /* Dia chi 1 */
               var arrLatLng = new google.maps.LatLng(<?=$row_setting['toado']?>);
               infoWindowArray[7895] = '<div class="map_description"><div class="map_title" style="color: #30A602; font-weight:bold;"><?=$row_setting['ten_'.$lang]?></div><div><span><?=$row_setting['diachi_'.$lang]?></span></div></div>';
               loadMarker(arrLatLng, infoWindowArray[7895], 7895);
               
               moveToMaker(7895);}function loadMarker(myLocation, myInfoWindow, id){marker[id] = new google.maps.Marker({position: myLocation, map: map, visible:true});
               var popup = myInfoWindow;infowindow_array[id] = new google.maps.InfoWindow({ content: popup});google.maps.event.addListener(marker[id], 'mouseover', function() {if (id == old_id) return;if (old_id > 0) infowindow_array[old_id].close();infowindow_array[id].open(map, marker[id]);old_id = id;});google.maps.event.addListener(infowindow_array[id], 'closeclick', function() {old_id = 0;});}function moveToMaker(id){var location = marker[id].position;map.setCenter(location);if (old_id > 0) infowindow_array[old_id].close();infowindow_array[id].open(map, marker[id]);old_id = id;}
               google.maps.event.addDomListener(window, "load", initialize);
              </script>
 
