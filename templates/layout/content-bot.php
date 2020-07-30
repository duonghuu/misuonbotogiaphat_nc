  <div class="bg-tieudesanpham"><h2><?=_tintuc?> và Video Clip</h2></div>
<div class="row">
  <div class="col-left-tintuc">
     <?php include _template."layout/video.php"; ?>
  </div>
  <div class="col-right-contenbot">
    <ul class="slicktintnuc">
        <?php for($i=0;$i<count($result_tintuc_noibat);$i++) {?>
            <li>
              <div class="item-tintuc">
                <div class="bao-tintuc">
                  <div class="hinh-tintuc">
                      <a href="tin-tuc/<?=$result_tintuc_noibat[$i]['tenkhongdau']?>.htm"><img class="hinhanh" src="thumb.php?src=<?=_upload_baiviet_l.$result_tintuc_noibat[$i]['photo']?>&w=84&h=84&zc=1&q=80" alt="<?=$result_tintuc_noibat[$i]['ten_'.$lang]?>" /></a>
                  </div>
                  <div class="noidung-tintuc-index">
                      <h3 class="hover"><a href="tin-tuc/<?=$result_tintuc_noibat[$i]['tenkhongdau']?>.htm"><?=$result_tintuc_noibat[$i]['ten_'.$lang]?></a></h3>
                      <span>By Admin</span>
                      <p><?=$result_tintuc_noibat[$i]['mota_'.$lang]?></p>
                  </div>
                  <div class="clear"></div>
                </div>
              </div>
            </li>
        <?php } ?>
      </ul>
  </div>
 </div> 
<div class="clear"></div> 