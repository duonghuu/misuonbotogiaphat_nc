<?php
	session_start();
	
	@define ( '_source' , './sources/');
	@define ( '_lib' , './libraries/');
	include_once _lib."Mobile_Detect.php";
	$detect = new Mobile_Detect;
	$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'computer' : 'computer') : 'computer');
	if($deviceType != 'computer'){
		@define ( '_template' , './m/');
		
	}else{
		@define ( '_template' , './templates/');
	}
	if(!isset($_SESSION['value']))
	{
		$_SESSION['value']='1';
	}	

	if(!isset($_SESSION['lang']))
	{
		$_SESSION['lang']='vi';
	}
	$lang='vi';
	
	include_once _lib."config.php";
	include_once _lib."constant.php";
	include_once _lib."functions.php";
	include_once _lib."functions_share.php";
	include_once _lib."class.database.php";
	include_once _source."lang_$lang.php";	
	include_once _lib."functions_giohang.php";
	include_once _lib."file_requick.php";
	include_once _lib."counter.php"; 
	include_once _source."template.php";
	
	$d->reset();
	$sql_dmsp="select file,ten from #_download where hienthi =1 and type='download'  order by stt asc";
	$d->query($sql_dmsp);
	$nhac=$d->result_array();

			
?>
<playlist>
	<?php 
		if(!empty($nhac)){
			foreach ($nhac as $key => $value) {
	?>
	<track songUrl="<?=_upload_hinhanh_l.$value['file']?>" title="<?=$value['ten']?>" singer="Unkown"/>
	<?php
			}
		}
	?>
	
	
</playlist>