<?php
// API_TOKEN
define('API_KEY','api');

// INCLUDES
include 'functions.php';//metodlar
include 'values.php';//o'zgaruvchilar
include 'mysql.inc.php';//mysql
include 'keyboards.php';//keyboardlar
include 'texts.php';//textlari

//BASIC CMD
if($txt=="/start"){
            sendmessage($cid,$t_start,$k_remove);
}


?>
telegram : @onehanduz