<div class="maxwidth">
  <div class="bg-tieudesanpham"><h2><?=$title_detail?></h2></div>
  <div class="maxwidth">
      <div class="tintuc-all">
        <?php if($_GET['com']=='tin-tuc'){ ?>
             <?php  for($i=0,$count_tintuc=count($tintuc);$i<$count_tintuc;$i++) { ?>
                  <div class="item-tintuc tintuc-detail">
                            <div class="hinh-tintuc">
                              <a href="tin-tuc/<?=$tintuc[$i]['tenkhongdau']?>.htm">
                                 <img class="transition" src="<?=_upload_baiviet_l?>/375x260x1/<?=$tintuc[$i]['photo']?>"  border="0" alt="<?=$tintuc[$i]['photo']?>" onerror="this.src='images/noimage.gif';"/>
                              </a>
                            </div>
                             <div  class="noidung-tintuc">
                              <div class="ngaydang">
                                <span><?=date('d',$result_duan[$i]['ngaytao'])?></span>
                                <p>Tháng <?=date('m',$result_duan[$i]['ngaytao'])?></p>
                              </div>
                              <div class="right-noidung">
                                <h3><a href="tin-tuc/<?=$tintuc[$i]['tenkhongdau']?>.htm"><?=$tintuc[$i]['ten_'.$lang]?></a></h3>
                                <p><?=$tintuc[$i]['mota_'.$lang]?></p>
                              </div>   
                             </div>  
                             <div class="clear"></div> 
                        </div>
              <?php } ?>
        <?php }else{ ?>
            <?php for($i=0;$i<count($tintuc);$i++) { ?>
                 <div class="item-dichvu item-dichvu-detail">
                              <div class="hinh-dichvu" <?php if(($i+1)%3==0) echo'style="margin-right:0px"'; ?>>
                                  <a href="<?=$_GET['com']?>/<?=$tintuc[$i]['tenkhongdau']?>.htm">
                                   <img class="transition" src="<?=_upload_baiviet_l?>/375x260x1/<?=$tintuc[$i]['photo']?>"  border="0" alt="<?=$tintuc[$i]['photo']?>" onerror="this.src='images/noimage.gif';"/>
                                  </a>
                              </div> 
                              <div class="noidung-dichvu">
                                  <h3 class="ten-dichvu"><a href="<?=$_GET['com']?>/<?=$tintuc[$i]['tenkhongdau']?>.htm"><?php echo $tintuc[$i]["ten_".$lang] ?></a></h3>
                              </div>
                              
                          </div>
            <?php 
            if(($i+1)%3==0) echo "<div class='clear'></div>";} 
            ?>
        <?php } ?>
     
      <div class="clear"></div>
  </div>            
</div>

</div>


