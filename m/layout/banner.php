<?php
$d->reset();
	$sql_banner_giua = "select photo from #_photo where com='banner_top' order by id desc";
	$d->query($sql_banner_giua);
	$row_banner_giua = $d->fetch_array();
	
	$d->reset();
	$sql_logo = "select photo from #_photo where com='banner_giua' order by id desc";
	$d->query($sql_logo);
	$row_logo = $d->fetch_array();
?>
<div data-role="header" id="header">
	
	<a href="#menu" id="btn-menu" data-role="button" role="button"></a>
	
	<div id="banner">
		<img  src="<?=_upload_hinhanh_l.$row_logo['photo']?>" />
	</div><!-- end #banner -->  
</div>


<!-- #header -->
<div class="clear"></div>
<div data-role="navbar" id="navbar">
    <ul>
        <li><a href="http://<?=$config_url?>/index.html" class="ui-btn-icon-left ui-icon-home <?php if($_GET['com']=='' || $_GET['com']=='index' || $_GET['com']==''){ echo "ui-btn-active";}?>" >Trang chủ</a></li>
       <li style="background:none;"><a href="lien-he.html"  class="font_custom <?php if($source=='contact') echo 'active'; ?>">Liên hệ</a></li>    
    </ul>
</div>
