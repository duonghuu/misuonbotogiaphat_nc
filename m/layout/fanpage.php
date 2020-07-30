 <script type="text/javascript">
	$(document).ready(function(){
		$('.title_fanpage').click(function(){
			$('.fanpage').css({'right':'0px'});
			$('.title_fanpage').hide();	
			$('.title_fanpage1').show();
		});
		
		$('.title_fanpage1').click(function(){
			$('.fanpage').css({'right':'-200px'});
			
			$('.title_fanpage1').hide(300);
			$('.title_fanpage').show(310);
			
		});
	});
</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fanpage">
	<div class="title_fanpage">
		<img src="images/icon/facebook.png" alt="facebook">
	</div>
	<div class="title_fanpage1">
		<img src="images/icon/facebook.png" alt="facebook">
	</div>
	<div class="content_facebook">
		<div class="fb-like-box" data-href="<?=$row_setting['facebook']?>" data-width="200" data-height="200"  data-small-header="true" data-adapt-container-width="false" data-hide-cover="true" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/facebook"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div>
		</div>
	</div>


</div>
