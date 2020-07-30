<div class="ui-corner-all custom-corners">
	<div class="ui-bar ui-bar-a"><h3>dịch vụ</h3></div>
	<div class="ui-body ui-body-a">
	<div class="content">    
   <div class="text">
		<h3><?=stripcslashes($tintuc_detail['ten_'.$lang])?></h3>
			<?=stripcslashes($tintuc_detail['noidung_'.$lang])?>
		</div>
		<div class="text">
			<div style="float:left; width:65px;">
			<!-- Place this tag where you want the +1 button to render -->
			<g:plusone size="medium"></g:plusone>
			<!-- Place this tag in your head or just before your close body tag -->
			<script type="text/javascript" src="https://apis.google.com/js/plusone.js">
			 {lang: 'vi'}
			</script>
			</div>
			<div style="float:left; width:85px;">
			<script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>

			  <a href="http://twitter.com/share" class="twitter-share-button">Tweet</a>
			  </div>
			
			
				<div class="fb-like" data-href="http://<?=$config_url.'/dich-vu/'.$tintuc_detail['tenkhongdau'].'.html';?>" data-send="false" data-width="450" data-show-faces="false"></div>
		</div>
        
         <div class="othernews">
         <h3>Các bài viết khác</h3>
        
			<?php foreach($tintuc_khac as $tinkhac){?>
				<a href="dich-vu/<?=$tinkhac['tenkhongdau']?>.html" style="text-decoration:none;"><?=$tinkhac['ten_'.$lang]?></a> (<?=make_date($tinkhac['ngaytao'])?>)</br>
			<?php }?>
		</div>
	</div>
	

 </div></div>
