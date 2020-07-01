<?php
require_once 'methods.php';
require_once 'config.php';
//end require
$data=json_decode(file_get_contents("php://input"));
$fullMessage=$data->message; //get fullmesage
//if message has attachment $attachment is true ---------------------
