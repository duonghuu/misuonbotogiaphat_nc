<?php
	$com = (isset($_REQUEST['com'])) ? addslashes($_REQUEST['com']) : "";
	$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";
	$d = new database($config['database']);
	
	$page = (int)(!isset($_GET["page"]) ? 1 : $_GET["page"]);
	if ($page <= 0) $page = 1;
	
	$d->reset();
	$sql_setting = "select * from #_setting limit 0,1";
	$d->query($sql_setting);
	$row_setting= $d->fetch_array();

	$d->reset();
	$sql_setting = "select * from #_bgweb where type='bgweb' limit 0,1";
	$d->query($sql_setting);
	$row_background= $d->fetch_array();



	$d->reset();
    $sql = "select thumb_$lang from #_photo where type='favicon'";
    $d->query($sql);
    $favicon = $d->fetch_array();

    $d->reset();
    $sql = "select noidung_$lang as noidung from #_company where type='footer'  limit 0,1";
    $d->query($sql);
    $footer = $d->fetch_array();
	
	$d->reset();
    $sql = "select noidung_$lang from #_company where type='lienhe'  limit 0,1";
    $d->query($sql);
    $company_contact = $d->fetch_array();

	$d->reset();
	$sql_setting = "select ten,dienthoai,email from #_yahoo where hienthi='1'";
	$d->query($sql_setting);
	$row_yahoo= $d->fetch_array();
	
	switch($com){
		case 'video':
			$source = "video";
			$template = isset($_GET['id']) ? "video_detail" : "video";
			break;
			
		case 'download':
			$source = "download";
			$template = isset($_GET['id']) ? "download_detail" : "download";
			$type_bar = 'download';
			$title_detail = "Download";
			break;
		case 'bo-suu-tap':
			$source = "album";
			$template = isset($_GET['id']) ? "album_detail" : "album";
			$type_bar = 'album';
			$title_detail = "album";
			break;
		case 'site-map':
			$source = "sitemap";
			$template ="sitemap";
			break;

		case 'about':
			$source = "about";
			$template ="about";
			$type_bar = 'about';
			$title_detail = "Giới Thiệu";
			break;

		case 'tin-tuc':
			$source = "news";
			$template = isset($_GET['id']) ? "news_detail" : "news";
			$type_bar = 'tintuc';
			$title_detail = 'Tin tức';
			break;
			
		case 'bang-gia':
			$source = "news";
			$template = isset($_GET['id']) ? "news_detail" : "news";
			$type_bar = 'banggia';
			$title_detail = 'Bảng giá';
			break;

		case 'dich-vu':
			$source = "news";
			$template = isset($_GET['id']) ? "news_detail" : "dichvu";
			$type_bar = 'dichvu';
			$title_detail = 'Dịch Vụ';
			break;
		case 'dao-tao':
			$source = "news";
			$template = isset($_GET['id']) ? "news_detail" : "news";
			$type_bar = 'daotao';
			$title_detail = 'Đào tạo học viên';
			break;
		case 'khuyen-mai':
			$source = "news";
			$template = isset($_GET['id']) ? "news_detail" : "news";
			$type_bar = 'khuyenmai';
			$title_detail = 'Khuyến mãi';
			break;
		case 'tuyen-dung':
			$source = "news";
			$template = isset($_GET['id']) ? "news_detail" : "news";
			$type_bar = 'tuyendung';
			$title_detail = 'Tuyển dụng';
			break;
		case 'nhuong-quyen':
			$source = "news";
			$template = isset($_GET['id']) ? "news_detail" : "news";
			$type_bar = 'nhuongquyen';
			$title_detail = 'Nhượng quyền';
			break;

		case 'san-pham':
			$source = "product";
			$template =isset($_GET['id']) ? "product_detail" : "product";
			$title_detail = 'Sản Phẩm';
			$type_bar = 'product';	
			break;	
		case 'thuc-don':
			$source = "product";
			$template =isset($_GET['id']) ? "product_detail" : "product";
			$title_detail = 'Sản Phẩm';
			$type_bar = 'product';	
			break;
		case 'order-hang':
			$source = "product";
			$template =isset($_GET['id']) ? "product_detail" : "product";
			$title_detail = 'Order hàng Nhật';
			$type_bar = 'product1';	
			break;	

		case 'quy-trinh':
			$source = "news";
			$template = isset($_GET['id']) ? "news_detail" : "news";
			$type_bar = 'quytrinh';
			$title_detail = 'quy trình';
			break;
		case 'mua-ban':
			$source = "product";
			$template =isset($_GET['id']) ? "product_detail" : "product";
			$title_detail = 'Mua bán';
			$type_bar = 'muaban';	
			break;	

		case 'nhan-mail':
			$source = "nhanmail";			
			break;		
		case 'giao-hang':
			$template = "giaohang";
			$source = "nhanmail";			
			break;		
								
		case 'lien-he':
			$source = "contact";
			$template = "contact";
			break;
		
		case 'tim-kiem':
			$source = "search";
			$template = "search";
			break;
		case 'gio-hang':
			$source = "giohang";
			$template = "giohang";
			break;	
		case 'thanh-toan':
			$source = "thanhtoan";
			$template = "thanhtoan";
			break;	

		case 'dang-ky':
			$source = "register";
			$template ="register";
			break;
		case 'dang-nhap':
			$source = "login";
			$template ="login";
			break;
		case 'logout':
			$source = "logout";
			$template ="logout";
			break;
		case 'thong-tin-ca-nhan':
			$source = "taikhoan";
			$template ="taikhoan";
			break;
			case 'doi-mat-khau':
			$source = "doimk";
			$template ="doimk";
			break;
		case 'quen-mat-khau':
			$source = "rematkhau";
			$template ="rematkhau";
			break;
		case 'kich-hoat-mail':
			$source = "activemail";
			$template ="activemail";
			break;

		case 'ngonngu':
			if(isset($_GET['lang']))
			{
				$_SESSION['lang'] = $_GET['lang'];
			}
			else{
			$_SESSION['lang'] = 'vi';
			}
			echo '<script language="javascript">history.go(-1)</script>';
			break;

		default: 
			$source = "index";
			$template = "index";
			break;
	}
	
	if($source!="") include _source.$source.".php";
	
	if($_REQUEST['com']=='logout')
	{
	session_unregister($login_name);
	header("Location:index.php");
	}		
?>