<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
//  __________________________________________________________________________________________
// |                                                                                          |
// |  Made by TheRealDominator                                                                |
// |  Please do not remove any of this tags                                                   |
// |  this code is free to use For everyone as long they don't claim that this is their work  |
// |  thanks For reading this and enjoy my code                                               |
// |__________________________________________________________________________________________|
// 
?>
<head>
<?php
include 'include/init.php';
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HTTP Reader - DOM!N@TOR Network Tools</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<nav>
<center><h2>
<?php
WriteMenu();
$Reader = DisableHTTP();
if ($Reader == true) {
header('location: panel.php');
}
WriteToLog('HTTP READER');
?>

</h2></center><br><br><br><br>
</nav>
<body>

<div class="workspace">
<img src="img/http.png" width="256px" height="256px"><br><br>
<br>
<br>
<h3>The url needs to <i><b>START</b></i> with http:// or https://</h3>
<form method="post" >
    Url: 
    <input type="text" name="domain" value="http://" /> 
    <input type="submit" value="Read" />
</form>
<br>

<?php

function startsWith($source, $req) { 
return $req === "" || strpos($source, $req) === 0; 
} 


if(!empty($_POST['domain'])) {    
$url = $_POST['domain'];

if (startsWith($url, 'http://') or startsWith($url, 'https://')) {
$headers = get_headers($url);
echo $headers[0] . '<br>';
echo $headers[1] . '<br>';
echo $headers[2] . '<br>';
echo $headers[3] . '<br>';
echo $headers[4] . '<br>';
echo $headers[5] . '<br>';
echo $headers[6] . '<br>';
echo $headers[7] . '<br>';
echo $headers[8] . '<br>';
echo $headers[9] . '<br>';
}
else {
echo '<b style="color: red;">' . "The Url didn't Start with http:// or https://<b>";
}
}
?>


</div>
<br />
</body>



</html>
