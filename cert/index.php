<?php
$get = $_GET;
//replace your own passwd and route to cert and key
$passwd = '';
$cert = file_get_contents("");
$key = file_get_contents("");
if (array_key_exists('passwd', $get) == false & $cert != false & $key != false) {
    exit;
}
if ($get['passwd'] == $passwd) {
    header("Content-Type: application/json");

    echo json_encode(array(
        'time' => time(),
        'cert' => $cert,
        'key' => $key
    ));
}
