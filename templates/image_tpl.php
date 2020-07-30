<div class="bg-tieudesanpham"><h3><?=_hinhanh?></h3></div>
<div class="product-all">
<?php for($i=0;$i<count($result_image);$i++) { ?>
        <div class="images" <?php if(($i+1)%4==0) echo'style="margin-right:0px"'; ?>>
            <div class="hinh-images">
                <a href="<?=_upload_tintuc_l.$result_image[$i]['photo']?>" class="phongto" rel="phongto"><img class="transition" src="<?=_upload_tintuc_l.$result_image[$i]['thumb']?>" border="0" alt="<?=$result_image[$i]['ten_'.$lang]?>" /></a>
            </div>      
        </div>       
<?php 
if(($i+1)%4==0) echo "<div class='clear'></div>";} 
?>
    <div class="clear10"></div>
    <div class="phantrang"><?=$paging['paging']?></div>
    <div class="clear0"></div>
</div>
 <script type="text/javascript">
    $(document).ready(function() {
        $(".phongto").fancybox({
            prevEffect      : 'none',
            nextEffect      : 'none',
            closeBtn        : false,
            helpers     : {
                title   : { type : 'inside' },
                buttons : {},
                thumbs  : {
                    width   : 50,
                    height  : 50
                }
            }
        });
    });
</script> 
    
        
                    
 
                