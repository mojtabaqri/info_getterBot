<?php
require_once 'methods.php';
require_once 'config.php';
//end require
$data=json_decode(file_get_contents("php://input"));
file_put_contents('data.json',json_encode($data));
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

}else{
    $name=$data->message->from->first_name.chr(10);;
    $username="@".$data->message->from->username.chr(10);;
    $id=$data->message->from->id;
    $text="مشخصات شما : 
✅نام :  $name
✅یوزرنیم : $username
✅چت آیدی : $id
\n
";
    if($data->message->text=="myinfo")
        SendMessage($id,$text);
    else
        exit();
}



