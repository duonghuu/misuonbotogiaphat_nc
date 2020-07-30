<?php
	$d->reset();
	$row_banner = "select photo_$lang from #_photo where type='banner' order by id desc";
	$d->query($row_banner);
	$row_banner = $d->result_array();
		
?>

<!-- <div><object data="<?=_upload_hinhanh_l.$row_banner[0]['thumb_'.$lang]?>" type="application/x-shockwave-flash" height="152" width="990">
<param value="<?=_upload_hinhanh_l.$row_banner[0]['thumb_'.$lang]?>" name="movie">
<param value="high" name="quality">
<param value="transparent" name="wmode">
</object></div>-->
<a href="index.html"><img src="thumb.php?src=<?=_upload_hinhanh_l.$row_banner[0]['photo_'.$lang]?>&w=600&h=113&zc=1&q=80" alt="<?=$row_banner[0]['photo_'.$lang]?>" /></a>