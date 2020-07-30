
<div class="bg-tieudesanpham"><h2><?=$title_detail?></h2></div>
<div class="maxwidth">
	<div class="product-all row">
		<?php for($i=0;$i<count($album);$i++) { ?>
			<div class="col-md-3 col-sm-6 col-xs-6 product-item">
				<div class="product">
					<div class="hinh-product">
						<a href="<?=$_GET['com']?>/<?=$album[$i]['tenkhongdau']?>.htm"><img class="transition" src="thumb.php?src=<?=_upload_album_l.$album[$i]['photo']?>&w=400&h=350&zc=2&q=80" border="0" alt="<?=$album[$i]['ten_'.$lang]?>" /></a>
					</div>	
		        	<div class="ten-product"><h3><a href="<?=$_GET['com']?>/<?=$album[$i]['tenkhongdau']?>.htm"><?php echo $album[$i]["ten_".$lang] ?></a></h3></div> 
					<div class="clear"></div>
				</div>  
			</div>           
		<?php } ?>
	</div>
</div>

