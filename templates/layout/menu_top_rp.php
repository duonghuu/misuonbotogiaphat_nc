<?php	
	$d->reset();
	$result_list_sanpham="select ten_$lang,tenkhongdau,id from #_product_list where hienthi=1 order by stt,id desc ";	
	$d->query($result_list_sanpham);	
	$result_list_sanpham=$d->result_array();	
?>
<div id="btn-lg" class="glyphicon glyphicon-align-justify"></div>
<ul id="menu-rp-top-parent">
    <li <?php if(@$_GET['com']=='index' || @$_GET['com']=='') { echo "class='active2-rp'"; } else{ echo "class='li-rp-top-parent'";} ?> ><a class="text-a-rp" href="index.html"><?= _trangchu ?></a></li> 
    <li <?php if(@$_GET['com']=='gioi-thieu') { echo "class='active2-rp'"; } else{ echo "class='li-rp-top-parent'";}?>><a class="text-a-rp" href="gioi-thieu.html"><?=_gioithieu?></a></li>  
    <li <?php if(@$_GET['com']=='san-pham') { echo "class='active2-rp'"; } else{ echo "class='li-rp-top-parent'";}?>><a class="text-a-rp" href="san-pham.html">Sản phẩm</a><i data-info="sanpham" class="fa fa-caret-down soxuong"></i>    
        <div class="clear"></div>
        <ul class="ul-child-rb" data-post="sanpham">    
        <?php for($i=0;$i<count($result_list_sanpham);$i++) { 
            $d->reset();
            $result_cat_sanpham="select ten_$lang,tenkhongdau,id from #_product_cat where hienthi=1 and id_list=".$result_list_sanpham[$i]['id']." order by stt,id desc ";  
            $d->query($result_cat_sanpham); 
            $result_cat_sanpham=$d->result_array();
        ?>    
            <li class="li-child-rb"><i class="fa fa-caret-right"></i>&nbsp;&nbsp;<a class="text-a-2-rp" href="san-pham/<?=$result_list_sanpham[$i]['tenkhongdau']?>.html"><?=$result_list_sanpham[$i]['ten_'.$lang]?></a></li>
        <?php } ?>
        </ul>
    </li>
    <li <?php if(@$_GET['com']=='tin-tuc') { echo "class='active2-rp'"; } else{ echo "class='li-rp-top-parent'";}?>><a class="text-a-rp" href="tin-tuc.html"><?=_tintuc?></a></li> 
     <li <?php if(@$_GET['com']=='dich-vu') { echo "class='active2-rp'"; } else{ echo "class='li-rp-top-parent'";}?>><a class="text-a-rp" href="dich-vu.html">Dịch vụ</a></li>
    <li <?php if(@$_GET['com']=='tuyen-dung') { echo "class='active2-rp'"; } else{ echo "class='li-rp-top-parent'";}?>><a class="text-a-rp" href="tuyen-dung.html">Tuyển dụng</a></li>
             
    <li <?php if(@$_GET['com']=='lien-he') { echo "class='active2-rp'"; } else{ echo "class='li-rp-top-parent'";}?>><a class="text-a-rp" href="lien-he.html"><?= _lienhe ?></a></li>  
</ul>
<div class="clear"></div>       
<script type="text/javascript">
$(document).ready(function(){
	$('#menu-rp-top-parent').hide();
	$('#btn-lg').click(function(){
		$('#menu-rp-top-parent').slideToggle();										
	});											
});
</script>
 <script type="text/javascript">
    $(document).ready(function(){
        $('.ul-child-rb').hide();
        $('.soxuong').click(function(){
            var IDx = $(this).attr('data-info');
            $("ul[data-post='" + IDx + "']").slideToggle(); 
            if($(this).hasClass('fa-caret-down'))
            {        
                $(this).addClass('fa-caret-up');
                $(this).removeClass('fa-caret-down');
            }         
            else{
                $(this).addClass('fa-caret-down');
                $(this).removeClass('fa-caret-up');
            }                   
        });

    });
</script>