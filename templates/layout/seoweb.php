<?php
	$d->reset();
	$sql_seoweb="select ga,gw from #_seoweb ";
	$d->query($sql_seoweb);
	$result_seoweb=$d->fetch_array();
?>
<?php echo stripcslashes($result_seoweb['ga']) ?>
<?php echo stripcslashes($result_seoweb['gw']) ?>