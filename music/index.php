<?php
require 'vendor/autoload.php';
use Metowolf\Meting;

$get = $_GET;
header('Content-Type: application/json');

if (empty($get['site']) || empty($get['type']) || empty($get['arg'])) {
    echo json_encode(array('time' => time(), 'code' => 400, 'msg' => 'Please GET the right params'));
    exit;
}

$site = $get['site'];
$type = $get['type'];
$arg = $get['arg'];

switch ($site) {
    case 'netease':
        $api = new Meting('netease');
        $api->cookie('');
        break;
    case 'tencent':
        $api = new Meting('tencent');
        break;
    case 'xiaomi':
        $api = new Meting('xiami');
        break;
    case 'kugou':
        $api = new Meting('kugou');
        break;
    case 'baidu':
        $api = new Meting('baidu');
        break;
    case 'kuwo':
        $api = new Meting('kuwo');
        break;
    default:
        echo json_encode(array('time' => time(), 'code' => 400, 'msg' => 'Please GET the right params'));
        break;
}

if (array_key_exists('raw', $get))
    $api->format(false);
else
    $api->format(true);

switch ($type) {
    case 'song':
        echo $api->song($arg);
        break;
    case 'album':
        echo $api->album($arg);
        break;
    case 'playlist':
        echo $api->playlist($arg);
        break;
    case 'lyric':
        echo $api->lyric($arg);
        break;
    case 'pic':
        echo $api->pic($arg);
        break;
    case 'url':
        if($site == 'netease')
            echo $api->url($arg, $bitrate = 114514);
        else echo $api->url($arg);
        break;
    case 'serch':
        echo $api->search($arg);
        break;
}
