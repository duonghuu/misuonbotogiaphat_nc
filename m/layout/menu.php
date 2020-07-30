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
<nav id="menu"> 
	<ul>
        <li><a href="index.html"><?=_trangchu?></a></li> 
        <li><a href="about.html"><?=_gioithieu?></a></li>
        <li><a href="dich-vu.html">Dịch vụ</a></li>
        <li><a href="san-pham.html"><?=_sanpham?></a>
            <ul>
                <?php for($i=0;$i<count($result_list_product);$i++){  ?>
                    <li><a href="san-pham/<?=$result_list_product[$i]['tenkhongdau']?>.html"><?=$result_list_product[$i]['ten_'.$lang]?></a> </li>
                <?php } ?>
            </ul>
        </li>
        <li><a href="bang-gia.html">Bảng giá</a></li>
        <li><a href="dao-tao.html">Đào tạo học viên</a></li>
        <li><a href="khuyen-mai.html">Khuyến mãi</a></li>
        <li><a>Thư viện</a>
            <ul>
                <li><a href="album.html">ALbum</a></li>
                <li><a href="video.html">video</a></li>
            </ul>
        </li>
        <li><a href="tuyen-dung.html">Tuyển Dụng</a></li>
        <li><a href="tin-tuc.html">tin tức</a> </li>
        <li><a  href="lien-he.html"><?=_lienhe?></a></li>
    </ul>
</nav>