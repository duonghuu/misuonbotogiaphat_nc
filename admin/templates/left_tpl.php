<div class="logo"> <a href="#" target="_blank" onclick="return false;"> <img src="images/logo.png"  alt="" /> </a></div>
<div class="sidebarSep mt0"></div>
<!-- Left navigation -->
<ul id="menu" class="nav">
  <li class="dash" id="menu1"><a class=" active" title="" href="index.php"><span>Trang chủ</span></a></li>
	<li class="categories_li <?php if($_GET['type']=='product') echo ' activemenu' ?>" id="menu_sp"><a href="" title="" class="exp"><span>Sản phẩm</span><strong></strong></a>
    <ul class="sub">
      <li<?php if($_GET['type']=='product' && $_GET['act']=='man_list') echo ' class="this"' ?>><a href="index.php?com=product&act=man_list&type=product">Danh mục cấp 1</a></li>
      <li<?php if($_GET['type']=='product' && $_GET['act']=='man_cat') echo ' class="this"' ?>><a href="index.php?com=product&act=man_cat&type=product">Danh mục cấp 2</a></li>
      <li<?php if($_GET['type']=='product' && $_GET['act']=='man_item') echo ' class="this"' ?>><a href="index.php?com=product&act=man_item&type=product">Danh mục cấp 3</a></li>
      <li<?php if($_GET['type']=='product' && $_GET['act']=='man') echo ' class="this"' ?>><a href="index.php?com=product&act=man&type=product">Sản phẩm</a></li>
      <!-- <li<?php if($_GET['com']=='order') echo ' class="this"' ?> ><a href="index.php?com=order&act=man&type=product">Quản lý đơn hàng</a></li> -->
    </ul>
  </li> 
   <li class="categories_li <?php if($_GET['com']=='baiviet' || $_GET['com']=='info') echo ' activemenu' ?>" id="menu_or"><a href="" title="" class="exp"><span>Dịch vụ</span><strong></strong></a>
    <ul class="sub"> 
      <li<?php if($_GET['type']=='dichvu' && $_GET['act']=='man_list') echo ' class="this"' ?>><a href="index.php?com=baiviet&act=man_list&type=dichvu">Danh mục cấp 1</a></li>
      <li<?php if($_GET['type']=='dichvu' && $_GET['act']=='man_cat') echo ' class="this"' ?>><a href="index.php?com=baiviet&act=man_cat&type=dichvu">Danh mục cấp 2</a></li>
      <li<?php if($_GET['type']=='dichvu'&& $_GET['act']=='man') echo ' class="this"' ?>><a href="index.php?com=baiviet&act=man&type=dichvu">Dịch vụ</a></li>

    </ul>
  </li>
    <li class="categories_li <?php if($_GET['type']=='product1') echo ' activemenu' ?>" id="menu_sp"><a href="" title="" class="exp"><span>Oder hàng nhật</span><strong></strong></a>
    <ul class="sub">
      <li<?php if($_GET['type']=='product1' && $_GET['act']=='man_list') echo ' class="this"' ?>><a href="index.php?com=product&act=man_list&type=product1">Danh mục cấp 1</a></li>
      <li<?php if($_GET['type']=='product1' && $_GET['act']=='man_cat') echo ' class="this"' ?>><a href="index.php?com=product&act=man_cat&type=product1">Danh mục cấp 2</a></li>
<!--       <li<?php if($_GET['type']=='product1' && $_GET['act']=='man_item') echo ' class="this"' ?>><a href="index.php?com=product&act=man_item&type=product1">Danh mục cấp 3</a></li> -->
      <li<?php if($_GET['type']=='product1' && $_GET['act']=='man') echo ' class="this"' ?>><a href="index.php?com=product&act=man&type=product1">Order hàng nhật</a></li>
      <!-- <li<?php if($_GET['com']=='order') echo ' class="this"' ?> ><a href="index.php?com=order&act=man&type=product">Quản lý đơn hàng</a></li> -->
    </ul>
  </li>
  <li class="categories_li <?php if(($_GET['com']=='baiviet' || $_GET['com']=='info'||$_GET['type']=='album')&&$_GET['type']!='dichvu') echo ' activemenu' ?>" id="menu_bv"><a href="" title="" class="exp"><span>Bài viết</span><strong></strong></a>
    <ul class="sub"> 
      <li<?php if($_GET['type']=='about') echo ' class="this"' ?>><a href="index.php?com=info&act=capnhat&type=about">Giới thiệu</a></li>
      <!-- <li<?php if($_GET['type']=='tuyendung') echo ' class="this"' ?>><a href="index.php?com=baiviet&act=man&type=tuyendung">Tuyển dụng</a></li> -->
      <li<?php if($_GET['type']=='nhuongquyen') echo ' class="this"' ?>><a href="index.php?com=baiviet&act=man&type=nhuongquyen">Nhượng quyền</a></li>
      <li<?php if($_GET['type']=='tintuc') echo ' class="this"' ?>><a href="index.php?com=baiviet&act=man&type=tintuc">Tin tức</a></li>
      <li<?php if($_GET['type']=='album') echo ' class="this"' ?>><a href="index.php?com=album&act=man&type=album">Bộ sưu tập</a></li>
    </ul>
  </li>


<!-- <li class="categories_li <?php if($_GET['com']=='download') echo ' activemenu' ?>" id="menu_dl"><a href="" title="" class="exp"><span>Download</span><strong></strong></a>
  <ul class="sub">
    <li<?php if($_GET['type']=='download') echo ' class="this"' ?>><a href="index.php?com=download&act=man&type=download">Download file</a></li>

  </ul>
</li> -->

  <!-- <li class="categories_li <?php if($_GET['com']=='tags') echo ' activemenu' ?>" id="menu_tg"><a href="" title="" class="exp"><span>Tags</span><strong></strong></a>
    <ul class="sub">
      <li<?php if($_GET['type']=='tags') echo ' class="this"' ?>><a href="index.php?com=tags&act=man&type=tags">Quản lý tags</a></li>

    </ul>
  </li> -->

  <li class="template_li<?php if($_GET['com']=='setting' || $_GET['com']=='newsletter' || $_GET['com']=='yahoo' || $_GET['com']=='bannerqc' || $_GET['com']=='background'  || $_GET['com']=='company' || $_GET['com']=='lkweb') echo ' activemenu' ?>" id="menu5"><a href="#" title="" class="exp"><span>Thông tin công ty</span><strong></strong></a>
    <ul class="sub">
      <li<?php if($_GET['type']=='bgweb') echo ' class="this"' ?>><a href="index.php?com=background&act=capnhat&type=bgweb" title="">Background thời gian mở cửa</a></li>
      <li<?php if($_GET['type']=='logo') echo ' class="this"' ?>><a href="index.php?com=bannerqc&act=capnhat&type=logo" title="">Logo</a></li>
      <!-- <li<?php if($_GET['type']=='banner') echo ' class="this"' ?>><a href="index.php?com=bannerqc&act=capnhat&type=banner" title="">Banner</a></li> -->
      <!-- <li<?php if($_GET['type']=='quangcao') echo ' class="this"' ?>><a href="index.php?com=bannerqc&act=capnhat&type=quangcao" title="">Quảng cáo</a></li> -->

	   
      <li<?php if($_GET['type']=='favicon') echo ' class="this"' ?>><a href="index.php?com=bannerqc&act=capnhat&type=favicon" title="">Favicon</a></li>
      <!-- <li<?php if($_GET['type']=='popup') echo ' class="this"' ?>><a href="index.php?com=bannerqc&act=capnhat&type=popup" title="">popup</a></li>  -->
      <li<?php if($_GET['type']=='mxh') echo ' class="this"' ?>><a href="index.php?com=lkweb&act=man&type=mxh" title="">Mạng xã hội</a></li>
      <!-- <li<?php if($_GET['type']=='yahoo') echo ' class="this"' ?>><a href="index.php?com=yahoo&act=man&type=yahoo" title="">Hỗ trợ trực tuyến</a></li> -->
      <li<?php if($_GET['type']=='lienhe') echo ' class="this"' ?>><a href="index.php?com=company&act=capnhat&type=lienhe" title="">Liên hệ</a></li>
	 
      <li<?php if($_GET['type']=='footer') echo ' class="this"' ?>><a href="index.php?com=company&act=capnhat&type=footer" title="">Footer</a></li>
      <!-- <li<?php if($_GET['type']=='tags') echo ' class="this"' ?>><a href="index.php?com=company&act=capnhat&type=tags" title="">Tags</a></li> -->
      <li<?php if($_GET['com']=='setting') echo ' class="this"' ?>><a href="index.php?com=setting&act=capnhat" title="">Cấu hình chung</a></li>
	    <!-- <li<?php if($_GET['type']=='download') echo ' class="this"' ?>><a href="index.php?com=download&act=man&type=download">Nhạc nền</a></li> -->
      <li<?php if($_GET['com']=='newsletter') echo ' class="this"' ?>><a href="index.php?com=newsletter&act=man" title="">Gửi Mail Giao hàng</a></li>
    </ul>
  </li>



  <li class="gallery_li<?php if($_GET['com']=='photo' || $_GET['com']=='video') echo ' activemenu' ?>" id="menu7"><a href="#" title="" class="exp"><span>Slider - Video</span><strong></strong></a>
    <ul class="sub">
      <li<?php if($_GET['type']=='slider') echo ' class="this"' ?>><a href="index.php?com=photo&act=man_photo&type=slider" title="">Hình ảnh slider</a></li>
   <li<?php if($_GET['type']=='video') echo ' class="this"' ?>><a href="index.php?com=video&act=man&type=video" title="">Video</a></li>
    <!-- <li<?php if($_GET['type']=='quangcao') echo ' class="this"' ?>><a href="index.php?com=photo&act=man_photo&type=quangcao" title="">Quảng cáo</a></li>    -->
    <!-- <li<?php if($_GET['type']=='doitac') echo ' class="this"' ?>><a href="index.php?com=photo&act=man_photo&type=doitac" title="">Đối tác</a></li>  -->
    </ul>
  </li>
  
  

  
  <!--<li class="gallery_li<?php if($_GET['com']=='photo') echo ' activemenu' ?>" id="menu7"><a href="#" title="" class="exp"><span>Phân quyền</span><strong></strong></a>
    <ul class="sub">
         <li<?php if($_GET['com']=='phanquyen') echo ' class="this"' ?>><a href="index.php?com=phanquyen&act=man" title="">Nhóm thành viên</a></li> 
		  <li><a href="index.php?com=user&act=man" title="">Thành viên<span class="numberTop" style="float:none; display:inline-block"></span></a></li>
    </ul>
  </li>-->

</ul>