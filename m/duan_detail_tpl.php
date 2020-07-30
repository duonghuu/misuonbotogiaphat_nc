<div class="ui-corner-all custom-corners">
  <div class="ui-bar ui-bar-a"><h3><?=$tintuc_detail[0]['ten']?></h3></div>
  <div class="ui-body ui-body-a">
     <!-- AddThis Button BEGIN -->
        <div style="width:100%;float:left;margin-bottom: 10px;">
        <div class="addthis_toolbox addthis_default_style">
        <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
        <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
        <a class="addthis_counter addthis_pill_style"></a>
        </div>
        <script type="text/javascript">var addthis_config = {"data_track_addressbar":false};</script>
        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5243eb4e782fb07b"></script>
        </div>
        <!-- AddThis Button END -->  
    <div class="text">

      <?=$tintuc_detail[0]['noidung']?>
    
    </div>
  </div>
</div>

<div class="ui-corner-all custom-corners">
  <div class="ui-bar ui-bar-a"><h3>Các bài viết khác</h3></div>
  <div class="ui-body ui-body-a">
    <?php if($tintuc_khac){?>
    <ul class="other_nav">
    <?php for($i=0;$i<count($tintuc_khac); $i++){?>
      <li><a href="mua-thanh-ly/<?=$tintuc_khac[$i]['tenkhongdau']?>-<?=$tintuc_khac[$i]['id']?>.html"><?=$tintuc_khac[$i]['ten']?></a> (<?=make_date($tintuc_khac[$i]['ngaytao'])?>)</a></li>
    <?php } ?>
    </ul>
    <?php }else{?><div class="text" style="text-align:center"><b style="color:#F00; font-size: 17px;">Nội dung chưa cập nhật. Xin vui lòng xem chuyên mục khác.</b></div><?php } ?>

  </div>
</div>

