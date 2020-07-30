<?php	
    $d->reset();
    $sql_contact = "select noidung_$lang from #_company where type='footer'";
    $d->query($sql_contact);
    $company_contact = $d->fetch_array();   

    $d->reset();
    $result_list_dichvu="select ten_$lang,tenkhongdau,id from #_baiviet where hienthi=1 and type='dichvu' order by stt,id desc ";  
    $d->query($result_list_dichvu);  
    $result_list_dichvu=$d->result_array();

?>
<div class="congty">
  <?=$company_contact['noidung_'.$lang]?>
</div>
<div class="fanface">
  <div class="titlef"><h2>Fanpage facebook</h2></div>
  <div class="thongtin thongtincustom"><div class="fb-page" data-href="<?php echo $row_setting['facebook'] ?>/" data-tabs="timeline" data-width="335" data-height="200" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
  <blockquote cite="<?php echo $row_setting['facebook'] ?>/" class="fb-xfbml-parse-ignore"><a href="<?php echo $row_setting['facebook'] ?>/">thuviencover</a></blockquote></div></div>
</div>
<div class="bandof">
  <div class="titlef"><h2>Bản đồ</h2></div>
  <?=$row_setting['iframemap']?>
</div>
<div class="clear"></div>