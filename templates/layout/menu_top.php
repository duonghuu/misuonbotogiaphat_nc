<?php	
	$d->reset();
	$result_list_product="select ten_$lang,tenkhongdau,id from #_product_list where hienthi=1 and type='product' order by stt,id desc ";	
	$d->query($result_list_product);	
	$result_list_product=$d->result_array();


    $d->reset();
    $result_list_muaban="select ten_$lang,tenkhongdau,id from #_product_list where hienthi=1 and type='muaban' order by stt,id desc ";    
    $d->query($result_list_muaban);    
    $result_list_muaban=$d->result_array();

    $d->reset();
    $result_list_tintuc="select ten_$lang,tenkhongdau,id from #_baiviet_list where hienthi=1 and type='tintuc' order by stt,id desc ";    
    $d->query($result_list_tintuc);    
    $result_list_tintuc=$d->result_array();
    

?>
    <ul class="menu-parent">
        <li <?php if(@$_GET['com']=='index' || @$_GET['com']=='') { echo "class='active2'"; } else{ echo "class='menu'";} ?>><a class="text-a" href="index.html"><?=_trangchu?></a></li> 
        <li <?php if(@$_GET['com']=='about') { echo "class='active2'"; } else{ echo "class='menu'";}?>><a class="text-a" href="about.html"><?=_gioithieu?></a></li>
        <li <?php if(@$_GET['com']=='dich-vu') { echo "class='active2'"; } else{ echo "class='menu'";}?>><a class="text-a" href="dich-vu.html">Dịch vụ</a></li>
        <li <?php if(@$_GET['com']=='san-pham') { echo "class='active2'"; } else{ echo "class='menu'";}?>><a class="text-a" href="san-pham.html"><?=_sanpham?></a>
            <ul class="ul-child">
                <?php for($i=0;$i<count($result_list_product);$i++){  ?>
                    <li class="li-child"><a href="san-pham/<?=$result_list_product[$i]['tenkhongdau']?>.html"><?=$result_list_product[$i]['ten_'.$lang]?></a> </li>
                <?php } ?>
            </ul>
        </li>
        <li <?php if(@$_GET['com']=='bang-gia') { echo "class='active2'"; } else{ echo "class='menu'";}?>><a class="text-a" href="bang-gia.html">Bảng giá</a></li>
        <li <?php if(@$_GET['com']=='dao-tao') { echo "class='active2'"; } else{ echo "class='menu'";}?>><a class="text-a" href="dao-tao.html">Đào tạo học viên</a></li>
        <li <?php if(@$_GET['com']=='khuyen-mai') { echo "class='active2'"; } else{ echo "class='menu'";}?>><a class="text-a" href="khuyen-mai.html">Khuyến mãi</a></li>
        <li <?php if(@$_GET['com']=='thu-vien') { echo "class='active2'"; } else{ echo "class='menu'";}?>><a class="text-a">Thư viện</a>
            <ul class="ul-child">
                <li class="li-child"><a href="album.html">ALbum</a></li>
                <li class="li-child"><a href="video.html">video</a></li>
            </ul>
        </li>
        <li <?php if(@$_GET['com']=='tuyen-dung') { echo "class='active2'"; } else{ echo "class='menu'";}?>><a class="text-a" href="tuyen-dung.html">Tuyển Dụng</a></li>
        <li <?php if(@$_GET['com']=='tin-tuc') { echo "class='active2'"; } else{ echo "class='menu'";}?>><a class="text-a" href="tin-tuc.html">tin tức</a> </li>
        <li id="nobacgroud" <?php if(@$_GET['com']=='lien-he') { echo "class='active2'"; } else{ echo "class='menu'";}?>><a class="text-a"  href="lien-he.html"><?=_lienhe?></a></li>    
    </ul>
   <?php //include _template."layout/timkiem.php"; ?>


           

