<?php			
	$d->reset();
    $result_product_list="select ten_$lang,tenkhongdau,id from #_product_list where hienthi=1 and type='product' and noibat!=0 order by stt,id desc ";   
    $d->query($result_product_list);    
    $result_product_list=$d->result_array();	

?>
<?php for($i=0;$i<count($result_product_list);$i++) {
    $d->reset();
    $result_product_cat="select ten_$lang,tenkhongdau,id from #_product_cat where hienthi=1 and id_list='".$result_product_list[$i]['id']."' and type='product' order by stt,id desc ";    
    $d->query($result_product_cat); 
    $result_product_cat=$d->result_array();
?>
 <div class="list-danhmucsanpham">
    <div class="bg-tieude"><h2><a href="san-pham/<?=$result_product_list[$i]['tenkhongdau']?>.html"><?=$result_product_list[$i]['ten_'.$lang]?></a></h2></div>
    <ul id="nav-ul">
        <?php for($j=0;$j<count($result_product_cat);$j++){ ?>
        <li class='nav-li'>
            <a class="nav-a" href="san-pham/<?=$result_product_list[$i]['tenkhongdau']?>/<?=$result_product_cat[$j]['tenkhongdau']?>.htm"><?=$result_product_cat[$j]['ten_'.$lang]?></a>
        </li>
        <?php } ?>
    </ul>
</div>
<?php } ?>

