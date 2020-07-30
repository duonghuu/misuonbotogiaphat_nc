
<div class="ui-corner-all custom-corners">
  <div class="ui-bar ui-bar-a"><h3>Thông báo</h3></div>
  <div class="ui-body ui-body-a">
   <?php for($i=0;$i<count($tintuc);$i++) { ?> 
      <div class="box-news">   
        <p class="news-img"><a href="thong-bao/<?=$tintuc[$i]['tenkhongdau']?>-<?=$tintuc[$i]['id']?>.html"><img src="<?=_upload_tintuc_l.$tintuc[$i]['thumb']?>" /></a></p>
        <h3 class="news-name"><a href="thong-bao/<?=$tintuc[$i]['tenkhongdau']?>-<?=$tintuc[$i]['id']?>.html"><?=$tintuc[$i]['ten_'.$lang]?></a></h3>
        <div class="news-des"><?=$tintuc[$i]['mota_'.$lang]?></div>
      </div><!-- .box-news -->
    <?php } ?>
    <?php if(count($tintuc)>=12) { ?>
    <div class="clear"></div>
      <div data-role="navbar">
          <ul><?=$paging['paging']?></ul>
      </div> 
      <?php } ?>
    <div class="clear"></div>
  </div>

</div>



 