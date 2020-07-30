<?php
	session_start();
	@define ( '_lib' , '../libraries/');
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

	@$id = $_GET['id'];
	$d->reset();
	$sql_video = "select links,id,ten_$lang as ten from #_video where id='".$id."' order by id desc";
	$d->query($sql_video);
	$row_video = $d->result_array();
	

?>
<a href="quickview.php?id=<?=$row_video[0]['id']?>" class="various3 xemnhanh" >
	<img width="450" height="225" src="http://img.youtube.com/vi/<?=youtobi($row_video[0]['links'])?>/hqdefault.jpg" alt="<?=$row_video[0]['ten']?>"/>
	<span class="nut_video"></span>
</a>