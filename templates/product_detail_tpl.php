
<div id="product-detail">
    <div class="maxwidth">
    <div class="bg-tieudesanpham"><h2>Chi Tiết Sản Phẩm</h2></div>
    <div id="left">
        <div class="hinhchitiet">
            <a id="Zoomer" href="<?=_upload_product_l.$row_detail['photo']?>" class="MagicZoomPlus hinhchitiet" rel="selectors-effect-speed: 600;"><img src="thumb.php?src=<?=_upload_product_l.$row_detail['photo']?>&w=400&h=525&zc=2&q=80" alt="<?=$row_detail['ten_'.$lang]?>"/></a>
            
            <div class="<?php if(count($result_hinhanh)>1) { ?> MagicScroll msborder <?php } ?> hinhthumb" style="margin-top:15px;">
                <?php if(count($result_hinhanh)>1) { ?><a href="<?=_upload_product_l.$row_detail['photo']?>" rel="zoom-id: Zoomer" rev="<?=_upload_product_l.$row_detail['thumb']?>"><img src="thumb.php?src=<?=_upload_product_l.$row_detail['photo']?>&w=400&h=525&zc=2&q=80" alt="<?=$row_detail['ten_'.$lang]?>" width="80px"/></a><?php } ?>    
                <?php for($i=0;$i<count($result_hinhanh);$i++) { ?>
                <a href="<?=_upload_product_l.$result_hinhanh[$i]['photo']?>" rel="zoom-id: Zoomer" rev="thumb.php?src=<?=_upload_product_l.$result_hinhanh[$i]['photo']?>&w=400&h=525&zc=2&q=80"><img src="thumb.php?src=<?=_upload_product_l.$result_hinhanh[$i]['photo']?>&w=400&h=525&zc=2&q=80" alt="<?=$row_detail['ten_'.$lang]?>" width="80px" /></a>
                <?php } ?>
            </div>                      
        </div>
    </div>
    <div id="right">
        <h1 class="vcard fn"><?php echo $row_detail['ten_'.$lang]; ?></h1>
        <div class="chitietsanpham">
            <?php echo $row_detail['mota_vi'];?>
            <?php if($row_detail['giaban']!=0){ ?>
            <div class="gia-product">Giá: <font><?php echo number_format ($row_detail['giaban'],0,",",".").' VNĐ' ?></font></div>
            <?php }else{ ?>
            <div class="gia-product">Giá: <font>Liên hệ</font></div>
            <?php } ?>
        </div> 
        <div class="chitietsanpham"><?=_luotxem?>: <span><?php echo $row_detail['luotxem']; ?></span></div>      
        <div class="chitietsanpham"><div class="addthis_native_toolbox" ></div></div>
        <div class="item_des_detail chitietsanpham">
          <span><?=_soluong?>: <input type="number" value="1" min="0" class="soluong" /></span>                       
        </div>

        <div class="item_des_detail chitietsanpham">
          <a class="add_to_cart dathang" data-id="<?=$row_detail['id']?>"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Mua ngay</a>                       
        </div>
    </div>
    <div class="clear10"></div>
    <h3><?=_thongtinchitiet?></h3>  
    <div class="clear10"></div>
    <div class="noidung"><?=$row_detail['noidung_'.$lang]; ?></div> 
    <div class="clear10"></div>
</div>

<div class="bg-tieudesanpham"><h2>Sản Phẩm Khác</h2></div>
<div class="maxwidth">
<div class="product-all">
<?php for($i=0;$i<count($product_khac);$i++) { ?>
       <div class="product">
     <?php if($_GET['com']=='san-pham'){ ?>
        <a class="hinhchenthem" href="<?=$_GET['com']?>/<?=$product_khac[$i]['tenkhongdau']?>.htm">
            <img src="images/hinhchenthem.png">
        </a>
    <?php } ?>
        <div class="hinh-product">
           
            <a href="<?=$_GET['com']?>/<?=$product_khac[$i]['tenkhongdau']?>.htm">
                
                <img class="transition" src="<?=_upload_product_l?>/400x540x1/<?=$product_khac[$i]['photo']?>"  border="0" alt="<?=$product_khac[$i]['photo']?>" onerror="this.src='images/noimage.gif';"/>
            </a>
        </div>   
        <h3 class="ten-product"><a href="<?=$_GET['com']?>/<?=$product_khac[$i]['tenkhongdau']?>.htm">
            <?=$product_khac[$i]["ten_".$lang] ?></a>
             <?php if($_GET['com']=='san-pham'){ ?>
                <br>
                 <a class="title-tenen" href="<?=$_GET['com']?>/<?=$product_khac[$i]['tenkhongdau']?>.htm"><?=$product_khac[$i]["ten_en"] ?></a>
            <?php } ?>
        </h3> 
       
         
        <div class="mota-product">Giá: <font><?=($product_khac[$i]['giaban']>0) ? $product_khac[$i]['giaban'] : "Liên hệ";  ?></font></div>
    </div>
<?php } ?>
    <div class="clear"></div>
</div>
</div>
</div>