<script type="text/javascript" src="js/crawler.js"></script>
<?php
	$d->reset();
	$result_doitac="select link,thumb_vi from #_photo where hienthi =1 and type='doitac' order by stt,id desc";
	$d->query($result_doitac);
	$result_doitac=$d->result_array();
?>

<script type="text/javascript">
marqueeInit({
	uniqueid: 'mycrawler2',
	style: {
		'padding-left': '0px',
		
	},
	inc: 5, //speed - pixel increment for each iteration of this marquee's movement
	mouse: 'cursor driven', //mouseover behavior ('pause' 'cursor driven' or false)
	moveatleast: 1,
	neutral: 150,
	savedirection: true,
	random: true
});
</script>            
<div class="marquee" id="mycrawler2">
	<?php for($i=0,$count=count($result_doitac);$i<$count;$i++) { ?>
		<a href="<?=$result_doitac[$i]['link']?>"><img src="<?=_upload_hinhanh_l.$result_doitac[$i]['thumb_vi']?>" /></a>
	<?php } ?>
</div>				
	



    
 
