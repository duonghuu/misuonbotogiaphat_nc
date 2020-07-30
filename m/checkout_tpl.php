
<div class="ui-corner-all custom-corners">
	<div class="ui-bar ui-bar-a"><h3>Check Out</h3></div>
	<div class="ui-body ui-body-a">
	<div class="info-content">
		<div class="text" style="width: 100%;padding: 10px 0px;box-sizing:border-box;">
			<form name="form1" method="post">
				<input type="hidden" name="pid" />
				<input type="hidden" name="command" />
				<table border="0" cellpadding="5px" cellspacing="1px" style="" width="100%">
				  <?
					if(is_array($_SESSION['cart'])){
						echo '<tr bgcolor="#3d3d3d" style="font-weight:bold;text-transform:uppercase;color:#FFF;height: 30px;"><td align="center" style="width:4%;">'._stt.'</td><td align="center">'._ten.'</td><td align="center">'._cost.'</td><td align="center">'._soluong.'</td><td align="center">'._tong.'</td></tr>';
						$max=count($_SESSION['cart']);
						for($i=0;$i<$max;$i++){
							$pid=$_SESSION['cart'][$i]['productid'];
								
							$q=$_SESSION['cart'][$i]['qty'];
						
							$pname=get_product_name($pid,$lang,_upload_sanpham_l,$config_url);
							if($q==0) continue;
					?>
				  <tr  style="text-align: center">
					<td width="3%" align="center"><?=$i+1?></td>
					<td width="29%"><?=$pname?></td>
					<td width="17%" align="center"><?=number_format(get_price($pid),0, ',', '.')?>&nbsp;vnđ</td>
					
					<td width="15%" align="center"><input type="text" name="product<?=$pid?>" value="<?=$q?>" maxlength="3" size="2" style="text-align:center; border:1px solid #F0F0F0" />
					  &nbsp;</td>
					
					<td width="18%" align="center"><?=number_format(get_price($pid)*$q,0, ',', '.') ?>&nbsp;vnđ</td>
					<?php /*?><td align="center"><a href="javascript:del(<?=$pid?>)"><img src="images/delete.gif" border="0" /></a></td><?php */?>
				  </tr>
				  <?					
						}
					?>
				  
				  
					
				  <tr>
					<td colspan="7" style="height:30px; padding-left:5px;"><b><?=_tonggia?>:
					  <span><?=number_format(get_order_total(),0, ',', '.')?></span>
					  &nbsp;vnđ</b></td>
				  </tr>
				  <?php /*?><tr>
					<td colspan="7" align="right" style="padding-top:10px;"><input type="button" value="<?=_muatiep?>" onclick="window.location='http://<?=$config_url.'/'.$lang?>/san-pham/'" class="button" style="padding:5px 10px;">
					  <input type="button" value="<?=_del?>" onclick="clear_cart()" class="button" style="padding:5px 10px;">
					  <input type="button" value="<?=_capnhat?>" onclick="update_cart()" class="button" style="padding:5px 10px;">
					  <input type="button" value="<?=_guidonhang?>" onclick="window.location='http://<?=$config_url.'/'.$lang?>/orders.html'" class="button" style="padding:5px 10px;"></td>
				  </tr><?php */?>
				  <?
					}
					else{
						echo "<tr ><td align='center'><b style='color:#F00; font-size: 20px;'>"._tb."</b></td>";
					}
				?>
				</table>
			</form>
				
		</div>
	</div>
</div></div>
