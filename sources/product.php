<?php  if(!defined('_source')) die("Error");
		@$idc =  addslashes(sanitize($_GET['idc']));
		@$idl =  addslashes(sanitize($_GET['idl']));
		@$idi =  addslashes(sanitize($_GET['idi']));
		@$ids =  addslashes(sanitize($_GET['ids']));
		@$id=  addslashes(sanitize($_GET['id']));
		#các sản phẩm khác======================

		if($id!=''){
			

			$d->reset();
			$sql_detail = "select * from #_product where hienthi=1 and type='".$type_bar."' and tenkhongdau='".$id."'";
			$d->query($sql_detail);
			$row_detail = $d->fetch_array();

			$sql_lanxem = "UPDATE #_product SET luotxem=luotxem+1  WHERE id ='".$row_detail['id']."'";
			$d->query($sql_lanxem);

			$d->reset();
			$sql = "select * from #_star where id_product='".$row_detail['id']."'";
			$d->query($sql);
			$product_star = $d->fetch_array();

			$idlist=$row_detail['id_list'];
			
			daxem($row_detail['id']);

	

			$d->reset();
			$sql = "select id,photo,ten_$lang,giaban,giacu,tenkhongdau from #_product where hienthi=1 and type='".$type_bar."' and noibat=1 order by stt,ngaytao desc";
			$d->query($sql);
			$product_banchay = $d->result_array();

			$share_facebook = '<meta property="og:url" content="'.getCurrentPageURL().'" />';
			$share_facebook .= '<meta property="og:type" content="website" />';
			$share_facebook .= '<meta property="og:title" content="'.$row_detail['ten_'.$lang].'" />';
			$share_facebook .= '<meta property="og:description" content="'.strip_tags($row_detail['mota_'.$lang]).'" />';
			$share_facebook .= '<meta property="og:image" content="http://'.$config_url.'/'._upload_product_l.$row_detail['photo'].'" />';

			$d->reset();
			$sql = "select * from #_product_photo where hienthi=1 and id_product='".$row_detail['id']."' and type='".$type_bar."' order by stt,id desc";
			$d->query($sql);
			$result_hinhanh = $d->result_array();

			$d->reset();
			$sql = "select id,photo,ten_$lang,giaban,giacu,tenkhongdau,ngaytao from #_product where hienthi=1 and type='".$type_bar."' and id_list='".$row_detail['id_list']."' and id!='".$row_detail['id']."'  order by RAND() limit 8";
			$d->query($sql);
			$product_khac = $d->result_array();

			$title_bar .= $row_detail['title'];
			$keyword_bar .= $row_detail['keywords'];
			$description_bar .= $row_detail['description'];

			$d->reset();
		    $sql = "select photo,id,photo from #_product_photo where hienthi=1 and type='".$type_bar."' and id_product='".$row_detail['id']."' order by stt,id desc ";
		    $d->query($sql);
		    $product_photo = $d->result_array();

		} elseif($idl!=''){

			$d->reset();
			$sql = "select id,ten_$lang,tenkhongdau,title,keywords,description from #_product_list where hienthi=1 and type='".$type_bar."' and tenkhongdau='".$idl."'";
			$d->query($sql);
			$row_detail = $d->fetch_array();

			$idlist=$row_detail['id'];


			$per_page = $row_setting['sanpham']; // Set how many records do you want to display per page.
			$startpoint = ($page * $per_page) - $per_page;
			$limit = ' limit '.$startpoint.','.$per_page;
			
			$where = " #_product where hienthi=1 and type='".$type_bar."' and id_list='".$row_detail['id']."'   order by stt,ngaytao desc";

			$sql = "select ten_$lang,ten_en,id,photo,giaban,giacu,mota_$lang,tenkhongdau,thumb from $where $limit";
			$d->query($sql);
			$result_product = $d->result_array();

			$url = getCurrentPageURL();
			$paging = pagination($where,$per_page,$page,$url);

			$title_detail = $row_detail['ten_'.$lang];
			$title_bar .= $row_detail['title'];
			$keyword_bar .= $row_detail['keywords'];
			$description_bar .= $row_detail['description'];

		} elseif($idc!=''){

			$d->reset();
			$sql = "select id,ten_$lang,tenkhongdau,id_list,title,keywords,description from #_product_cat where hienthi=1 and type='".$type_bar."' and tenkhongdau='".$idc."'";
			$d->query($sql);
			$row_detail = $d->fetch_array();

			$idlist=$row_detail['id_list'];

			$d->reset();
			$sql = "select id,ten_$lang,tenkhongdau from #_product_list where hienthi=1 and type='".$type_bar."' and id='".$idlist."'";
			$d->query($sql);
			$row_detail_list = $d->fetch_array();

			$per_page = $row_setting['sanpham']; // Set how many records do you want to display per page.
			$startpoint = ($page * $per_page) - $per_page;
			$limit = ' limit '.$startpoint.','.$per_page;
			
			$where = " #_product where hienthi=1 and type='".$type_bar."' and id_cat='".$row_detail['id']."'   order by stt,ngaytao desc";

			$sql = "select ten_$lang,id,photo,mota_$lang,giaban,giacu,tenkhongdau from $where $limit";
			$d->query($sql);
			$result_product = $d->result_array();

			$url = getCurrentPageURL();
			$paging = pagination($where,$per_page,$page,$url);


			$title_detail = $row_detail['ten_'.$lang];
			$title_bar .= $row_detail['title'];
			$keyword_bar .= $row_detail['keywords'];
			$description_bar .= $row_detail['description'];

		} elseif($idi!=''){

			$d->reset();
			$sql = "select id,ten_$lang,tenkhongdau,id_list,title,keywords,description from #_product_item where hienthi=1 and type='".$type_bar."' and tenkhongdau='".$idi."'";
			$d->query($sql);
			$row_detail = $d->fetch_array();

			$idlist=$row_detail['id_list'];

			$per_page = $row_setting['sanpham']; // Set how many records do you want to display per page.
			$startpoint = ($page * $per_page) - $per_page;
			$limit = ' limit '.$startpoint.','.$per_page;
			
			$where = " #_product where hienthi=1 and type='".$type_bar."' and id_item='".$row_detail['id']."'  order by stt,ngaytao desc";

			$sql = "select ten_$lang,id,photo,mota_$lang,giaban,giacu,tenkhongdau from $where $limit";
			$d->query($sql);
			$result_product = $d->result_array();

			$url = getCurrentPageURL();
			$paging = pagination($where,$per_page,$page,$url);

			$title_detail = $row_detail['ten_'.$lang];
			$title_bar .= $row_detail['title'];
			$keyword_bar .= $row_detail['keywords'];
			$description_bar .= $row_detail['description'];

		} else {
			$per_page = $row_setting['sanpham']; // Set how many records do you want to display per page.
			$startpoint = ($page * $per_page) - $per_page;
			$limit = ' limit '.$startpoint.','.$per_page;

			
			
			$where = " #_product where hienthi=1 and type='".$type_bar."' ";
			if($com=='khuyen-mai') {$where.= ' and banchay=1 ';$title_detail='Sản phẩm khuyến mãi';}
			$where .= " order by stt,ngaytao desc ";

			$sql = "select ten_$lang,id,photo,mota_$lang,giaban,giacu,tenkhongdau,thumb,noibat1 from $where $limit";
			$d->query($sql);
			$result_product = $d->result_array();

			$url = getCurrentPageURL();
			$paging = pagination($where,$per_page,$page,$url);
		}			
?>