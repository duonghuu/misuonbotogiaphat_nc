<div class="ui-corner-all custom-corners">
	<div class="ui-bar ui-bar-a"><h3><?=$title_cat?></h3></div>
	<div class="ui-body ui-body-a">
		<div class="text">

			<?=$tintuc_detail['noidung'.$lang]?>
		
		</div>
	</div>
</div>

<div class="ui-corner-all custom-corners">
	<div class="ui-bar ui-bar-a"><h3><?=_tinlienquan?></h3></div>
	<div class="ui-body ui-body-a">
		<?php if($tintuc_khac){?>
		<ul class="other_nav">
		<?php for($i=0;$i<count($tintuc_khac); $i++){?>
			<li><a href="khach-hang/<?=$tintuc_khac[$i]['id']?>_<?=$tintuc_khac[$i]['tenkhongdau']?>.html" class="transitionAll"><?=$tintuc_khac[$i]['ten'.$lang]?><span>(<?=make_date($tintuc_khac[$i]['ngaytao'])?>)</a></li>
		<?php } ?>
		</ul>
		<?php }else{?><div class="text" style="text-align:center"><b style="color:#F00; font-size: 17px;">Nội dung chưa cập nhật. Xin vui lòng xem chuyên mục khác.</b></div><?php } ?>

	</div>
</div>

