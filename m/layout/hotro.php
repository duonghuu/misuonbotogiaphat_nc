<?php 
	
	$d->reset();
	$sql = "select dienthoai,yahoo,skype,ten_$lang from #_yahoo where hienthi=1 order by stt,id asc";
	$d->query($sql);
	$yahoo = $d->result_array();
?>
<div id="support_icon"><img src="images/hotrott_03.png" width="250"></div>
<div id="support">
  <div class="title_popup"><h5>Hỗ trợ trực tuyến</h5></div>
  <div class="content_popup">
  	<table style="width: 275px; margin: 10px auto 0px auto;" border="0" cellspacing="10">
	 
	<?php for($i=0, $count=count($yahoo); $i<$count;$i++){?>
	  <tr>	
		<td align="left"><b><?=$yahoo[$i]['ten_'.$lang]?> - <?=$yahoo[$i]['dienthoai']?></b></td>
	  </tr>
	  <tr>	
		<td align="left"><b><?=$yahoo[$i]['yahoo']?></b></td>
	  </tr>
	 
	<?php } ?>	
    </table>
  </div>
  <!-- #content -->
</div>


<script type="text/javascript">
	$(function(){
		$('#support_icon').click(function(){
		
			$(this).next().css({display: 'block', bottom: 0}).animate({right: '0px'});
			$(this).fadeOut();
		});
		
		$('#support').mouseleave(function(){
			$(this).delay(1000).animate({right: '-450px'});
			
			$(this).prev().delay(1500).fadeIn();	
		});
	});
</script>
