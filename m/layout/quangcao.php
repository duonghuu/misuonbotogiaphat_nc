<?php    
	$d->reset();
	$sql_slogan="select mota from #_about";
	$d->query($sql_slogan);
	$slogan=$d->fetch_array();
	if(!empty($slogan)){
?>

<div class="text">
    <ul id="scroller">
    	<li><?=$slogan['mota']?></li>
    </ul>
</div>

<?php } ?>

<div class="hotro">
    <div class="ht"><img src="images/dt_ht.png" width="20" height="24" alt="dienthoai" /><div>Điện thoại hỗ trợ</div></div>
    <div class="ht" style="margin: 0px 20px;"><img src="images/yh.png" width="27" height="24" alt="yahoo" /><div>Hỗ trợ trực tuyến</div></div>
    
    <?php    
		$d->reset();
		$sql_hotro="select ten,yahoo,skype,dienthoai from #_yahoo where hienthi=1 order by stt,id desc";
		$d->query($sql_hotro);
		$result_hotro=$d->result_array();
		if(!empty($result_hotro)){
	?>
	 
    <div class="sub_hotro">
    	<?php foreach($result_hotro as $hotro_item){ ?>
            <div class="dong_hotro">
                <div style="float:left; margin-right:10px;">
                <?=$hotro_item['ten']?> : <span style="color:red; font-weight: bold;"><?=$hotro_item['dienthoai']?></span>
                </div>
                <a href="skype:<?=$hotro_item['skype']?>?chat"><img src="images/skype.png" width="100" height="25" alt="skype" /></a>
                
                
                <a href="ymsgr:sendIM?<?=$hotro_item['yahoo']?>"><img src="http://opi.yahoo.com/online?u=<?=$hotro_item['yahoo']?>&amp;m=g&amp;t=2" class="yahoo" width="100" height="25" alt="yahoo" /></a>
                
                <div class="clear"></div>
            </div>
        <?php } ?>
    </div> 
    <?php } ?>
</div>