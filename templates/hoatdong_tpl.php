<div class="bg-tieude"><h4><?= _tinhhinhhd ?></h4></div>
                        <?php
                        for($i=0,$count=count($tintuc);$i<$count;$i++)
                        {					
                        ?>
                            <div class="menu-content">    
                            	<div class="bg-tieudesanpham"><a href="tinh-hinh-hoat-dong/<?=$tintuc[$i]['tenkhongdau']?>-<?=$tintuc[$i]['id']?>.html" style="text-align:center"><?= catchuoi($tintuc[$i]['ten_'.$lang],50) ?></a></div>
                				<div class="khungsanpham">
                                	<div class="run-picture"><a href="tinh-hinh-hoat-dong/<?=$tintuc[$i]['tenkhongdau']?>-<?=$tintuc[$i]['id']?>.html"><img src="<?=_upload_tintuc_l.$tintuc[$i]['thumb']?>" /></a></div>
                                    <div class="noidung-gioithieu"><?= catchuoi($tintuc[$i]['mota_'.$lang],200) ?><div class="xemthem"><a href="tinh-hinh-hoat-dong/<?=$tintuc[$i]['tenkhongdau']?>-<?=$tintuc[$i]['id']?>.html"><?= _xemthem ?></a></div></div>
                                    <div class="clear"></div>
                                </div>
                                
                            </div>
                            
                        <?php
                        }
                        ?>       	
               