<div class="ui-corner-all custom-corners">
  <div class="ui-bar ui-bar-a"><h3><?=$title_detail?></h3></div>
  <div class="ui-body ui-body-a">
    <?php if($tintuc){?>
    <?php for($i=0; $i<count($tintuc); $i++){?>
      <div class="box-news">
        
        <p class="news-img"><a href="<?=$_GET['com']?>/<?=$tintuc[$i]['tenkhongdau']?>.htm"><img src="<?=_upload_baiviet_l.$tintuc[$i]['thumb']?>" /></a></p>
        <h3 class="news-name"><a href="<?=$_GET['com']?>/<?=$tintuc[$i]['tenkhongdau']?>.htm"><?=$tintuc[$i]['ten_'.$lang]?></a></h3>
        <div class="news-des"><?=$tintuc[$i]['mota_'.$lang]?></div>
      </div><!-- .box-news -->
      
    <?php } ?>
    <div class="clear"></div>                        
    <div class="paging"><?=$paging?></div> 
    <?php }else{?><div class="text" style="text-align:center"><b style="color:#FF0; font-size: 17px;">Nội dung chưa cập nhật. Xin vui lòng xem chuyên mục khác.</b></div><?php }?>
  </div>
</div>

