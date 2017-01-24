<!DOCTYPE html>
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
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login - DOM!N@TOR Network Tools</title>
<link rel="stylesheet" type="text/css" href="style.css" /> 
</head>
<body>

<div class="workspace">
<h1>DOM!N@TOR Network Tools</h1>
<br>
<form type="post" action="login.php">
<input type="text" id="username" name="username" value="Guest">
<input type="password" id="password" name="password" value="Guest">
<input type="submit" value="Login">
</div>
<br />
<?php
include 'include/config.php';
$DisableLoginWarning = DisableLoginWarning();
if (! $DisableLoginWarning == true) {
echo '<center>';
echo '<h2 style="font-size: 12px; color: red;">Default Admin Username: Admin And Password: Admin</h2>';
echo '<h2 style="font-size: 12px; color: red;">Default Default Username: Guest And Password: Guest</h2><br>';
echo '</center>';
}
session_start();
?>
</body>

<?php
if (! empty($_SESSION['message'])) {
echo '<script>alert("' . $_SESSION['message'] . '")</script>';
$_SESSION['message'] = '';
}
?>


</html>
