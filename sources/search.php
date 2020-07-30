<?php  if(!defined('_source')) die("Error");
		$title_detail = _ketquatimkiem;
		$id_list=trim(sanitize($_GET['danhmuc']));
		$id_dotuoi=trim(sanitize($_GET['id_dotuoi']));
		$id_gioitinh=trim(sanitize($_GET['id_gioitinh']));
	
		$key=trim(sanitize($_GET['keyword']));
		
		$per_page = $row_setting['sanpham']; // Set how many records do you want to display per page.
		$startpoint = ($page * $per_page) - $per_page;
		$limit = ' limit '.$startpoint.','.$per_page;
		$where = " #_product where hienthi=1 and type='product'";
		$sql = "select * from $where ";
		
		if(isset($key) && $key !=''){
			$tukhoa = trim(strip_tags($key));    	
			if (get_magic_quotes_gpc()==false) {
				$tukhoa = mysql_real_escape_string($tukhoa);    			
			}
											
			$sql .= " and ten_$lang like '%$tukhoa%'";
		}
		
		if(isset($_GET['id_list']) && $_GET['id_list'] !=''){
		
			$sql .= " and id_list=".$id_list;
		}
		if(isset($_GET['id_dotuoi']) && $_GET['id_dotuoi'] !=''){
		
			$sql .= " and id_dotuoi=".$id_dotuoi;
		}
		if(isset($_GET['id_gioitinh']) && $_GET['id_gioitinh'] !=''){
		
			$sql .= " and id_gioitinh=".$id_gioitinh;
		}

		$sql .=" order by stt,id desc $limit ";
		
		$d->query($sql);
		$result_product = $d->result_array();	

		$url = getCurrentPageURL();
		$paging = pagination($where,$per_page,$page,$url);
?>