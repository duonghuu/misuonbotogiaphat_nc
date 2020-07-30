<?php 
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
$en_salt = '@#$fd_!34^';
$en_pass = '123qwE@';
$en_dbpass = md5('$nina@'.$en_pass.$en_salt);
$en_dbloginsession = md5(sha1($en_pass.'admin'));
 ?>
<p>Salt: <?= $en_salt ?></p>
<p>--------------------------------------------------------------------</p>
<p>Pass: <?= $en_pass ?></p>
<p>--------------------------------------------------------------------</p>
<p>$nina@<?= $en_pass ?><?= $en_salt ?></p>
<p>password: <?= $en_dbpass ?></p>
<p>login_session: <?= $en_dbloginsession ?></p>
<p>--------------------------------------------------------------------</p>