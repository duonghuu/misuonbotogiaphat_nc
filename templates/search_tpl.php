<div class="bg-tieudesanpham"><h2><?=$title_detail?></h2></div>
<div class="product-all">
    <?php  for($i=0,$count_tintuc=count($result_product);$i<$count_tintuc;$i++) { ?>
        <div class="product">
            <div class="hinh-product">
                <a href="dich-vu/<?=$result_product[$i]['tenkhongdau']?>.htm"><img class="transition" src="thumb.php?src=<?=_upload_baiviet_l.$result_product[$i]['photo']?>&w=400&h=350&zc=2&q=80" border="0" alt="<?=$result_product[$i]['ten_'.$lang]?>" /></a>
            </div>   
            <h3 class="ten-product"><a href="dich-vu/<?=$result_product[$i]['tenkhongdau']?>.htm"><?php echo $result_product[$i]["ten_".$lang] ?></a></h3>  
            <div class="mota-product"><font><?php echo $result_product[$i]['mota_vi'] ?></font></div>
        </div>     
    <?php } ?>
    <div class="clear"></div>
</div>            

