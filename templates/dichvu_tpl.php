<div class="bg-tieudesanpham"><h2><?=$title_detail?></h2></div>
<div class="maxwidth">
	<div class="product-all">
	<?php for($i=0;$i<count($tintuc);$i++) { ?>
	     <div class="item-dichvu item-dichvu-detail">
                    <div class="hinh-dichvu" <?php if(($i+1)%3==0) echo'style="margin-right:0px"'; ?>>
                        <a href="<?=$_GET['com']?>/<?=$tintuc[$i]['tenkhongdau']?>.htm"><img class="transition" src="thumb.php?src=<?=_upload_baiviet_l.$tintuc[$i]['photo']?>&w=357&h=240&zc=2&q=80" border="0" alt="<?=$tintuc[$i]['ten_'.$lang]?>" /></a>
                    </div> 
                    <div class="noidung-dichvu">
                        <h3 class="ten-dichvu"><a href="<?=$_GET['com']?>/<?=$tintuc[$i]['tenkhongdau']?>.htm"><?php echo $tintuc[$i]["ten_".$lang] ?></a></h3>
                    </div>
                    
                </div>
	<?php 
	if(($i+1)%3==0) echo "<div class='clear'></div>";} 
	?>
	    <div class="clear"></div>
	    <div class="paging"><?=$paging?></div> 
	</div>
</div>


    
        
                    
 
                