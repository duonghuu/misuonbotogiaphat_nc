<?php

	$d->reset();
	$sql = "select photo_vi,link from #_photo where hienthi=1 and type='slider' order by stt,id desc";
	$d->query($sql);
	$slide_s = $d->result_array();
?>
<div id="slideshow">
	<div id="bx-slideshow">
		
	 <?php for($i=0,$count_bg=count($slide_s);$i<$count_bg;$i++){?>
            <a target="_blank" href="<?=$slide_s[$i]['link']?>">
                <img src="<?=_upload_hinhanh_l.$slide_s[$i]['photo_vi']?>" alt="slide "  />
            </a>
        <?php } ?>
		   
	</div>
</div>	
<!-- #slideshow -->


<script type="text/javascript" >
$(document).ready(function(){
	var slider = $('#bx-slideshow').bxSlider({
		mode: 'fade',
		controls: true,
		minSlides: 1,
		maxSlides: 1,
		responsive: true,
		touchEnabled: true,
		pager: false,
		auto: true
	});

});
</script>
