<?php
    $d->reset();
    $result_video="select ten_$lang,url,id from #_video where hienthi=1 order by stt,id desc "; 
    $d->query($result_video);   
    $result_video=$d->result_array();

?>
<script type="text/javascript">
    $(window).load(function() {
    $("#listVideo").change(function(){
        var id=$(this).val();
            $("#ajax_video_123").load("ajax_video.php", "id="+ id);
        return false;
    });
    });

</script>
<div class="ui-corner-all custom-corners">
	<div class="ui-bar ui-bar-a"><h3>Video clip</h3></div>
	<div class="ui-body ui-body-a">
        <div id="ajax_video_123">           
            <iframe  width="566" height="285" src="//www.youtube.com/embed/<?=$result_video[0]['url']?>" frameborder="0" allowfullscreen></iframe>
        </div>
    <div>                   
        <select style="margin-top: 5px;" name="listVideo" id="listVideo">
        <?php for($i=0; $i<count($result_video); $i++){?>
            <option value="<?=$result_video[$i]['id']?>"><?=$result_video[$i]['ten_vi']?></option>
        <?php } ?>  
        </select>   
    </div>
	</div>
</div>



