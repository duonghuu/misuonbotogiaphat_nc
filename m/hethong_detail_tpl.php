<div class="ui-corner-all custom-corners">
	<div class="ui-bar ui-bar-a"><h3><?=$title_detail?></h3></div>
	<div class="ui-body ui-body-a">
		<div class="content">    
			<div class="text">
				<h3><?=stripcslashes($row_detail['ten_'.$lang])?></h3>
				 <div class="date"><?=date('d-m-Y h:i:s A',$row_detail['ngaytao'])?></div>
				<?=stripcslashes($row_detail['noidung_'.$lang])?>
				 <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-55a5ff5b3a9222b9" async="async"></script>
                  <script src="https://apis.google.com/js/platform.js" async defer></script>
                  <?=get_social('','share');?>
				
			</div>

			 <div class="othernews">
			 <h3><?=_othernews?></h3>

				<?php foreach($tintuc as $tinkhac){?>

					<a href="<?=$com?>/<?=$tinkhac['tenkhongdau']?>-<?=$tinkhac['id']?>.html" style="text-decoration:none;"><?=$tinkhac['ten_'.$lang]?></a> (<?=make_date($tinkhac['ngaytao'])?>)</br>
					
				<?php }?>

			</div>
		</div>
	</div>
 </div>
