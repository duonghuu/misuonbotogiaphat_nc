
<script type="text/javascript">
$(document).ready(function(){
	$('div.tieude-hotro').click(function(){
		if($('div.list-hotrotructuyen').hasClass('hide')){
			$('div.bg-hotrotructuyen').animate({right: 0},500,function(){
				$('div.list-hotrotructuyen').removeClass('hide');	
			})
		}else{
			$('div.bg-hotrotructuyen').animate({right: -301},500,function(){
				$('div.list-hotrotructuyen').addClass('hide');	
			})
		}
	})
});
</script>
<div class="bg-hotrotructuyen">
	<div class="tieude-hotro"></div>
    <div class="list-hotrotructuyen hide">
    	<div id="fb-root"></div>
			<script>(function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
            <div class="fb-like-box" data-href="<?php echo $row_setting['facebook'] ?>" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="false" data-height="300px" data-width="300px"></div>
    </div>
</div>