<?php
require_once 'config.php';
if ($conn->connect_error)
    exit;

function rd($folder)
{
    global $conn;
    mt_srand(time());
    $row = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `{$folder}`"));
    $rand = mt_rand(0, $row - 1);
    $result = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM `{$folder}` LIMIT {$rand},1 "));
    return rtrim($result['name']);
}

$files = array('0.4', '0.5', '0.6', '0.7', '0.8', '0.9', '1.0', '1.1', '1.2', '1.3', '1.4');
$get = $_GET;

if (array_key_exists('proxy', $get)) {
    if (array_key_exists('size', $get)) {
        $size = $get['size'];
        if (in_array($size, $files) && strstr($size, '.')) {
            $name = rd($size);
            header("Location: https://drive.sakurapuare.com/Picture/{$size}/{$name}.png?raw&proxied&thumbnail=large");
        }
    } else {
        $folder = $files[array_rand($files)];
        $name = rd($folder);
        header("Location: https://drive.sakurapuare.com/Picture/{$folder}/{$name}.png?raw&proxied&thumbnail=large");
    }
} else {
    if (array_key_exists('size', $get)) {
        $size = $get['size'];
        if (in_array($size, $files) && strstr($size, '.')) {
            $name = rd($size);
            header("Location: https://oracle.sakurapuare.com/{$size}/{$name}.png");
        }
    } else {
        $folder = $files[array_rand($files)];
        $name = rd($folder);
        header("Location: https://oracle.sakurapuare.com/{$folder}/{$name}.png");
    }
}
