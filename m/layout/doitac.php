<script type="text/javascript" src="js/crawler.js"></script>
<?php
  $d->reset();
  $result_doitac="select link,photo from #_cataloque where hienthi =1 order by stt,id desc";
  $d->query($result_doitac);
  $result_doitac=$d->result_array();
?>

<script type="text/javascript">
marqueeInit({
  uniqueid: 'mycrawler2',
  style: {
    'padding-left': '0px',
    'height': '110px',
  },
  inc: 5, //speed - pixel increment for each iteration of this marquee's movement
  mouse: 'cursor driven', //mouseover behavior ('pause' 'cursor driven' or false)
  moveatleast: 1,
  neutral: 150,
  savedirection: true,
  random: true
});
</script>
       
<div class="ui-corner-all custom-corners">
  <div class="ui-bar ui-bar-a"><h3>Hình ảnh</h3></div>   
  <div class="ui-body-a" style="padding:10px 0px">   
    <div class="marquee" id="mycrawler2">
      <?php for($i=0,$count=count($result_doitac);$i<$count;$i++) { ?>
        <a class="phongto" rel="group" href="<?=_upload_hinhanh_l.$result_doitac[$i]['photo']?>"><img style="margin-right:20px;" src="<?=_upload_hinhanh_l.$result_doitac[$i]['photo']?>" height="110px" /></a>
      <?php } ?>
    </div>        
  </div>  
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

    
 
