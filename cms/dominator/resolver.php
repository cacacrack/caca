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
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Resolver - DOM!N@TOR Network Tools</title>
<link rel="stylesheet" type="text/css" href="style.css" /> </head>
<nav>
<center><h2>
<?php
WriteMenu();
$Resolver = DisableResolver();
if ($Resolver == true) {
header('location: panel.php');
}
WriteToLog('RESOLVER');
?>

</h2></center><br><br><br><br>
</nav>
<body>

<div class="workspace">
<img src="img/resolver.png" width="256px" height="256px"><br><br>
<br>
<br>
<form method="post" >
    Domain: 
    <input type="text" name="domain" /> 
    <input type="submit" value="Resolve" />
</form>
<br>

<?php
if(!empty($_POST['domain'])) {    
$host = $_POST['domain'];
echo 'IP Address: ' . gethostbyname($host);
}
?>


</div>
<br />
</body>



</html>
