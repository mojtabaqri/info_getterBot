<?php
require_once 'methods.php';
require_once 'config.php';
//end require
$data=json_decode(file_get_contents("php://input"));
//if message has attachment $attachment is true ---------------------
if (array_key_exists('channel_post',$data)){
    $channelId=$data->channel_post->chat->id;
    $channel_name=$data->channel_post->chat->title;
    $text="
    ✅نام کانال :  $channel_name
".chr(10);
    $text.=" ✅چت آیدی کانال :    $channelId".chr(10);
    if($data->channel_post->text=="chinfo")
    SendMessage($channelId,$text);

    else
        exit();

}


