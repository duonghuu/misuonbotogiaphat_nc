<?php
    $d->reset();
    $sql_dmsp="select ten_$lang as ten,tenkhongdau,id from #_product_list where hienthi =1 and type='product'  order by stt,id desc";
    $d->query($sql_dmsp);
    $list_product=$d->result_array();
?>
<nav id="menu">
            <ul id="nav">
                 
                <li class="vach_menu"><a href="index.html" class="<?php if($source=='index') echo 'menu_active'; ?> "><?=_trangchu?></a></li>  
                <li class="vach_menu"><a href="gioi-thieu.html" class="<?php if($com=='gioi-thieu') echo 'menu_active'; ?> "><?=_gioithieu?></a>
					<?php 
						$d->reset();
						$sql = "select ten_$lang as ten,id,tenkhongdau,id from #_baiviet where hienthi=1 and type='gioithieu'  order by stt,id desc";
						$d->query($sql);
						$about_item = $d->result_array();
					
					?>
					<ul>
						<?php foreach($about_item as $about_item) { ?>
							 <li><a href="gioi-thieu/<?=$about_item['tenkhongdau']?>-<?=$about_item['id']?>.html"><?=$about_item['ten']?></a></li>
						<?php } ?>
					</ul>
					
					
				</li>  
				 
				<?php foreach($hethong as $hethong) { 
					$d->reset();
					$sql = "select ten_$lang as ten,id,tenkhongdau from #_baiviet_cat where hienthi=1 and type='hethong'  and id_list='".$hethong['id']."' order by stt,id desc";
					$d->query($sql);
					$hethong_cat = $d->result_array();
				?>
					<li><a href="he-thong/<?=$hethong['tenkhongdau']?>"><?=$hethong['ten']?></a>
						<ul>
							<?php foreach($hethong_cat as $hethong_cat) { ?>
								<li><a href="he-thong/<?=$hethong['tenkhongdau']?>/<?=$hethong_cat['tenkhongdau']?>"><?=$hethong_cat['ten']?></a></li>
							<?php } ?>
						</ul>
					</li>  
				<?php } ?>
				
				<li class="vach_menu"><a href="<?=$chinhanh['url']?>" class="<?php if($com=='he-thong-chi-nhanh') echo 'menu_active'; ?> "><?=$chinhanh['ten']?></a></li> 
				
				<li class="vach_menu"><a href="he-thong-chi-nhanh.html" class="<?php if($com=='he-thong-chi-nhanh') echo 'menu_active'; ?> ">Thông tin chi nhánh</a></li> 
				 
				 <li class="vach_menu"><a href="chuong-trinh-uu-dai.html" class="<?php if($com=='chuong-trinh-uu-dai') echo 'menu_active'; ?> ">Chương trình ưu đãi</a></li> 
				 
				 <li class="vach_menu"><a href="tin-tuc.html" class="<?php if($com=='tin-tuc') echo 'menu_active'; ?> ">Tin tức</a></li>  
				 <li class="vach_menu"><a href="bac-si.html" class="<?php if($com=='bac-si') echo 'menu_active'; ?> ">Bác sĩ</a></li> 
				 
				
                <li class="vach_menu"><a href="lien-he.html" class="<?php if($com=='lien-he') echo 'menu_active'; ?>"  ><?=_lienhe?></a></li>    
               
               
                
               
            </ul>
</nav>