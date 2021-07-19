<?php
require "vendor/autoload.php";
use Predis\Client;
$redis = new Client();

if(isset($_POST['message'])){
    $message = $_POST['message'];
    $sender  = $_POST['sender'];
    $redis->rpush('cr01',$sender.": ".$message);
    $messages = $redis->lrange('cr01',0,$redis->llen('cr01'));
    echo "<p>";
    foreach($messages as $m) {
        echo $m . "<br>";
    }
        echo "</p>";
}
if(isset($_POST['refresh'])){
    $messages = $redis->lrange('cr01',0,$redis->llen('cr01'));
    echo "<p>";
    foreach($messages as $m) {
        echo $m . "<br>";
    }
    echo "</p>";
}