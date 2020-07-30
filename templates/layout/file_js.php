<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-53c3f1174a2514d2"></script>
<!--<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>-->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.idTabs.min.js"></script>
<script type="text/javascript" src="js/my_script.js"></script>
<script type="text/javascript" src="js/magiczoomplus.js"></script>	
<script type="text/javascript" src="js/magicscroll.js"></script>	

<script type="text/javascript" src="nivo-slider/jquery.nivo.slider.js"></script>
<script type="text/javascript" src="slick/slick.js"></script>
<script src="Jpage/jPages.js"></script>
<script src='css/photobox/jquery.photobox.js'></script>
<?php if($config_google_recapcha == 'true'){ ?>
    <!--Begin Google Recapcha v3.0 -->
    <script src="https://www.google.com/recaptcha/api.js?render=<?=$config_site_key?>"></script>
    <script>
      grecaptcha.ready(function () {
        grecaptcha.execute('<?=$config_site_key?>', { action: '' }).then(function (token) {
          var recaptchaResponse = document.getElementById('recaptchaResponse');
          recaptchaResponse.value = token;
        });
      });
    </script>
<!--End Google Recapcha v3.0 -->
<?php } ?>
<script type="text/javascript">
jQuery(document).ready(function() {  
	// Tabs detail
	 	jQuery("#info_deals ul").idTabs();   
});
</script>
<script type="text/javascript">
function textboxChange(tb, f, sb) 
{
    if (!f) 
    {
        if (tb.value == "") 
        {
            tb.value = sb;
        }
    }
    else 
    {
        if (tb.value == sb)
        {
            tb.value = "";
        }
    }
}
function doEnter(evt){
	// IE					// Netscape/Firefox/Opera
	var key;
	if(evt.keyCode == 13 || evt.which == 13){
		onSearch(evt);
	}
}
function onSearch(evt) {			

		var keyword = document.getElementById("keyword").value;
		if(keyword=='' || keyword=='<?=_tukhoa?>')
			alert('Bạn chưa nhập từ khóa tìm kiếm!');
		else{
		//var encoded = Base64.encode(keyword);
		location.href = "tim-kiem.html/keyword="+keyword;
		loadPage(document.location);			
		}
}	
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9&appId=1490360440981337";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>

<script type="text/javascript">
    $(document).ready(function(){
      $(window).scroll(function(){
        var cach_top = $(window).scrollTop();
        if(cach_top >= 117){
          $('#menu-top').css({position: 'fixed', top: '0px',left:'0px',right:'0px', zIndex:9999});
          $('#menu-top').addClass('fixmenu');
        }else{
          $('#menu-top').css({position: 'relative', top: '0px'});
          $('#menu-top').removeClass('fixmenu');
        }
      });
      
      
    });
  </script> 
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script> 

<script type="text/javascript">
    $('.slickcontentop').slick({
      dots: false,
      infinite: true,
      speed: 300,
      slidesToShow: 3,
      slidesToScroll: 1,
      arrows: true,
      autoplay:true
    });
</script> 
<script type="text/javascript">
    $('.slick-tintuc').slick({
      dots: false,
      infinite: false,
      speed: 300,
      slidesToShow: 3,
      slidesToScroll: 1,
      arrows: true,
      autoplay:true
    });
</script> 
<script>
  $(function() {
    $("div.holder").jPages({
      containerID: "itemContainer",
      perPage: 10
    });

  });
</script>
<script>
  $(function() {
    $("div.holder1").jPages({
      containerID: "itemContainersp",
      perPage: 10
    });

  });
</script>
<script type="text/javascript">
  $('.slicktintnuc').slick({
    dots: false,
    infinite: false,
    speed: 300,
    slidesToShow: 2,
    slidesToScroll: 1,
    vertical:true,
    autoplay:true
  });
</script>
<script type="text/javascript">
  $(document).ready(function(e) {
    $('#listVideo').change(function(){
      id=$(this).val();
      $.ajax({
        url:'video.php',
        data:'id='+id,
        type:'get',
        async:true,
        success: function(res){
          $('#video').html(res);
          }
        });
      return false;
    });
  });
</script>
<script type="text/javascript">
$('.slick4').slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 3,
  autoplay:true
});
</script>
<script type="text/javascript">
$('.slickykien').slick({
  infinite: true,
  slidesToShow: 2,
  slidesToScroll: 1,
  autoplay:true,
  // prevArrow:"<img class='a-left control-c prev slick-prev' src='../images/arrow-left.png'>",
  // nextArrow:"<img class='a-right control-c next slick-next' src='../images/arrow-right.png'>"
});
</script>

<script type="text/javascript">
  $(document).ready(function($) {
    !(function(){
      $('.photobox').photobox('a', { thumbs:true, loop:false,autoplay:false });
    })();
  });
</script>

<script type="text/javascript">
    $(document).ready(function(){
      $(window).scroll(function(){
        var cach_top = $(window).scrollTop();
        if(cach_top >= 38){
          $('.logo').addClass('fixlogo');
        }else{
          $('.logo').removeClass('fixlogo');
        }
      }); 
    });
  </script> 

  <script type="text/javascript">
 
  $(document).ready(function(){
    $('.title_hotrotructuyen_popup_left').click(function(){
      if(!$('.hotrotructuyen_popup_left').hasClass('xadinh')){
        $('.hotrotructuyen_popup_left').addClass('xadinh');
        var widht_box=jQuery('.box_hotrotructuyen_popup_left').outerWidth();
        jQuery('.body_hotrotructuyen_popup_left').css({'width':widht_box});
      }else{
        $('.hotrotructuyen_popup_left').removeClass('xadinh');
        jQuery('.body_hotrotructuyen_popup_left').css({'width':0});
      }
    })
  })
  
</script>

<script type="text/javascript">
    $(document).ready(function(){
      $(window).scroll(function(){
        var cach_top = $(window).scrollTop();
        if(cach_top >= 38){
          $('.logo').addClass('fixlogo');
        }else{
          $('.logo').removeClass('fixlogo');
        }
      }); 
    });
  </script> 