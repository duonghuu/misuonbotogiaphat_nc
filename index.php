<?php

	session_start();
	 
	@define ( '_source' , './sources/');
	@define ( '_lib' , './libraries/');
	// @define ( '_template' , './templates/');
	include_once _lib."Mobile_Detect.php";
	$detect = new Mobile_Detect;
	$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
	$deviceType=true;
	if($deviceType != 'computer'){
        @define ( '_template' , './m/');
    }else{
        @define ( '_template' , './templates/');
    }
	@define ( _upload_folder , './upload/');
	
	if(!isset($_SESSION['value']))
	{
		$_SESSION['value']='1';
	}	

	if(!isset($_SESSION['lang']))
	{
		$_SESSION['lang']='vi';
	}
	$lang=$_SESSION['lang'];
	
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
	
	if($_REQUEST['command']=='add' && $_REQUEST['productid']>0){
	$pid=$_REQUEST['productid'];
	$soluong=1;
	addtocart($pid,$soluong);
	redirect("thanh-toan.html");}
	
	if($_GET['lang']!=''){
		$_SESSION['lang']=$_GET['lang'];
		header("location:".$_SESSION['links']);
	} else {
		$_SESSION['links']=getCurrentPageURL();
	}

	
?>
<!DOCTYPE html PUBLIC>
<html lang="vi" itemscope itemtype="http://schema.org/WebPage">
<head>
<meta charset="UTF-8">

<link rel="schema.DC" href="http://purl.org/dc/elements/1.1/">
<base href="http://<?=$config_url?>/">
<link id="favicon" rel="shortcut icon" href="<?=_upload_hinhanh_l.$favicon['thumb_'.$lang]?>" type="image/x-icon" />

<title><?php if($title_bar!='') echo $title_bar; else echo $row_setting['title']; ?></title>
<?php if($deviceType !='computer'){?>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=1" />
<?php }else{ ?>
	<meta name="viewport" content="width=1349" />
<?php } ?>
<meta name="description" content="<?php if($description_bar!='') echo $description_bar; else echo $row_setting['description']; ?>">
<meta name="keywords" content="<?php if($keyword_bar!='') echo $keyword_bar; else echo $row_setting['keywords']; ?>">

<meta name="robots" content="noodp,index,follow" />
<meta name="google" content="notranslate" />
<meta name='revisit-after' content='1 days' />
<meta name="ICBM" content="<?=$row_setting['toado']?>">
<meta name="geo.position" content="<?=$row_setting['toado']?>">
<meta name="geo.placename" content="<?=$row_setting['diachi_'.$lang]?>">
<meta name="author" content="<?=$row_setting['ten_'.$lang]?>">
<?=$share_facebook?>
<meta property="og:image:width" content="675" />
<meta property="og:image:height" content="1000" />
<?php if($deviceType =='computer'){?>
<?php include _template."layout/file_css.php"; ?>
<?php }else{ ?>
<script type="text/javascript" src="m/js/jquery-1.11.0.js" ></script>
<script type="text/javascript">
$(document).on("mobileinit", function(){
    $.mobile.ajaxEnabled = false;
    $.mobile.pushStateEnabled = false;
    $.mobile.ignoreContentEnabled = true;
});
</script>

<script type="text/javascript" src="m/js/jquery.touchSwipe.min.js" ></script>
<script type="text/javascript" src="m/js/jquery.ui.touch-punch.js" ></script>

<link rel="stylesheet" href="m/css/jquery.mobile-1.4.5.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,greek-ext,cyrillic-ext,vietnamese,greek' rel='stylesheet' type='text/css'>
<script src="m/js/jquery.mobile-1.4.5.js"></script>
<link href="m/css/mobile.css" type="text/css" rel="stylesheet">


<link type="text/css" rel="stylesheet" href="m/css/jquery.mmenu.all.css" />
<script type="text/javascript" src="m/js/jquery.mmenu.min.all.js"></script>

<link type="text/css" rel="stylesheet" href="m/slick/slick.css" />
<link type="text/css" rel="stylesheet" href="m/slick/slick-theme.css" />
<script type="text/javascript" src="m/slick/slick.js"></script>

<link type="text/css" rel="stylesheet" href="m/css/jquery.mbxslider.css">
<script type="text/javascript" src="m/js/jquery.bxslider.js"></script>

<script src="m/js/jquery.swipebox.js"></script>
<link type="text/css" rel="stylesheet" href="m/css/swipebox.css">
    
<script type="text/javascript">
$(document).ready(function() {
    $('nav#menu').mmenu();
    });
</script>
<script type="text/javascript">
$().ready(function(){
  $(window).bind("load resize", function(){
    setTimeout('$("#menu").css({"visibility":"visible"});',500);
    });
});
</script>
 <script type="text/javascript">
$(document).ready(function(e) {
    $('iframe').each(function() {
        $(this).wrap('<div class="video-container"></div>');
    });
});
</script>      
<?php } ?>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBNR4Gq8gmJYx2Zx_5UU3-yKTV0E7WpixQ&sensor=true"></script>
<?=$row_setting['scriptcodeheader']?>
</head>
<body itemscope itemtype="http://schema.org/WebPage">
<?php if(!isset($_GET['id'])) { ?> <h1 style="display:none" class="vcard fn"><?=$row_setting['title']?></h1> <?php } ?> 
<?php if($deviceType =='computer'){ ?>
	<?php include _template."windown_tpl.php"; ?>
<?php }else{ ?>
	<?php include _template."mobile_tpl.php"; ?>
<?php } ?>
<?php include _template."layout/file_js.php"; ?>
<script type="application/ld+json">
{
"@context": "http://schema.org",
"@type": "Organization",
"url": "<?=$config_url?>"
}
</script>
<?=$row_setting['scriptcodebody']?>
</body>
<meta name="twitter:card" content="<?=$row_setting['ten_'.$lang]?>" />
</html>
