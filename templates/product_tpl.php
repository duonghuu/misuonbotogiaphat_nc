<div class="bg-tieudesanpham"><h2><?=$title_detail?></h2></div>
<div class="maxwidth"><?php for($i=0;$i<count($result_product);$i++) { ?>
   <div class="product">
     <?php if($_GET['com']=='san-pham'){ ?>
        <a class="hinhchenthem" href="<?=$_GET['com']?>/<?=$result_product[$i]['tenkhongdau']?>.htm">
            <img src="images/hinhchenthem.png">
        </a>
    <?php } ?>
        <div class="hinh-product">
            <!-- <?php if($_GET['com']=='order-hang'){ ?>
                <?php if($result_product[$i]['noibat1']!=0){ ?>
                    <span class="phantram">calo</span>
                <?php }  ?>
            <?php }  ?>     -->        
            <a href="<?=$_GET['com']?>/<?=$result_product[$i]['tenkhongdau']?>.htm">
                
            	<img class="transition" src="<?=_upload_product_l?>/400x540x1/<?=$result_product[$i]['photo']?>"  border="0" alt="<?=$result_product[$i]['photo']?>" onerror="this.src='images/noimage.gif';"/>
            </a>
        </div>   
        <h3 class="ten-product"><a href="<?=$_GET['com']?>/<?=$result_product[$i]['tenkhongdau']?>.htm">
        	<?=$result_product[$i]["ten_".$lang] ?></a>
        	 <?php if($_GET['com']=='san-pham'){ ?>
        	 	<br>
            	 <a class="title-tenen" href="<?=$_GET['com']?>/<?=$result_product[$i]['tenkhongdau']?>.htm"><?=$result_product[$i]["ten_en"] ?></a>
            <?php } ?>
        </h3> 
       
         
        <div class="mota-product">Giá: <font><?=($result_product[$i]['giaban']>0) ? $result_product[$i]['giaban'] : "Liên hệ";  ?></font></div>
    </div>    
<?php } ?></div><div class="clear"></div>
<div class="paging"><?=$paging?></div>        