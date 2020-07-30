
<?php if(!defined('_source')) die("Error");
	$d->reset();
    $result_video="select ten_vi,links,id from #_video where hienthi =1 and type='video' order by stt,id desc";
    $d->query($result_video);
    $result_video=$d->result_array();
?>

<div id="video" class="video-container">
          <iframe width="400" height="288" src="http://www.youtube.com/embed/<?=youtobi($result_video[0]['links'])?>" frameborder="0" allowfullscreen></iframe>
</div>
<div class="select">
  <select name="listVideo" id="listVideo">
          <?php for($i=0; $i<count($video); $i++){?>
            <option value="<?=$result_video[$i]['id']?>"><?=$result_video[$i]['ten_'.$lang]?></option>
          <?php } ?>  
  </select>
</div>
