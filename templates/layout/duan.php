<?php

	$result_duan= "select ten_$lang,tenkhongdau,mota_$lang,thumb,id,ngaytao from #_baiviet where hienthi=1 and type = 'congtrinh' and noibat!=0 order by stt,id desc";
    $d->query($result_duan);
    $result_duan = $d->result_array();
?>
<div class="tieude-bot"><h2>Công trình tiêu biểu</h2></div>
<?php for($i=0;$i<count( $result_duan);$i++) { ?>
<div class="duan" <?php if(($i+1)%5==0) echo 'style="margin-right:0px"'; ?>>
  	<a href="cong-trinh/<?=$result_duan[$i]['tenkhongdau']?>.htm"><img src="<?=_upload_baiviet_l.$result_duan[$i]['thumb']?>" onerror="this.src='images/noimage.gif';"/></a>
    <h3><a href="cong-trinh/<?=$result_duan[$i]['tenkhongdau']?>.htm"><?=$result_duan[$i]['ten_'.$lang]?></a></h3>
</div>  
<?php 
if(($i+1)%5==0) echo "<div class='clear'></div>";} 
?>
 