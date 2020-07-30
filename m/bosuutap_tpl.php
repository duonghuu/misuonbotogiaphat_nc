<div class="ui-corner-all custom-corners">
  <div class="ui-bar ui-bar-a"><h3><?=_bosuutap?></h3></div>
  <div class="ui-body ui-body-a">
    <?php if($tintuc){?>
    <?php for($i=0; $i<count($tintuc); $i++){?>
      <div class="box-sp">
        <p class="sp-img">
          <a href="bo-suu-tap/<?=$tintuc[$i]['tenkhongdau']?>-<?=$tintuc[$i]['id']?>.html"><img src="<?=_upload_tintuc_l,$tintuc[$i]["thumb"]?>"  /></a>
        </p>
          <h3 class="sp-name"><a href="bo-suu-tap/<?=$tintuc[$i]['tenkhongdau']?>-<?=$tintuc[$i]['id']?>.html"><h4><?=$tintuc[$i]["ten_vi"]?></h4></a></h3>

      </div>
      
    <?php if(($i+1)%2 ==0) echo '<div class="clear"></div>'; } ?>
    <?php if(count($tintuc)>=10) { ?>
    <div class="clear"></div>
      <div data-role="navbar">
          <ul><?=$paging['paging']?></ul>
      </div> 
      <?php } ?>
    <?php }else{?><div class="text" style="text-align:center"><b style="color:#FF0; font-size: 17px;">Nội dung chưa cập nhật. Xin vui lòng xem chuyên mục khác.</b></div><?php }?>
  </div>
</div>

