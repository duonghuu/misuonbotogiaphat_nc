<?php
	$d->reset();
	$sql_slider = "select ten_$lang,photo_$lang,link from #_photo where type='slider' and hienthi=1 order by stt,id desc";
	$d->query($sql_slider);
	$result_slider=$d->result_array();
	
?>
<div class="slider1">
	<div class="slider-wrapper theme-default">
	    <div id="slider" class="nivoSlider">
	    	<?php for($i=0;$i<count($result_slider);$i++){?>
					<a href="<?=$result_slider[$i]["link"]?>" target="_blank">
						 <img class="transition" src="<?=_upload_hinhanh_l?>/1366x656x1/<?=$result_slider[$i]['photo_'.$lang]?>"  border="0" alt="<?=$result_slider[$i]['photo_'.$lang]?>" onerror="this.src='images/noimage.gif';"/>
					</a>
				<?php } ?>
	    </div>
	</div>
</div>
<div class="clear"></div>