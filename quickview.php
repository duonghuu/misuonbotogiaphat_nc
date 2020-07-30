<?php
	session_start();
	@define ( '_lib' , './libraries/');
	include_once _lib."config.php";
	include_once _lib."constant.php";
	include_once _lib."functions.php";
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

	
	
	$id=addslashes($_GET['id']);	
	if($id!=''){
	
		$d->reset();
		$sql_video = "select links,id from #_video where id='".$id."' and type='video' order by id desc";
		$d->query($sql_video);
		$row_video = $d->result_array();
	}	
?>
<iframe width="100%" height="90%" src="//www.youtube.com/embed/<?=youtobi($row_video[0]['links'])?>?rel=0&autoplay=1" frameborder="0" allowfullscreen></iframe>