
            	<div class="bg"><h4>CÔNG TRÌNH</h4></div>
                <div class="product-all">
                <?php
			   if(count($result_product)>0){
			   for($i=0,$count=count($result_product);$i<$count;$i++){
		   ?>
				<div class="congtrinh">		
					<div><img src="<?=_upload_product_l.$result_product[$i]['thumb']?>" border="0" alt="<?=$result_product[$i]['ten']?>" /></div>		
                    <div class="ten-product"><?php echo $result_product[$i]["ten"] ?></div>
                    <div class="diadiem-product"><font color="#333333">Địa điểm: </font><?php echo $result_product[$i]["diadiem"] ?></div>
                    <div class="bt-product"><a href="cong-trinh/<?=$result_product[$i]['tenkhongdau']?>-<?=$result_product[$i]['id']?>.html"><img src="images/xemthem.png" /></a></div>
                </div>

<?php } }else echo '<p>Không tìm thấy nội dung.</p>';  ?>         	
                    <div class="clear"></div>
                </div>
                <div class="clear" style="height:20px;"></div>
     <div class="phantrang" style="text-align:center" ><?=$paging['paging']?></div>