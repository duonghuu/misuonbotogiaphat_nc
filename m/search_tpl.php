
<div class="ui-corner-all custom-corners">
  <div class="ui-bar ui-bar-a"><h3>Kết quả tìm kiếm</h3></div>
  <div class="ui-body ui-body-a">
   <?php for($i=0;$i<count($result_product);$i++) { ?> 
      <div class="box-sp">
      <p class="sp-img">
        <a href="san-pham/<?=$result_product[$i]['tenkhongdau']?>.htm"><img src="<?=_upload_product_l.$result_product[$i]["thumb"]?>"  /></a>
      </p>
        <h3 class="sp-name"><a href="san-pham/<?=$result_product[$i]['tenkhongdau']?>.htm"><h4><?=$result_product[$i]["ten_".$lang]?></h4></a></h3>
    </div>
    <?php if(($i+1)%2 ==0) echo '<div class="clear"></div>'; } ?>
    <div class="clear"></div>
    <div class="paging"><?=$paging?></div>
  </div>

</div>



 