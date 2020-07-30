<?php
	$d->reset();
	$sql_slider = "select ten_$lang,thumb_$lang,link from #_photo where type='slider' order by stt,id desc";
	$d->query($sql_slider);
	$result_slider=$d->result_array();
?>

<div id="slideshow">
	<div id="bx-slideshow">
		<?php for($i=0;$i<count($result_slider);$i++){?>
		<div class="slide">
			<img src="<?=_upload_hinhanh_l.$result_slider[$i]["thumb_".$lang]?>"/>
		</div>
		<?php }?>
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
