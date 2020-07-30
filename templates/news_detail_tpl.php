<div class="maxwidth">
    <div class="bg-tieudesanpham"><h2><?=$title_detail?></h2></div>
    <div class="bao">
       <h1 class="title_news vcard fn"><?=$row_detail['ten_'.$lang]?> </h1>
       <div class="addthis_native_toolbox" ></div>
       <div class="noidung_tintuc"><?=$row_detail['noidung_'.$lang]?></div>
       <div class="othernews">
           <h2><?=_cacbaivietkhac?></h2>
           <ul class="links_titles" style="padding:10px 55px">
                   
        <?php foreach($tintuc as $tinkhac){?>
        <li><a href="<?=$_GET['com']?>/<?=$tinkhac['tenkhongdau']?>.htm" ><?=$tinkhac['ten_'.$lang]?></a></li>
        <?php }?>
             </ul>
      </div>

    </div>
    
</div>
