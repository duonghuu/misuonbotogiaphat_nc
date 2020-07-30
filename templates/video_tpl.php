<div class="maxwidth">

    <div class="bg-tieudesanpham"><h2>Video</h2></div>
    <div class="product-all">
        <?php for($i=0;$i<count($tintuc);$i++) { ?>
        <div class="product" <?php if(($i+1)%4==0) echo'style="margin-right:0px"'; ?>>
            <a data-img="http://img.youtube.com/vi/<?=youtobi($tintuc[$i]['links'])?>/0.jpg" href="video/<?=$tintuc[$i]['tenkhongdau']?>.htm"><img src="http://img.youtube.com/vi/<?=youtobi($tintuc[$i]['links'])?>/0.jpg"></a>
            <h3 class="ten-product"><a href="video/<?=$tintuc[$i]['tenkhongdau']?>.htm"><?php echo $tintuc[$i]["ten_".$lang] ?></a></h3> 
        </div>       
        <?php 
        if(($i+1)%4==0) echo "<div class='clear'></div>";} 
        ?>
        <div class="clear"></div>
        <div class="paging"><?=$paging?></div> 
    </div> 
</div>          