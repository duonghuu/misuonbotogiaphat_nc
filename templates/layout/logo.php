<?php
	$d->reset();
	$row_logo = "select photo_$lang from #_photo where type='logo' order by id desc";
	$d->query($row_logo);
	$row_logo = $d->result_array();
		
?>

<!-- <div><object data="<?=_upload_hinhanh_l.$row_banner[0]['thumb_'.$lang]?>" type="application/x-shockwave-flash" height="152" width="990">
<param value="<?=_upload_hinhanh_l.$row_banner[0]['thumb_'.$lang]?>" name="movie">
<param value="high" name="quality">
<param value="transparent" name="wmode">
</object></div>-->
<a href="index.html">
	<img class="transition" src="<?=_upload_hinhanh_l?>/164x176x2/<?=$row_logo[0]['photo_'.$lang]?>" border="0" alt="<?=$row_logo[0]['photo_'.$lang]?>" onerror="this.src='images/noimage.gif';"/>
</a>