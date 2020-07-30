<div id="wrapper">
    <?php
        
        include_once _template."layout/header.php";
        include_once _template."layout/menu.php";
        if($source == 'index'){
            include_once _template."layout/slideshow.php";        
        }
        include_once _template."layout/search.php";
    ?>
    <div id="container">
           
        <?php include _template.$template."_tpl.php";?>
        
    </div>
    <?php
        include_once _template."layout/footer.php";
    ?>
</div>
<div id="footer1" style="z-index:1000;position: fixed;bottom: 0;width: 100%;left: 0;">
        <table style="width:100%;text-align:center;margin:auto;background: #ff7f00;border: 3px solid #e8e8e8;" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td>
                    <a href="tel:<?=$row_setting['hotline']?>" class="link_title blink_me ui-link">
                        <img src="images/goidien.png" alt="Gọi điện"> Gọi Điện
                    </a>
                </td>
                <td height="50">
                    <a href="sms:<?=$row_setting['hotline']?>" class="link_title ui-link" target="_blank">
                        <img src="images/tuvan.png" alt="SMS"> SMS
                    </a>
                </td>
                <td>
                    <a href="lien-he.html" class="link_title ui-link" target="_blank">
                        <img src="images/chiduong.png" alt="Chỉ đường"> Chỉ Đường
                    </a>
                </td>
            </tr>
        </tbody>
        </table>
    </div>