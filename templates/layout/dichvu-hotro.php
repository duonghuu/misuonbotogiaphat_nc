<?php
    $result_dichvuht= "select mota_$lang,photo,ten_$lang,tenkhongdau,ngaytao from #_baiviet where hienthi=1 and type = 'dichvu' and noibat!=0 order by stt,id desc";
    $d->query($result_dichvuht);
    $result_dichvuht = $d->result_array();

   
  
?>
<div class="maxwidth">
 <div class="tieude-httt">
      <h2><a href='tin-tuc.html'>DỊCH VỤ HỖ TRỢ</a></h2>
  </div>
   <div class="imagecontenbot"><img src="images/gachchan_hotro.png"></div>
  <div class="gachduoihttt"></div>
<?php for($i=0;$i<count($result_dichvuht);$i++) { ?>
      <div class="khoi" <?php if(($i+1)%3==0) echo'style="margin-right:0px"'; ?>>
        <div class="imagecontenbot"><a href="<?=$_GET['com']?>/<?=$result_dichvuht[$i]['tenkhongdau']?>.htm"><img src="thumb.php?src=<?=_upload_baiviet_l.$result_dichvuht[$i]['photo']?>&w=368&h=200&zc=1&q=80" alt="<?=$result_dichvuht[$i]['ten_'.$lang]?>"></a></div>
        <p><?php echo $result_dichvuht[$i]['ten_vi']; ?></p>
        <div class="gachduoikhoi"></div>
        <p><?php echo $result_dichvuht[$i]['mota_vi']; ?></p>
        <div class="xemthemhttt"><a href="dich-vu.html"><img src="images/button_xemthemdv.png"></a></div>
      </div>

<?php if(($i+1)%3==0) echo "<div class='clear'></div>";} ?>
</div>

<div class="clear"></div>