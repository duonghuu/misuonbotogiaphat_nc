<div class="ui-corner-all custom-corners">
  <div class="ui-bar ui-bar-a"><h3><?=$title_tcat?></h3></div>
  <div class="ui-body ui-body-a">
    <?php if($tintuc){?>
    <?php for($i=0; $i<count($tintuc); $i++){?>
      <div class="box-news">
        
        <p class="news-img"><a href="quy-trinh-san-xuat/<?=$tintuc[$i]['tenkhongdau']?>-<?=$tintuc[$i]['id']?>.html"><img src="<?=_upload_tintuc_l.$tintuc[$i]['thumb']?>" /></a></p>
        <h3 class="news-name"><a href="quy-trinh-san-xuat/<?=$tintuc[$i]['tenkhongdau']?>-<?=$tintuc[$i]['id']?>.html"><?=$tintuc[$i]['ten']?></a></h3>
        <div class="news-des"><?=$tintuc[$i]['mota']?></div>
      </div><!-- .box-news -->
      
    <?php } ?>
    <?php if(count($tintuc)>=8) { ?>
    <div class="clear"></div>
      <div data-role="navbar">
          <ul><?=$paging['paging']?></ul>
      </div> 
      <?php } ?>
    <?php }else{?><div class="text" style="text-align:center"><b style="color:#FF0; font-size: 17px;">Nội dung chưa cập nhật. Xin vui lòng xem chuyên mục khác.</b></div><?php }?>
  </div>
</div>

