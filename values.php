<?php

//INPUT
$update = json_decode(file_get_contents('php://input'));
$mess = $update->message;
$txt = $mess->text;
$cid = $mess->chat->id;
$name = $mess->chat->last_name;
$first = $mess->chat->first_name;
$pic = "/picture";
//DATA
$step = "data/$cid.dat";
$stepget = get($step);
//PIC
$test = new CURLFile("$pic/test.jpg");
?>