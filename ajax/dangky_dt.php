<?php
	session_start();
	@define ( '_template' , '../templates/');
	@define ( '_lib' , '../libraries/');
	@define ( '_source' , '../sources/');	
	include_once _lib."config.php";
	include_once _lib."constant.php";
	include_once _lib."functions.php";
	include_once _lib."class.database.php";
	$d = new database($config['database']);
	
	$dienthoai=$_POST['dienthoai'];

	
	
	$d->reset();
	$sql = "select id from #_newsdt where dienthoai='".$_POST['dienthoai']."'";
	$d->query($sql);
	$maill = $d->result_array();
	
	if(count($maill)!=0){
		echo 1;
	} else {

		if(isset($_POST['dienthoai'])){
			$data['dienthoai'] = $_POST['dienthoai'];
	
			$data['ngaytao'] = time();
			$d->setTable('newsdt');
			if($d->insert($data))
				echo 0;
			else
				echo 2;
		}
		
	}
		

?>

