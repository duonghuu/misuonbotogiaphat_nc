<?php if(!defined('_source')) die("Error");
		
		$title_bar .= " - Dang ky";

	
		if(!empty($_POST)){

			$data['email'] = sanitize($_POST['email']);
			$data['dienthoai'] = sanitize($_POST['dienthoai']);
			$data['thoigian'] = sanitize($_POST['thoigian']);
			$data['soluong'] = sanitize($_POST['soluong']);
			$data['ngaythang'] = sanitize($_POST['ngaythang']);
			$data['ten'] = sanitize($_POST['ten']);
			$data['noidung'] = sanitize($_POST['noidung']);
			$data['ngaytao'] = time();

			if(isset($_POST['datlich'])){
				$data['type'] = sanitize($_POST['datlich']);
			}
			$d->setTable('newsletter');
			if($d->insert($data))
				transfer("Bạn đã đăng ký thành công<br/>Cảm ơn", "index.html");
			else
				transfer("Lưu dữ liệu bị lỗi", "index.html");
		}
?>