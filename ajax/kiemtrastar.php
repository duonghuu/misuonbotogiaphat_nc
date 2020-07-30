<?php
	session_start();
	@define ( '_lib' , '../libraries/');
	include_once _lib."config.php";
	include_once _lib."constant.php";
	include_once _lib."functions.php";
	include_once _lib."functions_giohang.php";
	include_once _lib."class.database.php";
	$d = new database($config['database']);
	
	
	if(!isset($_SESSION['value']))
	{
		$_SESSION['value']='1';
	}	

	if(!isset($_SESSION['lang']))
	{
		$_SESSION['lang']='vi';
	}
	$lang='vi';



	@$sao = $_POST['value'];

	@$id_product = $_POST['productID'];





	$d->reset();
	$sql = "select * from #_star where id_product='".$id_product."'";
	$d->query($sql);
	$productID = $d->fetch_array();



	
	if(isset($productID['id_product'])){
			$data['solan'] = $productID['solan']+1;
			$data['sao']= (($productID['sao']*$productID['solan']) + $sao)/$data['solan'];
			
			$data['id_product']=$id_product;
			$d->setTable('star');
			$d->setWhere('id_product', $id_product);
			$d->update($data);
	} else {
			$data['sao'] = $sao;
			$data['id_product'] = $id_product;
			$data['solan'] = $data['solan']+1;
			$d->setTable('star');
			$d->insert($data);
	}
?>

	

