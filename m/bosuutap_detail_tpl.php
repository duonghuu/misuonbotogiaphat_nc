<?php
	$d->reset();
	$sql="select * from #_product where id_bosuutap=".$tintuc_detail['id']." order by stt asc,id desc";
	$d->query($sql);
	$product_bosuutap=$d->result_array();
?>
<div class="ui-corner-all custom-corners">
  <div class="ui-bar ui-bar-a"><h3><?=$tintuc_detail['ten_vi']?></h3></div>
  <div class="ui-body ui-body-a">
   <?php for($i=0;$i<count($product_bosuutap);$i++) { ?> 
      <div class="box-sp">
        <p class="sp-img">
          <a href="san-pham/<?=$product_bosuutap[$i]["tenkhongdau"]?>-<?=$product_bosuutap[$i]["id"]?>.html"><img src="<?=_upload_sanpham_l,$product_bosuutap[$i]["thumb"]?>"  /></a>
        </p>
          <h3 class="sp-name"><a href="san-pham/<?=$product_bosuutap[$i]["tenkhongdau"]?>-<?=$product_bosuutap[$i]["id"]?>.html"><h4><?=$product_bosuutap[$i]["ten_vi"]?></h4></a></h3>
          <p class="sp-price">
            <?php
                if($product_bosuutap[$i]['khuyenmai']){ ?>
                  Giá : <span class="span_khuyenmai"><?=$product_bosuutap[$i]['giaban']==0?'Liên hệ':number_format($product_bosuutap[$i]['giaban'],0,0,',').'VNĐ'?></span><br />
                  Khuyến mãi : <span><?=$product_bosuutap[$i]['khuyenmai']==0?'Liên hệ':number_format($product_bosuutap[$i]['khuyenmai'],0,0,',').'VNĐ'?></span>
                <? }else{ ?>
                  Giá : <span><?=$product_bosuutap[$i]['giaban']==0?'Liên hệ':number_format($product_bosuutap[$i]['giaban'],0,0,',').'VNĐ'?></span>
                <? } ?>
          </p>
      </div>
    <?php if(($i+1)%2 ==0) echo '<div class="clear"></div>'; } ?>
    <div class="clear"></div>
  </div>

</div>



 