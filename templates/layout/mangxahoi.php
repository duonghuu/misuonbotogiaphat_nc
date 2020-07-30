<?php
	$d->reset();
	$row_mangxahoi = "select thumb,ten,url from #_lkweb where type='mxh' order by id desc";
	$d->query($row_mangxahoi);
	$row_mangxahoi = $d->result_array();
		
?>
 <?php for($i=0;$i<count($row_mangxahoi);$i++) { ?>  
 	<a href="<?=$row_mangxahoi[$i]['url']?>" target="_blank"><img src="thumb.php?src=<?=_upload_hinhanh_l.$row_mangxahoi[$i]['thumb']?>&w=28&h=28&zc=1&q=80" alt="<?=$row_mangxahoi[$i]['ten']?>" /></a>
 <?php } ?>
