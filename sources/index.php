<?php  if(!defined('_source')) die("Error");

	$sql = "select ten_$lang,tenkhongdau,giaban,masp,photo,mota_$lang,id,thumb,noibat1 from #_product where hienthi=1 and noibat!=0 and type='product1' order by stt,id desc";
	$d->query($sql);
	$result_sanphamnoibat = $d->result_array();
	//var_dump($result_sanphamnoibat);

	$sql = "select ten_$lang,ten_en,tenkhongdau,id,thumb,photo from #_product_list where hienthi=1 and noibat!=0 and type='product' order by stt,id desc limit 0,6";
	$d->query($sql);
	$result_danhmuccap1 = $d->result_array();

	$sql = "select ten_$lang,tenkhongdau,giaban,photo,mota_$lang,id,thumb from #_baiviet where hienthi=1 and type='dichvu' order by stt,id desc";
	$d->query($sql);
	$result_dichvu_noibat = $d->result_array();

	$d->reset();
	$row_quangcao1 = "select photo_$lang from #_photo where type='quangcao' order by id desc";
	$d->query($row_quangcao1);
	$row_quangcao1 = $d->result_array();

	$result_dichvu_tieubieu= "select ten_$lang,tenkhongdau,photo,id,mota_$lang,thumb from #_baiviet where hienthi=1 and type = 'dichvu' and noibat!=0 order by stt,id desc";
    $d->query($result_dichvu_tieubieu);
    $result_dichvu_tieubieu = $d->result_array();

	$d->reset();
	$result_video="select ten_vi,links from #_video where hienthi =1 and type='video' order by stt,id desc";
	$d->query($result_video);
	$result_video=$d->result_array();

	$d->reset();
	$result_tintuc_noibat="select ten_$lang,mota_$lang,tenkhongdau,photo,id,ngaytao,thumb from #_baiviet where hienthi =1 and type='tintuc' and noibat!='0' order by stt,id desc";
	$d->query($result_tintuc_noibat);
	$result_tintuc_noibat=$d->result_array();
?>