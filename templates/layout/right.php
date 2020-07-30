<?php			
	$yahoo="select * from #_yahoo where hienthi =1 order by stt,id desc";
	$d->query($yahoo);
	$yahoo=$d->result_array();
	
	$d->reset();
	$result_quangcao="select mota,photo,id from #_quangcao where hienthi=1 order by stt,id desc ";	
	$d->query($result_quangcao);	
	$result_quangcao=$d->result_array();
													
?>
<div class="menu-left">
            	<div class="bg-tieude"><h4><?= _hotro ?></h4></div>
                <div class="list-danhmucsanpham">
                	<ul id="nav-ul">       
                    <?php for($i=0;$i<count($yahoo);$i++){ ?>            
                    	<li class="nav-li">
							<img class="icon-list" src="images/icon-list.png" /><b style="color:#fff"><?= $yahoo[$i]['ten'] ?></b><a href="skype:<?=$yahoo[$i]['skype']?>?chat"><img class="hotro" src="images/icon-skype.png" /></a><a href="ymsgr:sendIM?<?=$yahoo[$i]['yahoo']?>"><img class="hotro" src="images/icon-yahoo.png" /></a>
                        </li>  
                        <li class="nav-li" style="padding-left:28px">
							<font color="#fff"><?= _dienthoai ?>: </font><b style="color:#fff"><?= $yahoo[$i]['dienthoai'] ?></b>
                        </li> 
                        <li class="nav-li" style="padding-left:28px">
							<font color="#fff"><?= _email ?>: </font><b style="color:#fff; font-style:italic"><?= $yahoo[$i]['yahoo'] ?></b>
                        </li> 
                    <?php }?>                   
                    </ul>               
        		</div>
</div>
<div class="bot-shadow"><img src="images/shadow-menu.png" /></div>

<div class="menu-left">
            	<div class="bg-tieude"><h4><?= _thongketruycap ?></h4></div>
                <div class="list-danhmucsanpham">
                	<ul id="nav-ul">                 
                    	<li class="nav-li">
							<img class="icon-list" src="images/icon-list.png" /><b style="color:#fff"><?= _online ?></b><font style="color:#fff; float:right; margin-right:70px">:<?=$count_user_online?></font>
                        </li>  
                        <li class="nav-li" style="padding-left:28px">
							<b style="color:#fff"><?= _tuan ?></b><font color="#fff" style="float:right; margin-right:64px">:<?=$week_visitors ?></font>
                        </li> 
                        <li class="nav-li" style="padding-left:28px">
							<b style="color:#fff"><?= _thang ?></b><font color="#fff" style="float:right; margin-right:58px">:<?=$month_visitors ?></font>
                        </li>  
                        <li class="nav-li">
							<img class="icon-list" src="images/icon-list.png" /><b style="color:#fff"><?= _tongsotruycap ?></b><font color="#fff" style="float:right; margin-right:51px">:<?=$all_visitors ?></font>
                        </li>                 
                    </ul>               
        		</div>
</div>
<div class="bot-shadow"><img src="images/shadow-menu.png" /></div>

<div class="menu-left">
            	<div class="bg-tieude"><h4><?= _quangcao ?></h4></div>
                <div class="list-quangcao">
                	<ul id="scroller2">
							<?php
                            for($i=0;$i<count($result_quangcao);$i++)
                            {					
                            ?>
                                
                                    <li><a href="<?= $result_quangcao[$i]['mota'] ?>" target="_blank"><img src="<?=_upload_hinhanh_l.$result_quangcao[$i]['photo']?>"  /></a></li>
                                
                            <?php
                            }
                            ?>
                        </ul>
        		</div>
</div>
<div class="bot-shadow"><img src="images/shadow-menu.png" /></div>
 <script type="text/javascript">
(function($) {
	$(function() { //on DOM ready 
    		$("#scroller2").simplyScroll({orientation: 'vertical'});
	});
 })(jQuery);
</script> 