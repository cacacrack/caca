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
include 'include/init.php';
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Panel - DOM!N@TOR Network Tools</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<nav><center> <h1 style="font-size: 48px;">Welcome To DOM!N@TOR Network Tools</h1></center>
</nav>
<body>
<div class="workspace">
<?php
GetUser();
WriteMenuImg();
WriteToLog('PANEL');
?>
<br><br>

</div>
<br />
</body>
<center>
<script type="text/javascript">
function about() {
alert("Made by TheRealDominator | Version: 0.7 Alpha");
}
</script>
<h2><a style="color: red;" onclick="about();">About DOM!N@TOR Network Tools</a></h2>
</center>
</html>
