<?php
	$type = (isset($_REQUEST['type'])) ? addslashes($_REQUEST['type']) : "";	
	$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";
	$act = explode('_',$act);
	if(count($act>1)){
		$act = $act[1];
	} else {
		$act = $act[0];
	}
	switch($type){
		//-------------product------------------
		case 'product':
			switch($act){
				case 'list':
					$title_main = "Danh mục cấp 1";
					$config_images = "true";
					$config_qc = "false";
					$config_mota= "true";
					$config_noibat= "true";
					$config_noibat1= "false";
					$config_noibat2= "false";
					@define ( _width_thumb , 677 );
					@define ( _height_thumb , 482 );
					@define ( _style_thumb , 1 );
					$ratio_ = 1;
					break;
				default:
					$title_main = "Sản Phẩm";
					$config_images = "true";
					$config_mota= "false";
					$config_list = "true";
					$config_cat = "true";
					$config_item = "true";
					$config_sub = "false";
					$config_noibat = "true";
					$config_noibat1 = "false";
					$config_noibat2 = "false";
					@define ( _width_thumb , 275 );
					@define ( _height_thumb , 210 );
					@define ( _style_thumb , 1 );
					$ratio_ = 1;
					break;
				}
				@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			break;
		case 'product1':
			switch($act){
				case 'list':
					$title_main = "Danh mục cấp 1";
					$config_images = "true";
					$config_qc = "false";
					$config_mota= "true";
					$config_noibat= "true";
					$config_noibat1= "false";
					$config_noibat2= "false";
					@define ( _width_thumb , 677 );
					@define ( _height_thumb , 482 );
					@define ( _style_thumb , 1 );
					$ratio_ = 1;
					break;
				default:
					$title_main = "Order hàng nhật";
					$config_images = "true";
					$config_mota= "false";
					$config_list = "true";
					$config_cat = "true";
					$config_item = "false";
					$config_sub = "false";
					$config_noibat = "true";
					$config_noibat1 = "true";
					$config_noibat2 = "false";
					@define ( _width_thumb , 228 );
					@define ( _height_thumb , 229 );
					@define ( _style_thumb , 1 );
					$ratio_ = 2;
					break;
				}
				@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			break;
		case 'anhgioithieu':
			switch($act){
				case 'list':
					$title_main = "Danh mục cấp 1";
					$config_images = "false";
					$config_qc = "false";
					$config_mota= "false";
					$config_noibat= "true";
					$config_noibat1= "false";
					$config_noibat2= "false";
					@define ( _width_thumb , 317 );
					@define ( _height_thumb , 313 );
					@define ( _style_thumb , 1 );
					$ratio_ = 1;
					break;
				default:
					$title_main = "anhgioithieu";
					$config_images = "true";
					$config_mota= "false";
					$config_list = "false";
					$config_cat = "false";
					$config_item = "false";
					$config_sub = "false";
					$config_noidung = "false";
					$config_noibat = "false";
					$config_noibat1 = "false";
					$config_noibat2 = "false";
					@define ( _width_thumb , 550 );
					@define ( _height_thumb , 340 );
					@define ( _style_thumb , 2 );
					$ratio_ = 1;
					break;
				}
				@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			break;
		case 'muaban':
			switch($act){
				case 'list':
					$title_main = "Danh mục cấp 1";
					$config_images = "false";
					$config_qc = "false";
					$config_mota= "false";
					$config_noibat= "true";
					$config_noibat1= "false";
					$config_noibat2= "false";
					@define ( _width_thumb , 317 );
					@define ( _height_thumb , 313 );
					@define ( _style_thumb , 1 );
					$ratio_ = 1;
					break;
				default:
					$title_main = "Mua bán";
					$config_images = "true";
					$config_mota= "false";
					$config_list = "true";
					$config_cat = "true";
					$config_item = "false";
					$config_sub = "false";
					$config_noibat = "true";
					$config_noibat1 = "false";
					$config_noibat2 = "false";
					@define ( _width_thumb , 400 );
					@define ( _height_thumb , 525 );
					@define ( _style_thumb , 2 );
					$ratio_ = 1;
					break;
				}
				@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			break;	
		case 'yahoo':
			$title_main = "Hỗ trợ trực tuyến";
			$config_images = "false";
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			@define ( _width_thumb , 86 );
			@define ( _height_thumb , 70 );
			@define ( _style_thumb , 1 );
			$ratio_ = 1;
			break;
		case 'about':
			$title_main = "Giới thiệu";
			$config_images = "false";
			$config_img = "true";
			$config_mota= "true";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_ten = "true";
			$config_noibat = "false";
			@define ( _width_thumb , 267 );
			@define ( _height_thumb , 433 );
			@define ( _style_thumb , 2 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
		case 'xaydung':
			switch($act){
				case 'list':
					$title_main = "Danh mục cấp 1";
					$config_images = "false";
					$config_qc = "false";
					$config_mota= "false";
					$config_noibat= "false";
					$config_noibat1= "false";
					$config_noibat2= "false";
					@define ( _width_thumb , 317 );
					@define ( _height_thumb , 313 );
					@define ( _style_thumb , 1 );
					$ratio_ = 1;
					break;
				default:
					$title_main = "Xây dựng";
					$config_images = "true";
					$config_mota= "false";
					$config_list = "true";
					$config_cat = "true";
					$config_item = "true";
					$config_sub = "false";
					$config_noibat = "true";
					$config_noibat1 = "false";
					$config_noibat2 = "false";
					@define ( _width_thumb , 261 );
					@define ( _height_thumb , 243 );
					@define ( _style_thumb , 2 );
					$ratio_ = 1;
					break;
				}
				@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			break;
		case 'gioithieu':
			$title_main = "Giới thiệu";
			$config_images = "true";
			$config_mota= "true";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_ten = "true";
			$config_noibat = "false";
			@define ( _width_thumb , 315 );
			@define ( _height_thumb , 230 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
		case 'tintuc':
			$title_main = "Tin tức";
			$config_images = "true";
			$config_mota= "true";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_noibat = "true";
			@define ( _width_thumb , 366 );
			@define ( _height_thumb , 231 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
		case 'dichvu':
			$title_main = "Dịch vụ";
			$config_images = "true";
			$config_mota= "true";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_noibat = "true";
			@define ( _width_thumb , 357 );
			@define ( _height_thumb , 240 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
		case 'banggia':
			$title_main = "bảng giá";
			$config_images = "true";
			$config_mota= "true";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_noibat = "true";
			@define ( _width_thumb , 366 );
			@define ( _height_thumb , 231 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
		case 'ykien':
			$title_main = "Ý kiến khách hàng";
			$config_images = "true";
			$config_mota= "true";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_noibat = "true";
			@define ( _width_thumb , 124 );
			@define ( _height_thumb , 124 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
		case 'daotao':
			$title_main = "Đào tạo học viên";
			$config_images = "true";
			$config_mota= "true";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_noibat = "true";
			@define ( _width_thumb , 366 );
			@define ( _height_thumb , 231 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
		case 'khuyenmai':
			$title_main = "Khuyễn mãi";
			$config_images = "true";
			$config_mota= "true";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_noibat = "false";
			@define ( _width_thumb , 366 );
			@define ( _height_thumb , 231 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
		case 'tuvan':
			$title_main = "Tư vấn";
			$config_images = "true";
			$config_mota= "true";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_noibat = "false";
			@define ( _width_thumb , 270 );
			@define ( _height_thumb , 195 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
		case 'thanhtoan':
			$title_main = "Thanh toán";
			$config_images = "false";
			$config_mota= "false";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_noibat = "false";
			@define ( _width_thumb , 160 );
			@define ( _height_thumb , 115 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
		case 'sukien':
			$title_main = "Sự kiện";
			$config_images = "true";
			$config_mota= "true";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_noibat = "true";
			@define ( _width_thumb , 130 );
			@define ( _height_thumb , 130 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
		case 'khuyenmai':
			$title_main = "Khuyến mãi";
			$config_images = "true";
			$config_mota= "true";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_noibat = "true";
			@define ( _width_thumb , 130 );
			@define ( _height_thumb , 130 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
		case 'tuyendung':
			$title_main = "Tuyển dụng";
			$config_images = "true";
			$config_mota= "true";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_noibat = "false";
			@define ( _width_thumb , 366 );
			@define ( _height_thumb , 231 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
		case 'nhuongquyen':
			$title_main = "Nhượng quyền";
			$config_images = "true";
			$config_mota= "true";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_noibat = "false";
			@define ( _width_thumb , 366 );
			@define ( _height_thumb , 231 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
		case 'huongdan':
			$title_main = "Hướng dẫn mua hàng";
			$config_images = "true";
			$config_mota= "true";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_noibat = "false";
			@define ( _width_thumb , 130 );
			@define ( _height_thumb , 130 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
		case 'tieuchi':
			$title_main = "Tiêu chí";
			$config_images = "true";
			$config_mota= "true";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_noibat = "false";
			@define ( _width_thumb , 82 );
			@define ( _height_thumb , 82 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
		case 'phuongcham':
			$title_main = "Phương châm";
			$config_images = "true";
			$config_mota= "false";
			$config_list = "false";
			$config_cat = "false";
			$config_item = "false";
			$config_sub = "false";
			$config_noibat = "false";
			@define ( _width_thumb , 83 );
			@define ( _height_thumb , 83 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;

		case 'download':
			$title_main = "Download File";
			$config_images = "false";
			@define ( _width_thumb , 200 );
			@define ( _height_thumb , 250 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
		
		case 'album':
			$title_main = "Chứng chỉ";
			$config_images = "true";
			$config_img = "true";
			$config_list = "false";
			$config_mota= "false";
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			@define ( _width_thumb , 354 );
			@define ( _height_thumb , 237 );
			@define ( _style_thumb , 1 );
			$ratio_ = 2;
			break;

		case 'album_list':
			$title_main = "danh mục album";
			$config_images = "true";
			$config_list = "false";
			@define ( _width_thumb , 200 );
			@define ( _height_thumb , 160 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
		//-------------info------------------
	
		
		case 'tags':
			$title_main = 'tags';
			$config_ten = 'true';
			break;
			
		case 'trangchu':
			$title_main = 'Trang chủ';
			$config_images = 'true';
			$config_ten = 'true';
			@define ( _width_thumb , 590 );
			@define ( _height_thumb , 260 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;

		case 'hinhanh':
			$title_main = 'Hình ảnh';
			$config_ten = 'true';
			break;
		case 'chamsoc':
			$title_main = 'chăm sóc khách hàng';
			$config_ten = 'true';
			break;
		case 'lienhe':
			$title_main = 'Liên hệ';
			$config_ten = 'true';
			break;
		case 'giolamviec':
			$title_main = 'Giờ làm việc';
			$config_ten = 'false';
			break;

		case 'banner':
			$title_main = 'Banner';
			@define ( _width_thumb , 600 );
			@define ( _height_thumb , 113 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF|swf' );
			$ratio_ = 1;
			break;	

		case 'logo':
			$title_main = 'Logo';
			@define ( _width_thumb , 164 );
			@define ( _height_thumb , 176 );
			@define ( _style_thumb , 2 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;

		case 'bgphuongcham':
			$title_main = 'Background phương châm';
			@define ( _width_thumb , 1366 );
			@define ( _height_thumb , 130 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF|swf' );
			$ratio_ = 1;
			break;

		case 'bgdoitac':
			$title_main = 'Background đối tác';
			@define ( _width_thumb , 1366 );
			@define ( _height_thumb , 180 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF|swf' );
			$ratio_ = 1;
			break;
		case 'popup':
			$title_main = 'Popup';
			$links_ = 'true';
			$config_hienthi = 'true';
			@define ( _width_thumb , 900 );
			@define ( _height_thumb , 500 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;

		case 'bando':
			$title_main = 'Bản đồ';
			@define ( _width_thumb , 320 );
			@define ( _height_thumb , 180 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;

		case 'favicon':
			$title_main = 'Favicon';
			@define ( _width_thumb , 40 );
			@define ( _height_thumb , 40 );
			@define ( _style_thumb , 2 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;

		case 'bgweb':
			$title_main = 'background body';
			@define ( _width_thumb , 1366 );
			@define ( _height_thumb , 433 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			break;
		//-------------photo------------------
		case 'slider':
			$title_main = "Hình ảnh slider";
			$config_list = "false";
			$config_mota = "false";
			@define ( _width_thumb , 1366 );
			@define ( _height_thumb , 656 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			$links_ = "true";
			break;
		case 'slider2':
			$title_main = "Hình ảnh slider2";
			$config_list = "false";
			$config_mota = "false";
			@define ( _width_thumb , 400 );
			@define ( _height_thumb , 240 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			$links_ = "true";
			break;
		case 'slider3':
			$title_main = "Hình ảnh slider3";
			$config_list = "false";
			$config_mota = "false";
			@define ( _width_thumb , 400 );
			@define ( _height_thumb , 185 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			$links_ = "true";
			break;
		case 'doitac':
		    $title_main = "Đối tác";
			@define ( _width_thumb , 135 );
			@define ( _height_thumb , 90 );
			@define ( _style_thumb , 2 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			$links_ = "true";
			break;
		case 'quangcao':
		    $title_main = "Quảng cáo";
			@define ( _width_thumb , 1366 );
			@define ( _height_thumb , 444 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			$links_ = "true";
			break;
			
		case 'quangcaobt':
		    $title_main = "Quảng cáo giữa";
			@define ( _width_thumb , 385 );
			@define ( _height_thumb , 255 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			$links_ = "true";
			break;
		case 'quancao_sl':
		    $title_main = "Quảng cáo slider";
			@define ( _width_thumb , 230 );
			@define ( _height_thumb , 206 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			$links_ = "true";
			break;
		case 'quancao_top':
		    $title_main = "Quảng cáo top";
			@define ( _width_thumb , 385 );
			@define ( _height_thumb , 215 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			$links_ = "true";
			break;
		case 'thethanhvien':
		    $title_main = "Thẻ thành viên";
			@define ( _width_thumb , 310 );
			@define ( _height_thumb , 275 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			$links_ = "true";
			break;

		case 'adsmenu':
		    $title_main = "Hình ảnh trang chủ";
		    // $config_list = "true";
			@define ( _width_thumb , 1366 );
			@define ( _height_thumb , 320 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			$links_ = "true";
			break;

		case 'mxh':
		    $title_main = "Mạng xã hội";
			@define ( _width_thumb , 28 );
			@define ( _height_thumb , 28 );
			@define ( _style_thumb , 2 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			$links_ = "true";
			break;
		case 'mxh1':
		    $title_main = "Mạng xã hội";
			@define ( _width_thumb , 48 );
			@define ( _height_thumb , 48 );
			@define ( _style_thumb , 2 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			$links_ = "true";
			break;
		case 'chinhanh':
		
		    $title_main = "Chi nhánh";
			@define ( _width_thumb , 40 );
			@define ( _height_thumb , 40 );
			@define ( _style_thumb , 1 );
			@define ( _img_type , 'jpg|gif|png|jpeg|PNG|JPG|JPEG|GIF' );
			$ratio_ = 1;
			$links_ = "true";
			break;
		//--------------defaut---------------
		default: 
			$source = "";
			$template = "index";
			break;
	}

?>