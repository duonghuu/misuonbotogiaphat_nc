
<link href="css/jquery.simplyscroll.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery.simplyscroll.js"></script>

<script type="text/javascript">
(function($) {
    $(function() {
        $(".scroller").simplyScroll({orientation:'vertical',customClass:'vert'});
    });
})(jQuery);
</script>

<div class="left">
    <div class="left-head">
        <p>
            DANH MỤC SẢN PHẨM
        </p>
    </div>
    <div class="left-dm">
        <ul id="accordion-1">
            <?php  
            $d->reset();
            $sql="select ten,tenkhongdau,id from #_product_danhmuc where hienthi=1 order by stt,id desc";
            $d->query($sql);
            $arr_dm=$d->result_array();

            if(!empty($arr_dm))
            {
                foreach ($arr_dm as $dm) 
                {
                    ?>
                    <li>
                        <img src="images/arrow-dm.jpg" alt="arrow">
                        <a href="san-pham/<?=$dm['tenkhongdau']?>_<?=$dm['id']?>.html">
                            <?=$dm['ten']?>
                        </a>

                        <ul>
                            <?php  
                            $d->reset();
                            $sql="select ten,tenkhongdau,id from #_product_list where hienthi=1 and id_danhmuc=".$dm['id']." order by stt,id desc";
                            $d->query($sql);
                            $arr_list=$d->result_array();

                            if(!empty($arr_list))
                            {
                                foreach ($arr_list as $list) 
                                {
                                   ?>
                                   <li>
                                    <img src="images/arrow-dm.jpg" alt="arrow">
                                    <a href="san-pham/<?=$list['tenkhongdau']?>-<?=$list['id']?>/">
                                        <?=$list['ten']?>
                                    </a>
                                </li>
                                <?php
                            }
                        }
                        ?>
                    </ul>
                </li>
                <?php
            }
        }
        ?>
        
    </ul>
</div>

<div class="left-head" style="margin-top:20px;">
    <p>
        HÀNG THỜI TRANG
    </p>
</div>

<div class="fashion-cont">
    <ul class="scroller">
        <?php  
            $d->reset();
            $sql="select * from #_product where hienthi=1 and spmoi = 1 order by stt,id desc";
            $d->query($sql);
            $arr_fashion=$d->result_array();

            if(!empty($arr_fashion))
            {
                foreach ($arr_fashion as $fashion) 
                {
                    ?> 
                         <div class="fashion-item">
                            <a href="san-pham/<?=$fashion['tenkhongdau']?>-<?=$fashion['id']?>">
                                <img src="<?=_upload_sanpham_l.$fashion['thumb']?>" alt="<?=$fashion['ten']?>">
                            </a>

                            <div class="fashion-text">
                                <a href="san-pham/<?=$fashion['tenkhongdau']?>-<?=$fashion['id']?>">
                                    <h2>Tên sản phẩm</h2>
                                </a>

                                <a class="fancybox" href="<?=_upload_sanpham_l.$fashion['photo']?>">
                                    <button class="fashion-button1">
                                        Xem Ảnh
                                    </button>
                                </a>   
                                
                                <a href="san-pham/<?=$fashion['tenkhongdau']?>-<?=$fashion['id']?>">
                                    <button class="fashion-button2">
                                        Chi Tiết
                                    </button>
                                </a>
                            </div>  
                        </div>
                    <?php
                }
            }
        ?>
    </ul>
</div>
</div>