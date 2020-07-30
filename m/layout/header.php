<?php 
    $d->reset();
	$row_banner = "select thumb_$lang from #_photo where type='banner' order by id desc";
	$d->query($row_banner);
	$row_banner = $d->result_array();

	$d->reset();
	$row_logo = "select thumb_$lang from #_photo where type='logo' order by id desc";
	$d->query($row_logo);
	$row_logo = $d->result_array();
?>
<div data-role="header" id="header">
	
	<a href="#menu" id="btn-menu" data-role="button" role="button"></a>
	<div id="logo"><img src="<?=_upload_hinhanh_l.$row_logo[0]['thumb_'.$lang]?>" alt="<?=$row_logo[0]['thumb_'.$lang]?>" /></div>
	<div id="banner">
		<img src="<?=_upload_hinhanh_l.$row_banner[0]['thumb_'.$lang]?>" alt="banner"/>
	</div><!-- end #banner -->
</div>
<!-- #header -->

<div data-role="navbar" id="navbar">
    <ul>
        <li><a href="http://<?=$config_url?>/index.html" class="ui-btn-icon-left ui-icon-home <?php if($_GET['com']=='' || $_GET['com']=='index' || $_GET['com']==''){ echo "ui-btn-active";}?>" >Trang chủ</a></li>
		<li><a href="http://<?=$config_url?>/lien-he.html" class="ui-btn-icon-left  ui-icon-mail <?php if($_GET['com']=='lien-he'){ echo "ui-btn-active";}?>">Liên hệ</a></li>
    </ul>
</div>
