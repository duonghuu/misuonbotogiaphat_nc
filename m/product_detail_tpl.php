
<script type="text/javascript">

$(document).ready(function() {

  $( '.swipebox' ).swipebox();
  
  $('.slider-product-thumb').bxSlider({
    slideWidth: 120,
    minSlides: 1,
    maxSlides: 10,
    moveSlides: 1,
    slideMargin: 10,
    pager: false
  });
  
  
  $('div.slide').each(function(){
    
    $(this).hover(function(){
      $('div.slide').find('*').removeClass('active');
      $(this).find('*').addClass('active');
      var id_photo = $(this).find('p').attr('value');
      $('div.product-img-large').find('img').removeClass('active');
      $('div.product-img-large').find('img.photo-'+id_photo).addClass('active')
    });
  });
  
  $('#productTab a').click(function(e){
    e.stopImmediatePropagation();
    var value = $(this).attr('href');
    var idContent = value.replace('#','');
    $('#productTab a').removeClass('ui-btn-active');
    $(this).addClass('ui-btn-active');
    $('div#productTabContent .tab-pane').css({display: 'none'});
    $('div#productTabContent #'+idContent).css({display: 'block'});
    return false;
  });
  
});
</script>
<div class="ui-corner-all custom-corners">
  <div class="ui-bar ui-bar-a"><h3><?php echo $row_detail['ten_'.$lang]; ?></h3></div>
  <div class="ui-body ui-body-a">
      <div id="product-images">
            
          <div class="product-img-large">
            <a href="<?=_upload_product_l.$row_detail['photo']?>" class="swipebox" target="_blank" ><img src="<?=_upload_product_l.$row_detail['thumb']?>" class="active photo-0" /></a>
            <?php for($i=1, $count = count($result_hinhanh); $i<=$count; $i++){ ?>
            <a href="<?=_upload_product_l.$result_hinhanh[$i-1]['photo']?>" class="swipebox" target="_blank" ><img src="<?=_upload_product_l.$result_hinhanh[$i-1]['thumb']?>" class="photo-<?=$i?>" /></a>
            <?php } ?>
          </div>

          <div class="product-img-thumb">
            <div class="slider-product-thumb">
              <div class="slide">
                <p class="active transitionAll" value="0" ><img class="transitionAll" src="<?=_upload_product_l.$row_detail['thumb']?>"  /></p>
              </div>
              <?php for($i=1, $count = count($result_hinhanh); $i<=$count; $i++){ ?>
              <div class="slide">
                <p class="transitionAll" value="<?=$i?>"><img class="transitionAll" src="<?=_upload_product_l.$result_hinhanh[$i-1]['thumb']?>"/></p>
              </div>
              <?php } ?>
              
            </div>
          </div>
      </div>
      <div class="clear"></div>
      <div id="product-content">
        <div class="attr-content">
          <?php if($row_detail['giaban']!=0){ ?>
            <p class="attr-left">Giá: <span style="font-weight:bold; color:#F00;"><?php echo number_format ($row_detail['giaban'],0,",",".").' VNĐ' ?></span></p>
            <?php }else{ ?>
            <p class="attr-left">Giá: <span style="font-weight:bold; color:#F00;">Liên hệ</span></p>
          <?php } ?>
        </div>
        <br>
        <div class="attr-content">
        <!-- AddThis Button BEGIN -->
                <div class="addthis_toolbox addthis_default_style">
                <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
                <a class="addthis_counter addthis_pill_style"></a>
                </div>
                <script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
                <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-51a412672d41cf3b"></script><script type="text/javascript">// <![CDATA[
                      var addthis_config = {
                         data_track_clickback: false,
                         }
                      var addthis_share = {
                      templates: { twitter: "{{title}} {{url}} via @YourTwitterName"}
                      }
                      // ]]></script>
                <!-- AddThis Button END -->
        </div>
		  <div class="clear"></div>
      <?=$row_detail["noidung_vi"]?>
      </div>
  </div>
</div>

<div class="ui-corner-all custom-corners">
  <div class="ui-bar ui-bar-a"><h3>Sản Phẩm Khác</h3></div>
  <div class="ui-body ui-body-a">
    <?php for($i=0; $i<count($product_khac); $i++){?>
      <div class="box-sp">
      <p class="sp-img">
        <a href="san-pham/<?=$product_khac[$i]['tenkhongdau']?>.htm"><img src="<?=_upload_product_l.$product_khac[$i]["thumb"]?>"  /></a>
      </p>
        <h3 class="sp-name"><a href="san-pham/<?=$product_khac[$i]['tenkhongdau']?>.htm"><h4><?=$product_khac[$i]["ten_".$lang]?></h4></a></h3>
        <?php if($row_detail['giaban']!=0){ ?>
            <p class="attr-left">Giá: <span style="font-weight:bold; color:#F00;"><?php echo number_format ($row_detail['giaban'],0,",",".").' VNĐ' ?></span></p>
            <?php }else{ ?>
            <p class="attr-left">Giá: <span style="font-weight:bold; color:#F00;">Liên hệ</span></p>
          <?php } ?>
    </div>

    <?php if(($i+1)%2 ==0) echo '<div class="clear"></div>'; } ?>
    <div class="clear"></div>
  </div>
</div>
<form name="form1" action="index.php">
    <input type="hidden" name="productid" />
    <input type="hidden" name="idsize" />
    <input type="hidden" name="soluong" />
    <input type="hidden" name="command" />
</form>
                    
 <script language="javascript">
    function addtocart(pid){
        document.form1.productid.value=pid;
        document.form1.idsize.value=document.getElementById("idsize").value;
        document.form1.command.value='add';
        document.form1.submit();
    }
</script>    