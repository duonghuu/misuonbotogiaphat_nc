<script type="text/javascript" src="admin/media/scripts/my_script.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
		   <script type="text/javascript">
		   var map;
		   var infowindow;
		   var marker= new Array();
		   var old_id= 0;
		   var infoWindowArray= new Array();
		   var infowindow_array= new Array();function initialize(){
			   var defaultLatLng = new google.maps.LatLng(<?=$company_contact['toado']?>);
			   var myOptions= {
				   zoom: 16,
				   center: defaultLatLng,
				   scrollwheel : false,
				   mapTypeId: google.maps.MapTypeId.ROADMAP
				};
				map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);map.setCenter(defaultLatLng);			    
			   var arrLatLng = new google.maps.LatLng(<?=$company_contact['toado']?>);
			   infoWindowArray[7895] = '<div class="map_description"><div class="map_title"><?=$company_contact['ten']?></div><div><?=$company_contact['mota_'.$lang]?></div></div>';
			   loadMarker(arrLatLng, infoWindowArray[7895], 7895);
			   
			   moveToMaker(7895);}function loadMarker(myLocation, myInfoWindow, id){marker[id] = new google.maps.Marker({position: myLocation, map: map, visible:true});
			   var popup = myInfoWindow;infowindow_array[id] = new google.maps.InfoWindow({ content: popup});google.maps.event.addListener(marker[id], 'mouseover', function() {if (id == old_id) return;if (old_id > 0) infowindow_array[old_id].close();infowindow_array[id].open(map, marker[id]);old_id = id;});google.maps.event.addListener(infowindow_array[id], 'closeclick', function() {old_id = 0;});}function moveToMaker(id){var location = marker[id].position;map.setCenter(location);if (old_id > 0) infowindow_array[old_id].close();infowindow_array[id].open(map, marker[id]);old_id = id;}</script>
               <div class="bg-tieudesanpham" style="background-repeat:no-repeat"><h4><?= _bando ?></h4></div>
<div class="product-all">
               <div id="map_canvas"></div>
               </div>
               <?php

$d->reset();
			$sql_contact = "select ten,email,toado,noidung_$lang,mota_$lang from #_lienhe ";
			$d->query($sql_contact);
			$company_contact = $d->fetch_array();			   ?>