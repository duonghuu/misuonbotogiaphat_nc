
<div class="ui-corner-all custom-corners">
  <div class="ui-bar ui-bar-a"><h3><?=_khuyenmai?></h3></div>
  <div class="ui-body ui-body-a">
   <?php for($i=0;$i<count($tintuc);$i++) { ?> 
      <div class="box-sp">
        <p class="sp-img">
          <a href="khuyen-mai/<?=$tintuc[$i]['tenkhongdau']?>-<?=$tintuc[$i]['id']?>.html"><img src="<?=_upload_tintuc_l,$tintuc[$i]["thumb"]?>"  /></a>
        </p>
          <h3 class="sp-name"><a href="khuyen-mai/<?=$tintuc[$i]['tenkhongdau']?>-<?=$tintuc[$i]['id']?>.html"><h4><?=$tintuc[$i]["ten_vi"]?></h4></a></h3>
      </div>
    <?php if(($i+1)%2 ==0) echo '<div class="clear"></div>'; } ?>
    <?php if(count($tintuc)>=20) { ?>
    <div class="clear"></div>
      <div data-role="navbar">
          <ul><?=$paging['paging']?></ul>
      </div> 
      <?php } ?>
    <div class="clear"></div>
  </div>

</div>



 