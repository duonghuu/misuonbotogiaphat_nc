<?php   
    $d->reset();
    $result_list_sanpham="select ten_$lang,tenkhongdau,id from #_product_list where hienthi=1 and type='product' order by stt,id desc ";   
    $d->query($result_list_sanpham);    
    $result_list_sanpham=$d->result_array();

    $d->reset();
    $result_list_sanpham1="select ten_$lang,tenkhongdau,id from #_product_list where hienthi=1 and type='product1' order by stt,id desc ";   
    $d->query($result_list_sanpham1);    
    $result_list_sanpham1=$d->result_array();


    $d->reset();
    $result_list_duan="select ten_$lang,tenkhongdau,id from #_product_list where hienthi=1 and type='duan' order by stt,id desc ";   
    $d->query($result_list_duan);    
    $result_list_duan=$d->result_array();

    $d->reset();
    $result_list_gioithieu="select ten_$lang,tenkhongdau,id from #_baiviet where hienthi=1 and type='gioithieu' order by stt,id desc ";   
    $d->query($result_list_gioithieu);    
    $result_list_gioithieu=$d->result_array();

    $d->reset();
    $result_list_dichvu="select ten_$lang,tenkhongdau,id from #_baiviet where hienthi=1 and type='dichvu' order by stt,id desc ";   
    $d->query($result_list_dichvu);    
    $result_list_dichvu=$d->result_array();
?>
<ul class="menu-parent">
    <li <?php if(@$_GET['com']=='index' || @$_GET['com']=='') { echo "class='active2'"; } else{ echo "class='menu'";} ?>><a class="text-a" href="index.html"><?=_trangchu?></a></li> 
    <li <?php if($_GET['com']=="thuc-don") echo 'class="active2"'; else echo 'class="menu"'; ?>><a class="text-a" href="thuc-don.html">Thực đơn</a>
        <ul class="ul-child">
            <?php for($i=0;$i<count($result_list_sanpham);$i++){ 
                $d->reset();
                $result_cat_sanpham="select ten_$lang,tenkhongdau,id from #_product_cat where hienthi=1 and type='product' and id_list=".$result_list_sanpham[$i]['id']." order by stt,id desc ";  
                $d->query($result_cat_sanpham); 
                $result_cat_sanpham=$d->result_array(); 
            ?>
                <li class="li-child"><a class="text-a2" href="san-pham/<?=$result_list_sanpham[$i]['tenkhongdau']?>.html"><?=$result_list_sanpham[$i]['ten_'.$lang]?></a>
                    <ul class="ul-child-child">
                        <?php for($j=0;$j<count($result_cat_sanpham);$j++) {
                            $d->reset();
                            $result_item_sanpham="select ten_$lang,tenkhongdau,id from #_product_item where hienthi=1 and type='product' and id_cat=".$result_cat_sanpham[$j]['id']." order by stt,id desc ";  
                            $d->query($result_item_sanpham); 
                            $result_item_sanpham=$d->result_array(); 
                         ?>
                            <li class="li-child-child"><a href="san-pham/<?=$result_list_sanpham[$i]['tenkhongdau']?>/<?=$result_cat_sanpham[$j]['tenkhongdau']?>.html"><?=$result_cat_sanpham[$j]['ten_'.$lang]?></a> 
                                <ul class="ul-child-child-child">
                                    <?php foreach ($result_item_sanpham as $key => $value) { ?>
                                       <li class="li-child-child-child">
                                            <a href="san-pham/<?=$result_list_sanpham[$i]['tenkhongdau']?>/<?=$result_cat_sanpham[$j]['tenkhongdau']?>/<?=$value['tenkhongdau']?>.html">
                                                <?=$value['ten_'.$lang]?>
                                            </a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </li>       
                        <?php } ?>
                    </ul>
                </li>
            <?php } ?>
        </ul>
    </li>
    <li <?php if($_GET['com']=="dich-vu") echo 'class="active2"'; else echo 'class="menu"'; ?>><a class="text-a" href="dich-vu.html"><?=_dichvu?></a>
        <ul class="ul-child">
            <?php for($i=0;$i<count($result_list_dichvu);$i++){ ?>
                <li class="li-child"><a class="text-a2" href="dich-vu/<?=$result_list_dichvu[$i]['tenkhongdau']?>.htm"><?=$result_list_dichvu[$i]['ten_'.$lang]?></a>
            <?php } ?>
        </ul>
    </li>
    <li <?php if($_GET['com']=="order-hang") echo 'class="active2"'; else echo 'class="menu"'; ?>><a class="text-a" href="order-hang.html">Order hàng nhật</a>
        <ul class="ul-child">
            <?php for($i=0;$i<count($result_list_sanpham1);$i++){ 
                $d->reset();
                $result_cat_sanpham="select ten_$lang,tenkhongdau,id from #_product_cat where hienthi=1 and type='product' and id_list=".$result_list_sanpham1[$i]['id']." order by stt,id desc ";  
                $d->query($result_cat_sanpham); 
                $result_cat_sanpham=$d->result_array(); 
            ?>
                <li class="li-child"><a class="text-a2" href="order-hang/<?=$result_list_sanpham1[$i]['tenkhongdau']?>.html"><?=$result_list_sanpham1[$i]['ten_'.$lang]?></a>
                    <ul class="ul-child-child">
                    <?php for($j=0;$j<count($result_cat_sanpham);$j++) { ?>
                        <li class="li-child-child"><a href="order-hang/<?=$result_list_sanpham1[$i]['tenkhongdau']?>/<?=$result_cat_sanpham[$j]['tenkhongdau']?>.html"><?=$result_list_sanpham1[$j]['ten_'.$lang]?></a>          
                    <?php } ?>
                    </ul>
                </li>
            <?php } ?>
        </ul>
    </li>
    <li class="menu logo">
        <?php include _template."layout/logo.php"; ?>
    </li>
     <li <?php if($_GET['com']=="bo-suu-tap") echo 'class="active2 bosuutapm"'; else echo 'class="menu bosuutapm"'; ?>><a class="text-a" href="bo-suu-tap.html">Bộ sưu tập</a></li>
    <li <?php if($_GET['com']=="tin-tuc") echo 'class="active2 tintucm"'; else echo 'class="menu tintucm"'; ?>><a class="text-a" href="tin-tuc.html"><?=_tintuc?></a></li>
    
    <li <?php if($_GET['com']=="nhuong-quyen") echo 'class="active2"'; else echo 'class="menu"'; ?>><a class="text-a" href="nhuong-quyen.html">Nhượng quyền</a></li>
    <li <?php if($_GET['com']=="lien-he") echo 'class="active2"'; else echo 'class="menu"'; ?>><a class="text-a" href="lien-he.html"><?=_lienhe?></a></li>
</ul>