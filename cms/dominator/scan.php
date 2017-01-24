<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
//  __________________________________________________________________________________________
// |                                                                                          |
// |  Made by TheRealDominator                                                                |
// |  Please do not remove any of this tags                                                   |
// |  this code is free to use For everyone as long they don't claim that this is their work  |
// |  thanks For reading this and enjoy my code                                               |
// |__________________________________________________________________________________________|
// 
include 'include/init.php';
include 'include/scanner.php';
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Vulnerability Scanner - DOM!N@TOR Network Tools</title>
<link rel="stylesheet" type="text/css" href="style.css" /> </head>
<nav>
<center><h2>
<?php
WriteMenu();
$Scanner = DisableScanner();
if ($Scanner == true) {
header('location: panel.php');
}
WriteToLog('VULNERABILITY SCANNER');
?>

</h2></center><br><br><br><br>
</nav>
<body>

<div class="workspace">
<img src="img/scan.png" width="256px" height="256px"><br><br>
<br>
<br>
<h3>it is <b><i>Possible</i></b> that there are some false positives<h3>
<h3>The url needs to <i><b>START</b></i> with http:// or https://</h3>
<form method="post" >
    Url: 
    <input type="text" name="domain" value="http://" /> 
    <input type="submit" value="Scan" />
</form>
<br>

<?php

if(!empty($_POST['domain'])) {    
$url = $_POST['domain'];
Vscan($url);
}
?>


</div>
<br />
</body>



</html>
