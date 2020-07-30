<div class="maxwidth">
  <div class="bg-tieudesanpham"><h2><?=$title_detail?></h2></div>
  <div class="product-all">   
     <h1 class="title_news vcard fn"><?=$row_detail['ten_'.$lang]?> </h1>
     <div class="addthis_native_toolbox" ></div>
     <iframe  width="600" height="400" src="//www.youtube.com/embed/<?=youtobi($row_detail['links'])?>" frameborder="0" allowfullscreen></iframe>
     <div class="othernews">
         <h2>Các video khác</h2>
         <ul class="links_titles" style="padding:10px 55px">     
            <?php foreach($tintuc as $tinkhac){?>
            <li><a href="<?=$_GET['com']?>/<?=$tinkhac['tenkhongdau']?>.htm" ><?=$tinkhac['ten_'.$lang]?></a> <font color="#666">(<?=make_date($tinkhac['ngaytao'])?>)</font></li>
            <?php }?>
          </ul>
    </div>
  </div>
</div>
