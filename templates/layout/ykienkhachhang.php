<?php	
    $d->reset();
    $result_ykien="select ten_$lang,tenkhongdau,id,mota_$lang,photo from #_baiviet where hienthi=1 and noibat!=0 and type='ykien' order by stt,id desc ";  
    $d->query($result_ykien);  
    $result_ykien=$d->result_array();

?>
<div id="ykienkhachhang">
  <div class="maxwidth">
    <div class="bg-tieudesanpham"><h2>Ý kiến khách hàng</h2></div>
    <div class="baoykien">
      <ul class="slickykien">
        <?php for ($i=0; $i <count($result_ykien) ; $i++) { ?>
          <li>
             <div class="item-ykien">
              <div class="noidung-ykien">
                <img src="thumb.php?src=<?=_upload_baiviet_l.$result_ykien[$i]['photo']?>&w=124&h=124&zc=1&q=80" onerror="this.src='images/noimage.gif';"/>
                <p><?=substr($result_ykien[$i]['mota_'.$lang],0,168)?></p>
                <h2><font>---</font> <?=$result_ykien[$i]['ten_'.$lang]?></h2>
              </div>
            </div>
          </li>
        <?php } ?>
      </ul>
      
    </div>
  </div>
</div>          