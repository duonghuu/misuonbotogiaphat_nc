<script type="text/javascript">
function validEmail(obj) {
	var s = obj.value;
	for (var i=0; i<s.length; i++)
		if (s.charAt(i)==" "){
			return false;
		}
	var elem, elem1;
	elem=s.split("@");
	if (elem.length!=2)	return false;

	if (elem[0].length==0 || elem[1].length==0)return false;

	if (elem[1].indexOf(".")==-1)	return false;

	elem1=elem[1].split(".");
	for (var i=0; i<elem1.length; i++)
		if (elem1[i].length==0)return false;
	return true;
}//Kiem tra dang email
function IsNumeric(sText)
{
	var ValidChars = "0123456789";
	var IsNumber=true;
	var Char;

	for (i = 0; i < sText.length && IsNumber == true; i++) 
	{ 
		Char = sText.charAt(i); 
		if (ValidChars.indexOf(Char) == -1) 
		{
			IsNumber = false;
		}
	}
	return IsNumber;
}//Kiem tra dang so
function check()
		{
			var frm 	= document.frm_order;
			
			if(frm.ten.value=='') 
			{ 
				alert( "Bạn chưa điền họ tên." );
				frm.ten.focus();
				return false;
			}
			if(frm.dienthoai.value=='') 
			{ 
				alert( "Bạn chưa điền điện thoại." );
				frm.dienthoai.focus();
				return false;
			}
			if(frm.diachi.value=='') 
			{ 
				alert( "Bạn chưa điền địa chỉ." );
				frm.diachi.focus();
				return false;
			}
			
			if(frm.email.value=='') 
			{ 
				alert( "Bạn chưa điền email." );
				frm.email.focus();
				return false;
			}
			if(!validEmail(frm.email)){
				alert('Vui lòng nhập đúng địa chỉ email');
				frm.email.focus();
				return false;
			}												
			frm.submit();		
		}	
</script>
<div class="ui-corner-all custom-corners">
	<div class="ui-bar ui-bar-a"><h3>Thanh toán</h3></div>
	<div class="ui-body ui-body-a">
	<table class="table table-bordered" style="width:100%">
    	<?
			if(is_array($_SESSION['cart'])){
            	echo '<tr bgcolor="#4c4c4c" style="font-weight:bold;color:#FFF"><td align="center">Tên</td><td align="center">Giá</td><td align="center">Số lượng</td><td align="center">Size</td><td align="center">Tổng giá</td></tr>';
				$max=count($_SESSION['cart']);
				for($i=0;$i<$max;$i++){
					$pid=$_SESSION['cart'][$i]['productid'];
					$q=$_SESSION['cart'][$i]['qty'];				
					$pname=get_product_name($pid);
					$size=$_SESSION['cart'][$i]['idsize'];	
					if($q==0) continue;
					if($size==""){
						$d->reset();
						$result_team_size="select id_size from #_product_team_size where id_product='".$pid."'";	
						$d->query($result_team_size);	
						$result_team_size=$d->fetch_array();

						$d->reset();
	                    $result_size="select id,ten from #_product_size where hienthi =1 and id='".$result_team_size['id_size']."'";
	                    $d->query($result_size); 
	                    $result_size=$d->fetch_array();

	                    $size=$result_size['id'];
					}
			?>
            		<td width="20%"><?=$pname?></td>
                    <td align="center">
                    	<?php if($q>=5) { ?>
                    		<?=number_format(get_price_si($pid),0, ',', '.')?>&nbsp;VNĐ
                    	<?php }else{ ?>
                    		<?=number_format(get_price_le($pid),0, ',', '.')?>&nbsp;VNĐ
                    	<?php } ?>
                    </td>
                    <td align="center"><?=$q?></td>    
                    <td align="center"><?=get_size($size)?></td>                 
                    <td align="center">
                    	<?php if($q>=5) { ?>
                    		<?=number_format(get_price_si($pid)*$q,0, ',', '.') ?>&nbsp;VNĐ
                    	<?php }else{ ?>
                    		<?=number_format(get_price_le($pid)*$q,0, ',', '.')?>&nbsp;VNĐ
                    	<?php } ?>
                    </td>                  
            		</tr>
            <?					
				}
			?>
				<tr><td colspan="6" style="background:#E6E6E6">
              <table width="100%" cellpadding="0" cellspacing="0" border="0">
              <tr>
              <td>  
                
                <b>Tổng giá bán: <?=number_format(get_order_total(),0, ',', '.')?>&nbsp;VNĐ</b></td>
              <td colspan="6" align="right">&nbsp;</td>
             </tr>
             </table>   
                </td></tr>
			<?
            }
			else{
				echo "<tr bgColor='#FFFFFF'><td>There are no items in your shopping cart!</td>";
			}
		?>
        </table><br/>
    <form method="post" name="frm_order" action="" enctype="multipart/form-data" onsubmit="return check();">
    
    <div class="thanhtoan_nd" >          
    <table cellpadding="5" cellspacing="0" border="0" class="tablelienhe">   
      <tr>
        <td colspan="2" style="color:#0C519B;font-size:16px;"><b>Thông tin khách hàng</b></td>                
      </tr>
      <tr>
        <td>Họ tên<span>*</span><input name="ten" id="ten" class="input" placeholder="<?=$_POST['ten']?>"/></td>
      </tr>
      <tr>
        <td>Điện thoại<span>*</span><input name="dienthoai" id="dienthoai" class="input" placeholder="<?=$_POST['dienthoai']?>"/></td>
      </tr>
      
      <tr>
        <td>Địa chỉ<span>*</span><input  name="diachi"  id="diachi" class="input" placeholder="<?=$_POST['diachi']?>"/></td>
       </tr>
       <tr>
        <td>E-mail<span>*</span><input name="email" id="email" class="input" placeholder="<?=$_POST['email']?>"/></td>
      </tr>     
      <tr>
        <td>Nội dung<textarea name="noidung"  cols="50" rows="5"  placeholder="<?=$_POST['noidung']?>"  ></textarea></td>
        </tr>               
    </table>
	
    <div style="text-align: right; padding-top:20px;">
      
        <input title='tiếp tục' class="button" type="submit" name="next" value="Tiếp tục" style="cursor:pointer;"/>  
    </div>
    </div>
      </form>

	</div>
</div>  
  