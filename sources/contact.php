<?php if(!defined('_source')) die("Error");
		
		$d->reset();
		$sql = "select noidung_$lang,title,keywords,description from #_company where type='lienhe' ";
		$d->query($sql);
		$row_detail = $d->fetch_array();
		
		if(!empty($_POST)){
		$file_name = images_name($_FILES['file']['name']);
		if($file_att = upload_image("file", 'doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|xlsx|jpg|png|gif|JPG|PNG|GIF', _upload_hinhanh_l,$file_name)){
			$data1['photo'] = $file_att;
			
		}
		$info=sanitize(sanitize($_POST['info_member']));

		$captcha = $info['mabaove'];

		if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['recaptcha_response']))
		 {
		 		// Build POST request - Make and decode POST request:
				$recaptcha_response_contact = $_POST['recaptcha_response'];
				$recaptcha = file_get_contents($recaptcha_url.'?secret='.$config_secret_key.'&response='.$recaptcha_response_contact);
				$recaptcha = json_decode($recaptcha);

				if ($recaptcha->score >= 0.5) {
				    
				    include_once "phpMailer/class.phpmailer.php";	
					$mail = new PHPMailer();
					$mail->Priority = 1;
			     	$mail->AddCustomHeader("X-MSMail-Priority: High");
					$mail->IsSMTP(); // Gọi đến class xử lý SMTP
					$mail->Host       = $config_ip; // tên SMTP server
					$mail->Port       = 587;
					$mail->SMTPDebug  = 0;
					$mail->SMTPAuth   = true; 
					$mail->SMTPSecure = "tls";                 // Sử dụng đăng nhập vào account
					$mail->Username   = $config_email; // SMTP account username
					$mail->Password   = $config_pass;  

					//Thiet lap thong tin nguoi gui va email nguoi gui
					$mail->SetFrom($row_setting['email'],$row_setting['ten_'.$lang]);
					
					$mail->AddAddress($row_setting['email'],$row_setting['ten_'.$lang]);
					
					/*=====================================
					 * THIET LAP NOI DUNG EMAIL
			 		*=====================================*/

					//Thiết lập tiêu đề
					$mail->Subject    = '['.$_POST['ten'].']';
					$mail->IsHTML(true);
					//Thiết lập định dạng font chữ
					$mail->CharSet = "utf-8";	
						$body = '<table>';
						$body .= '
							<tr> 
								<th colspan="2">&nbsp;</th>
							</tr>

							<tr>
								<th colspan="2">Thư liên hệ từ website <a href="http://'.$config_url.'">www.'.$config_url.'</a></th>
							</tr>

							<tr>
								<th colspan="2">&nbsp;</th>
							</tr>

							<tr>
								<th>Họ tên :</th><td>'.$_POST['ten'].'</td>
							</tr>

							<tr>
								<th>Điện thoại :</th><td>'.$_POST['dienthoai'].'</td>
							</tr>

							<tr>
								<th>Email :</th><td>'.$_POST['email'].'</td>
							</tr>
							
						
							<tr>
								<th>Nội dung :</th><td>'.$_POST['noidung'].'</td>
							</tr>';
						$body .= '</table>';

						$data1['ten'] = sanitize($_POST['ten']);
						$data1['diachi'] = sanitize($_POST['diachi']);
						$data1['dienthoai'] = sanitize($_POST['dienthoai']);
						$data1['email'] = sanitize($_POST['email']);
						$data1['tieude'] = sanitize($_POST['tieude']);
						$data1['noidung'] = sanitize($_POST['noidung']);
						$data1['stt'] = sanitize($_POST['stt']);

						$data1['ngaytao'] = time();
						$d->setTable('contact');
						$d->insert($data1);

							
						$mail->Body = $body;

						if($data1['photo']){
							$mail->AddAttachment(_upload_hinhanh_l.$data1['photo']);
						}
					
						
						if($mail->Send())
						{	
							transfer("Thông tin liên hệ được gửi . Cảm ơn.", "index.html");
						} else {
							transfer("Xin lỗi quý khách.<br>Hệ thống bị lỗi, xin quý khách thử lại.", "lien-he.html",false);
						}
					}else{
						 transfer('Mã bảo vệ không đúng, vui lòng thử lại!',$_SESSION['links']);
					}
				}
		   	
		 }
	
?>