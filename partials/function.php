<?php
if (!empty($_GET['pswLength'])) {
    $pswLength = $_GET['pswLength'];
} else {
    $pswLength = 0;
}
function createPsw($length)
{

    $elems = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $password = substr(str_shuffle($elems), 0, $length);
    return $password;
}


$newPassword = createPsw($pswLength);