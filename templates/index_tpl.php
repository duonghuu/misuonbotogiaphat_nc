<div class="bao-sanpham-noibat">
    <div class="maxwidth">
        <div class="bg-tieudesanpham"><h2>Order hàng nhật</h2></div>
        <div class="product-all" id="itemContainersp">
            <?php for($i=0;$i<count($result_sanphamnoibat);$i++) { ?>
                <div class="product">
                     <div class="wap_gia">
                <a href="lien-he.html" title="BALO LAPTOP 0110 ( Xanh lá)"><span>Liên hệ</span></a>
                <a href="balo-laptop-0110-xanh-la" title="BALO LAPTOP 0110 ( Xanh lá)"><img src="images/icon-seach1.png"></a>
            </div>
                    <div class="hinh-product">
                       <!--  <?php if($result_sanphamnoibat[$i]['noibat1']!=0){ ?>
                            <span class="phantram">calo</span>
                        <?php }  ?> -->
                        <a href="san-pham/<?=$result_sanphamnoibat[$i]['tenkhongdau']?>.htm">
                       <img class="transition" src="<?=_upload_product_l?>/228x229x2/<?=$result_sanphamnoibat[$i]['photo']?>" border="0" alt="<?=$result_product[$i]['photo']?>" onerror="this.src='images/noimage.gif';"/>
                        </a>
                    </div>   
                    <h3 class="ten-product"><a href="san-pham/<?=$result_sanphamnoibat[$i]['tenkhongdau']?>.htm"><?php echo $result_sanphamnoibat[$i]["ten_".$lang] ?></a></h3>  
                    <div class="mota-product"><font><?=($result_sanphamnoibat[$i]['giaban']>0) ? number_format($result_sanphamnoibat[$i]['giaban'],0," "," ").' vnđ' : 'Liên hệ'; ?></font></div>
                </div>     
            <?php } ?>
            <div class="clear"></div>
        </div> 
        <div class="clear"></div>
        <div class="holder holder1"></div>
    </div>
</div>
