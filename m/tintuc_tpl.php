<div class="ui-corner-all custom-corners">
  <div class="ui-bar ui-bar-a"><h3>Bản vẽ thiết kế</h3></div>
  <div class="ui-body ui-body-a">
   <?php for($i=0;$i<count($result_tintuc);$i++) { ?> 
      <div class="box-sp">
      <p class="sp-img">
        <a href="ban-ve/<?=$result_tintuc[$i]['tenkhongdau']?>/<?=$result_tintuc[$i]['id']?>.html"><img src="<?=_upload_product_l.$result_tintuc[$i]['thumb']?>"  /></a>
      </p>
        <h3 class="sp-name"><a href="ban-ve/<?=$result_tintuc[$i]['tenkhongdau']?>/<?=$result_tintuc[$i]['id']?>.html"><?=$result_tintuc[$i]['ten_'.$lang]?></a></h3>
    </div>
    <?php if(($i+1)%2 ==0) echo '<div class="clear"></div>'; } ?>
    <div class="clear"></div>
    <?php if(count($result_tintuc)>=8) { ?>
    <div data-role="navbar">
        <ul><?=$paging['paging']?></ul>
    </div> 
    <?php } ?>
  </div>
</div>

