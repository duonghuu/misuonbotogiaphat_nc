<?php
	session_start();
	error_reporting(E_ALL & ~E_NOTICE & ~8192);
	
	@define ( '_lib' , '../libraries/');
    
	include_once _lib."config.php";
	include_once _lib."constant.php";;
	include_once _lib."functions_giohang.php";
	include_once _lib."class.database.php";
    
	$d = new database($config['database']);
		
	@$dotuoi = $_POST['dotuoi'];
	@$id_dotuoi=explode(',',$dotuoi);
	@$gioitinh = $_POST['gioitinh'];
	@$id_gioitinh=explode(',',$gioitinh);
?>
<?php
	for($j=0;$j<count($id_dotuoi)-1;$j++)
	{
		$result_product= "select ten_vi,tenkhongdau,id,thumb,giaban from #_product where hienthi=1 and id_dotuoi='".$id_dotuoi[$j]."' order by stt,id desc";
		$d->query($result_product);
		$result_product = $d->result_array();
		for($i=0;$i<count($result_product);$i++) {

?>

	<div class="col-md-4 col-sm-6 col-xs-6">
		<div class="product">
			<div class="hinh-product">
				<a href="san-pham/<?=$result_product[$i]['tenkhongdau']?>.htm"><img class="transition" src="<?=_upload_product_l.$result_product[$i]['thumb']?>" border="0" alt="<?=$result_product[$i]['ten_vi']?>" /></a>
			</div>	   
        	<div class="ten-product"><h2><a href="san-pham/<?=$result_product[$i]['tenkhongdau']?>.htm"><?php echo $result_product[$i]["ten_vi"] ?></a></h2></div>
			<div class="gia-product"><?php if($result_product[$i]['giaban']==0) echo 'Liên hệ'; else echo number_format ($result_product[$i]['giaban'],0,",",".").' VNĐ' ?></div>
		</div>  
	</div>  
<?php } } ?>

<?php
	for($j=0;$j<count($id_gioitinh)-1;$j++)
	{
		$result_product= "select ten_vi,tenkhongdau,id,thumb,giaban from #_product where hienthi=1 and id_gioitinh='".$id_gioitinh[$j]."' order by stt,id desc";
		$d->query($result_product);
		$result_product = $d->result_array();
		for($i=0;$i<count($result_product);$i++) {

?>

	<div class="col-md-4 col-sm-6 col-xs-6">
		<div class="product">
			<div class="hinh-product">
				<a href="san-pham/<?=$result_product[$i]['tenkhongdau']?>.htm"><img class="transition" src="<?=_upload_product_l.$result_product[$i]['thumb']?>" border="0" alt="<?=$result_product[$i]['ten_vi']?>" /></a>
			</div>	   
        	<div class="ten-product"><h2><a href="san-pham/<?=$result_product[$i]['tenkhongdau']?>.htm"><?php echo $result_product[$i]["ten_vi"] ?></a></h2></div>
			<div class="gia-product"><?php if($result_product[$i]['giaban']==0) echo 'Liên hệ'; else echo number_format ($result_product[$i]['giaban'],0,",",".").' VNĐ' ?></div>
		</div>  
	</div>  
<?php } } ?>