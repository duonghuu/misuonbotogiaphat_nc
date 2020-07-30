<?php
if($_REQUEST['command']=='delete' && $_REQUEST['pid']>0){
		remove_product($_REQUEST['pid']);
	}
	else if($_REQUEST['command']=='clear'){
		unset($_SESSION['cart']);
	}
	else if($_REQUEST['command']=='update'){
		$max=count($_SESSION['cart']);
		for($i=0;$i<$max;$i++){
			$pid=$_SESSION['cart'][$i]['productid'];
			$q=intval($_REQUEST['product'.$pid]);
			$size=intval($_REQUEST['size'.$pid]);
			$_SESSION['cart'][$i]['idsize']=$size;
			if($q>0 && $q<=999){
				$_SESSION['cart'][$i]['qty']=$q;
			}
			else{
				$msg='Some proudcts not updated!, quantity must be a number between 1 and 999';
			}
		}
	}
?>
<script language="javascript">
	function del(pid){
		if(confirm('Do you really mean to delete this item')){
			document.form1.pid.value=pid;
			document.form1.command.value='delete';
			document.form1.submit();
		}
	}
	function clear_cart(){
		if(confirm('This will empty your shopping cart, continue?')){
			document.form1.command.value='clear';
			document.form1.submit();
		}
	}
	function update_cart(){
		document.form1.command.value='update';
		document.form1.submit();
	}
</script>
<div class="ui-corner-all custom-corners">
	<div class="ui-bar ui-bar-a"><h3>Giỏ hàng</h3></div>
	<div class="ui-body ui-body-a" style="padding:5px 2px !important;">
		<form name="form1" method="post">
<input type="hidden" name="pid" />
<input type="hidden" name="command" /> 
<?php /* ?>
<table data-role="table" id="movie-table" data-mode="reflow" class="ui-responsive">
<?php if(is_array($_SESSION['cart'])){ ?>  <thead>

    <tr>
      <th data-priority="1">Tên</th>
      <th data-priority="persist">Giá</th>
      <th data-priority="2">Số lượng</th>
      <th data-priority="3"><abbr title="Rotten Tomato Rating">Size</abbr></th>
      <th data-priority="4">Tổng giá</th>
      <th data-priority="4">Xóa</th>
    </tr>
  </thead>
<tbody>
<?php
	$max=count($_SESSION['cart']);
				for($i=0;$i<$max;$i++){
					$pid=$_SESSION['cart'][$i]['productid'];
					$q=$_SESSION['cart'][$i]['qty'];	
					$size=$_SESSION['cart'][$i]['size'];				
					$pname=get_product_name($pid,$lang,_upload_sanpham_l,$config_url);
					if($q==0) continue;
			?>
  
    <td><?=$pname?></td>
                    <td align="center"><?=number_format(get_price($pid),0, ',', '.')?>&nbsp;VNĐ</td>
                    <td align="center"><input type="text" name="product<?=$pid?>" value="<?=$q?>" maxlength="3" size="2" style="text-align:center; border:1px solid #F0F0F0" />&nbsp;</td>                    
                    <td align="center"><?=$size?></td>
                    <td align="center"><?=number_format(get_price($pid)*$q,0, ',', '.') ?>&nbsp;VNĐ</td>
                    <td  align="center"><a href="javascript:del(<?=$pid?>)"><img src="images/delete.gif" border="0" /></a></td>
<?php } ?>
   
  </tbody>
<?php } ?>
</table>
<?php  */ ?>
<div class="contain_table_giohang">
				<table border="0" cellpadding="5px" cellspacing="1px" style="font-family:Verdana, Geneva, sans-serif; font-size:11px;">
    	<?
			if(is_array($_SESSION['cart'])){
            	echo '<thead><tr bgcolor="#4c4c4c" style="font-weight:bold;color:#FFF"><td align="center">Tên</td><td align="center">Giá</td><td align="center">Số lượng</td><td align="center">Size</td><td align="center">Tổng giá</td><td align="center">Xóa</td></tr></thead><tbody>';
				$max=count($_SESSION['cart']);
				for($i=0;$i<$max;$i++){
					$pid=$_SESSION['cart'][$i]['productid'];
					$q=$_SESSION['cart'][$i]['qty'];	
					$size=$_SESSION['cart'][$i]['idsize'];				
					$pname=get_product_name($pid,$lang,_upload_sanpham_l,$config_url);
					if($q==0) continue;
					$d->reset();
					$result_team_size="select id_size from #_product_team_size where id_product='".$pid."'";	
					$d->query($result_team_size);	
					$result_team_size=$d->result_array();
			?>
				<tr>
            		<td width="20%"><?=$pname?></td>
                    <td align="center">
                    	<?php if($q>=5) { ?>
                    		<?=number_format(get_price_si($pid),0, ',', '.')?>&nbsp;VNĐ
                    	<?php }else{ ?>
                    		<?=number_format(get_price_le($pid),0, ',', '.')?>&nbsp;VNĐ
                    	<?php } ?>
                    </td>
                    <td align="center"><input type="text" name="product<?=$pid?>" value="<?=$q?>" maxlength="3" size="2" style="text-align:center; border:1px solid #F0F0F0" />&nbsp;</td>                    
                    <td align="center">
                    	<select name="size<?=$pid?>" id="size<?=$pid?>" >
		                    <?php for($j=0;$j<count($result_team_size);$j++) { 
		                      $d->reset();
		                      $result_size="select id,ten from #_product_size where hienthi =1 and id='".$result_team_size[$j]['id_size']."' order by stt,id asc";
		                      $d->query($result_size); 
		                      $result_size=$d->fetch_array();
		                    ?>
		                        <option value="<?=$result_team_size[$j]['id_size']?>" <?php if($size==$result_team_size[$j]['id_size']) { ?> selected <?php } ?>><?=$result_size['ten']?></option>
		               		<?php } ?>
		                </select>
                    </td>
                    <td align="center">
                    	<?php if($q>=5) { ?>
                    		<?=number_format(get_price_si($pid)*$q,0, ',', '.') ?>&nbsp;VNĐ
                    	<?php }else{ ?>
                    		<?=number_format(get_price_le($pid)*$q,0, ',', '.')?>&nbsp;VNĐ
                    	<?php } ?>
                    </td>
                    <td  align="center"><a href="javascript:del(<?=$pid?>)"><img src="images/delete.gif" border="0" /></a></td>
            		</tr>
            <?					
				}
			?>
				<tr><td colspan="6" style="background:#E6E6E6">
                <b>Tổng giá bán: <?=number_format(get_order_total(),0, ',', '.')?>&nbsp;VNĐ</b>
                </td></tr>
                <tr>
                	<td colspan="6" align="right">
                     <input type="button" value="Mua tiếp" onclick="window.location='http://<?=$config_url?>/san-pham.html'" class="button">
                <input type="button" value="Xóa tất cả" onclick="clear_cart()" class="button"><input type="button" value="Cập nhật" onclick="update_cart()" class="button"><input type="button" value="Thanh toán" onclick="window.location='http://<?=$config_url?>/thanh-toan.html'" class="button">
                    </td>
                </tr>
				</tbody>
			<?
            }
			else{
				echo "<tr bgColor='#FFFFFF'><td>Không có sản phẩm nào trong giỏ hàng!</td>";
			}
		?>
        </table>	
</div><!--end contain table gio hang-->		
  </form>
	</div>
</div>
         
   