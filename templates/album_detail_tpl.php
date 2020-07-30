
<div class="bg-tieudesanpham"><h2><?=$title_detail?></h2></div>
<div class="maxwidth">

    <div class="product-all photobox">
	    <?php  for($i=0,$count_tintuc=count($album_images);$i<$count_tintuc;$i++) { ?>
	        <div class="item-album">
	            <a href="<?=_upload_album_l.$album_images[$i]['photo']?>"><img class="transition" src="thumb.php?src=<?=_upload_album_l.$album_images[$i]['thumb']?>&w=356&h=238&zc=1&q=80" border="0" alt="<?=$album_images[$i]['ten_'.$lang]?>" /></a> 
	        </div>     
	    <?php } ?>
	</div>            
</div>
