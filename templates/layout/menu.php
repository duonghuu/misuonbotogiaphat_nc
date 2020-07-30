<?php	
	$d->reset();
	$result_list_sanpham="select ten_$lang,tenkhongdau,id from #_product_list where hienthi=1 order by stt,id desc ";	
	$d->query($result_list_sanpham);	
	$result_list_sanpham=$d->result_array();

    $d->reset();
    $result_list_gioithieu="select tenkhongdau from #_baiviet where hienthi=1 and type='gioithieu'";   
    $d->query($result_list_gioithieu);    
    $result_list_gioithieu=$d->fetch_array();

    $d->reset();
    $result_list_thanhtoan="select tenkhongdau from #_baiviet where hienthi=1 and type='thanhtoan'";   
    $d->query($result_list_thanhtoan);    
    $result_list_thanhtoan=$d->fetch_array();

?>
<ul class="menu-parent">
    <li <?php if($_GET['com']=="" || $_GET['com']=="index") echo 'class="active2"'; else echo 'class="menu"'; ?>><a class="text-a" href="index.html"><img src="images/icon-trangchu.png" alt="icon-trangchu" /><br>Trang chủ</a></li>
    <li <?php if($_GET['com']=="gioi-thieu") echo 'class="active2"'; else echo 'class="menu"'; ?>><a class="text-a" href="gioi-thieu.html"><img src="images/icon-gioithieu.png" alt="icon-gioithieu" /><br><?=_gioithieu?></a></li>
    <li <?php if($_GET['com']=="san-pham") echo 'class="active2"'; else echo 'class="menu"'; ?>><a class="text-a" href="san-pham.html"><img src="images/icon-sanpham.png" alt="icon-sanpham" /><br>Sản phẩm</a>
        <ul class="ul-child">
            <?php for($i=0;$i<count($result_list_sanpham);$i++){ 
                $d->reset();
                $result_cat_sanpham="select ten_$lang,tenkhongdau,id from #_product_cat where hienthi=1 and id_list=".$result_list_sanpham[$i]['id']." order by stt,id desc ";  
                $d->query($result_cat_sanpham); 
                $result_cat_sanpham=$d->result_array(); 
            ?>
                <li class="li-child"><a class="text-a2" href="san-pham/<?=$result_list_sanpham[$i]['tenkhongdau']?>.html"><?=$result_list_sanpham[$i]['ten_'.$lang]?></a>
                    <ul class="ul-child-child">
                    <?php for($j=0;$j<count($result_cat_sanpham);$j++) { ?>
                        <li class="li-child-child"><a href="san-pham/<?=$result_list_sanpham[$i]['tenkhongdau']?>/<?=$result_cat_sanpham[$j]['tenkhongdau']?>.html"><?=$result_cat_sanpham[$j]['ten_'.$lang]?></a>          
                    <?php } ?>
                    </ul>
                </li>
            <?php } ?>
        </ul>
    </li>
    <li <?php if($_GET['com']=="tin-tuc") echo 'class="active2"'; else echo 'class="menu"'; ?>><a class="text-a" href="tin-tuc.html"><img src="images/icon-tintuc.png" alt="icon-tintuc" /><br><?=_tintuc?></a></li>
    <li <?php if($_GET['com']=="dich-vu") echo 'class="active2"'; else echo 'class="menu"'; ?>><a class="text-a" href="dich-vu.html"><img src="images/icon-dichvu.png" alt="icon-dichvu" /><br>Dịch vụ</a></li>
    <li <?php if($_GET['com']=="bao-gia") echo 'class="active2"'; else echo 'class="menu"'; ?>><a class="text-a" href="bao-gia.html"><img src="images/icon-tintuc.png" alt="icon-tintuc" /><br>Báo giá</a></li>
    <li <?php if($_GET['com']=="tuyen-dung") echo 'class="active2"'; else echo 'class="menu"'; ?>><a class="text-a" href="tuyen-dung.html"><img src="images/icon-tuyendung.png" alt="icon-tuyendung" /><br>Tuyển dụng</a></li>
    <li <?php if($_GET['com']=="lien-he") echo 'class="active2"'; else echo 'class="menu"'; ?>><a class="text-a" href="lien-he.html"><img src="images/icon-lienhe.png" alt="icon-lienhe" /><br><?=_lienhe?></a></li>
    <li class="menu">
        <div id="timkiem">
            <input type="text" name="keyword" id="keyword" value="<?= _tukhoa ?>" onblur="textboxChange(this,false,'<?= _tukhoa ?>')" onfocus="textboxChange(this,true,'<?= _tukhoa ?>')" onkeypress="doEnter(event,'keyword');" class="timkiem"/>  
            <input type="button" onclick="onSearch(event,'keyword');" class="bt-timkiem" value=""/> 
        </div>
    </li>
</ul>	

           

