<?php
	$d->reset();
	$result_baiviet="select ten_$lang,noidung_$lang, mota_$lang, photo from #_info where type='about'";
	$d->query($result_baiviet);
	$result_baiviet=$d->fetch_array();
	//var_dump($result_baiviet);

	$d->reset();
	$sql_hinhgt = "select photo,thumb from #_info_photo where type='about' and hienthi='1' order by stt,id desc";
	$d->query($sql_hinhgt);
	$sql_hinhgt=$d->result_array();
	
	$result_tieuchi= "select ten_$lang,tenkhongdau,photo,id,mota_$lang from #_baiviet where hienthi=1 and type = 'tieuchi' order by stt,id desc limit 0,3";
    $d->query($result_tieuchi);
    $result_tieuchi = $d->result_array();

?>	
<div class="maxwidth">
	<div class="col-left">
		<div class="bg-tieudesanpham"><h2><?=$result_baiviet['ten_'.$lang]?></h2></div>
	    <div class="noidung"><?=$result_baiviet['mota_'.$lang]?></div>
	    <div class="xemthem-gt">
	    	<a class="hover" href="about.html">Xem thêm</a>
	    </div>
	</div>
	<div class="col-right">
	    	<?php for ($i=0; $i <count($sql_hinhgt) ; $i++) { ?>
	    		<div class="hinhgioithieu">
	    			<img class="transition" src="thumb.php?src=<?=_upload_hinhanh_l.$sql_hinhgt[$i]['photo']?>&w=267&h=433&zc=1&q=80" onerror="this.src='images/noimage.gif';"/>
	    		</div>
	    	<?php } ?>
	</div>
	<div class="clear"></div>
</div>
