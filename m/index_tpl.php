<div class="ui-corner-all custom-corners">
  <div class="ui-bar ui-bar-a"><h3>Dịch vụ Tiêu biểu</h3></div>
  <div class="ui-body ui-body-a">
    <?php for($i=0; $i<count($result_dichvu_tieubieu); $i++){?>
      <div class="box-sp">
      <p class="sp-img">
        <a href="dich-vu/<?=$result_dichvu_tieubieu[$i]['tenkhongdau']?>.htm"><img src="<?=_upload_baiviet_l.$result_dichvu_tieubieu[$i]["thumb"]?>"  /></a>
      </p>
        <h3 class="sp-name"><a href="dich-vu/<?=$result_dichvu_tieubieu[$i]['tenkhongdau']?>.htm"><h4><?=$result_dichvu_tieubieu[$i]["ten_".$lang]?></h4></a></h3>
    </div>
    <?php if(($i+1)%2 ==0) echo '<div class="clear"></div>'; } ?>
    <div class="clear"></div>
  </div>
</div>
<div class="ui-corner-all custom-corners">
  <div class="quangcao">
    <img src="thumb.php?src=<?=_upload_hinhanh_l.$row_quangcao1[0]['photo_'.$lang]?>&w=1366&h=444&zc=1&q=80" alt="<?=$row_quangcao1[0]['photo_'.$lang]?>" />
</div>
</div>
<div class="ui-corner-all custom-corners">
  <div class="ui-bar ui-bar-a"><h3>Dịch vụ của chúng tôi</h3></div>
  <div class="ui-body ui-body-a">
    <?php for($i=0; $i<count($result_dichvu_noibat); $i++){?>
      <div class="box-sp">
      <p class="sp-img">
        <a href="dich-vu/<?=$result_dichvu_noibat[$i]['tenkhongdau']?>.htm"><img src="<?=_upload_baiviet_l.$result_dichvu_noibat[$i]["thumb"]?>"  /></a>
      </p>
        <h3 class="sp-name"><a href="dich-vu/<?=$result_dichvu_noibat[$i]['tenkhongdau']?>.htm"><h4><?=$result_dichvu_noibat[$i]["ten_".$lang]?></h4></a></h3>
    </div>
    <?php if(($i+1)%2 ==0) echo '<div class="clear"></div>'; } ?>
    <div class="clear"></div>
  </div>
</div>

<div class="ui-corner-all custom-corners">
  <div class="ui-bar ui-bar-a"><h3>Sản phẩm Tiêu biểu</h3></div>
  <div class="ui-body ui-body-a">
    <?php for($i=0; $i<count($result_sanphamnoibat); $i++){?>
      <div class="box-sp">
      <p class="sp-img">
        <a href="san-pham/<?=$result_sanphamnoibat[$i]['tenkhongdau']?>.htm"><img src="<?=_upload_product_l.$result_sanphamnoibat[$i]["thumb"]?>"  /></a>
      </p>
        <h3 class="sp-name"><a href="san-pham/<?=$result_sanphamnoibat[$i]['tenkhongdau']?>.htm"><h4><?=$result_sanphamnoibat[$i]["ten_".$lang]?></h4></a></h3>
        <p class="sp-price">Giá: <font><?=($result_sanphamnoibat[$i]['giaban']>0) ? number_format($result_sanphamnoibat[$i]['giaban'],0,',','.').' đ' : "Liên hệ";  ?></font></p>
    </div>
    <?php if(($i+1)%2 ==0) echo '<div class="clear"></div>'; } ?>
    <div class="clear"></div>
  </div>
</div>
<div class="ui-corner-all custom-corners">
  <div class="ui-bar ui-bar-a"><h3>Tin tức</h3></div>
  <div class="ui-body ui-body-a">
    
      <?php if($result_tintuc_noibat){?>

            <?php for($i=0; $i<count($result_tintuc_noibat); $i++){?>

              <div class="box-news">
                
                <p class="news-img"><a href="tin-tuc/<?=$result_tintuc_noibat[$i]['tenkhongdau']?>.htm"><img src="<?=_upload_baiviet_l.$result_tintuc_noibat[$i]['thumb']?>" /></a></p>
                <h3 class="news-name"><a href="tin-tuc/<?=$result_tintuc_noibat[$i]['tenkhongdau']?>.htm"><?=$result_tintuc_noibat[$i]['ten_'.$lang]?></a></h3>
                <div class="news-des"><?=substr($result_tintuc_noibat[$i]['mota_'.$lang], 0,100)?></div>
              </div><!-- .box-news -->

            
            <?php } ?>
    <div class="clear"></div>                        
    <div class="paging"><?=$paging?></div> 
    <?php }else{?><div class="text" style="text-align:center"><b style="color:#FF0; font-size: 17px;">Nội dung chưa cập nhật. Xin vui lòng xem chuyên mục khác.</b></div><?php }?>
  </div>
</div>

<div class="ui-corner-all custom-corners">
  <div class="ui-bar ui-bar-a"><h3>Video</h3></div>
  <div class="ui-body ui-body-a">
    <?php include _template."layout/video.php"; ?>
  </div>
</div>
<div class="ui-corner-all custom-corners">
  <div class="ui-bar ui-bar-a"><h3>Đặt lịch hẹn</h3></div>
  <div class="ui-body ui-body-a">
    <?php include _template."layout/newsletter.php"; ?>
  </div>
</div>