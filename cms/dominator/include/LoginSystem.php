<?php
//  __________________________________________________________________________________________
// |                                                                                          |
// |  Made by TheRealDominator                                                                |
// |  Please do not remove any of this tags                                                   |
// |  this code is free to use For everyone as long they don't claim that this is their work  |
// |  thanks For reading this and enjoy my code                                               |
// |__________________________________________________________________________________________|
// 
session_start();
function CheckLogin() {
if (empty($_SESSION['isLogin'])) {
$_SESSION['message'] = '403 - Not Authorized!';
header('location: index.php');
}
if ($_SESSION['isLogin'] == 'Admin') {
$_SESSION['rank'] = 'Admin';
}

if ($_SESSION['isLogin'] == 'Guest') {
$_SESSION['rank'] = 'Guest';
}
}
?>
