<div id="wrapper">   
    <div id="header1">
         <?php include _template."layout/header1.php"; ?>                       
    </div>
     <div id="slide_trung">
            <?php include _template."layout/slideranh.php"; ?>
        </div>
    <?php if(@$_GET['com']=='' || @$_GET['com']=='index') { ?>
       
    <?php } ?>
    
    <?php if(@$_GET['com']=='' || @$_GET['com']=='index') { ?>
         <div id="gioithieu">
            <?php include _template."layout/gioithieu.php"; ?>
        </div>
        <div id="conten-top">
            <?php include _template."layout/content-top.php"; ?>
        </div>
       
    <?php } ?>
    <div class="clear"></div>
    
    <div id="content" <?php if(@$_GET['com']=='' || @$_GET['com']=='index') { echo 'class="fixcontent"'; }?>>
        <?php include _template.$template."_tpl.php"; ?>
    </div> 
    <div class="clear"></div>
    <?php if(@$_GET['com']=='' || @$_GET['com']=='index') { ?>
         <div id="thoigianmocua" style="background:<?=($row_background['photo']!='') ? 'url('._upload_hinhanh_l.$row_background['photo'].')' : $row_background['mauneen']?>; background-size:cover">
            <div class="maxwidth"><?php include _template."layout/thoigianmocua.php"; ?></div>
        </div>
        <div id="content-bot">
            <div class="maxwidth"><?php include _template."layout/content-bot.php"; ?></div>
        </div>
        <div class="clear"></div>
    <?php } ?>
    <div id="footer">
        <div class="maxwidth"><?php include _template."layout/footer.php"; ?></div><div class="clear"></div>
    </div>
    <div id="copyright"><div class="maxwidth">  <?php include _template."layout/copyright.php"; ?></div><div class="clear"></div></div> 
</div>
<?php include _template."layout/dangkyleft_left.php"; ?>