<div class="ui-corner-all custom-corners">
	<div class="ui-bar ui-bar-a"><h3>Dịch vụ</h3></div>
	<div class="ui-body ui-body-a">
	<div class="text">
		<?php if($tintuc){?>
		<?php for($i=1; $i<=count($tintuc); $i++){?>
			<div class="box-about">
				
				<div class="box-about-img transitionAll"><a href="http://<?=$config_url?>/dich-vu/<?=$tintuc[$i-1]['tenkhongdau']?>.html" title="<?=stripcslashes($tintuc[$i-1]['ten_'.$lang])?>"><img alt="<?=stripcslashes($tintuc[$i-1]['alt_img'])?>" src="http://<?=$config_url.'/'._upload_tintuc_l.$tintuc[$i-1]['thumb']?>"></a></div>
				<div class="box-about-name"><h3><a href="http://<?=$config_url?>/dich-vu/<?=$tintuc[$i-1]['tenkhongdau']?>.html" title="<?=stripcslashes($tintuc[$i-1]['ten_'.$lang])?>" class="transitionAll"><?=stripcslashes($tintuc[$i-1]['ten_'.$lang])?></a></h3></div>
				<div class="box-about-mota"><?=_substr(stripcslashes($tintuc[$i-1]['mota_'.$lang]),200)?></div>
				
			</div><!-- .box-news -->
			
		<?php } ?>
		<div class="pagination"><?=$paging['paging']?></div>
		<?php }else{?><div class="text" style="text-align:center"><b style="color:#F00; font-size: 17px;">Nội dung chưa cập nhật. Xin vui lòng xem chuyên mục khác.</b></div><?php }?>
		</div>
</div>
</div>


