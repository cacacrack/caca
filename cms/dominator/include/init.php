<?php
//  __________________________________________________________________________________________
// |                                                                                          |
// |  Made by TheRealDominator                                                                |
// |  Please do not remove any of this tags                                                   |
// |  this code is free to use For everyone as long they don't claim that this is their work  |
// |  thanks For reading this and enjoy my code                                               |
// |__________________________________________________________________________________________|
// 
include 'users.php';
include 'config.php';
include 'LoginSystem.php';
function GetUser() {
$AdmUsr = AdmUsr();
$GstUsr = GstUsr();
$DisableGuest = DisableGuest();
if (!is_dir('logs')) {
mkdir('logs');
}
if ($DisableGuest == true) {
if ($_SESSION['isLogin'] == $GstUsr) {
$_SESSION['message'] = '403 - Not Authorized!';
}
}

if (! $_SESSION['isLogin'] == $AdmUsr or ! $_SESSION['isLogin'] == $GstUsr) {
header('location: index.php');
$_SESSION['message'] = '403 - Not Authorized!';
}
}

function WriteMenuImg() {
$Portscan = DisablePortScan();
$Resolver = DisableResolver();
$Scanner = DisableScanner();
$Status = DisableStatus();
$Reader = DisableHTTP();
CheckLogin();
echo '<a href="panel.php"><img src="img/panel.png" width="256px" height="255px"></a>';
if ($Portscan == false) {
echo '<a href="portscanner.php"><img src="img/port.png" width="256px" height="255px"></a>';
}
if ($Resolver == false) {
echo '<a href="resolver.php"><img src="img/resolver.png" width="256px" height="255px"></a><br>';
}
if ($Scanner == false) {
echo '<a href="scan.php"><img src="img/scan.png" width="256px" height="255px"></a>';
}
if ($Status == false) {
echo '<a href="status.php"><img src="img/status.png" width="256px" height="255px"></a>';
}
if ($Reader == false) {
echo '<a href="http.php"><img src="img/http.png" width="256px" height="255px"></a>';
}
}

function WriteMenu() {
CheckLogin();
$Portscan = DisablePortScan();
$Resolver = DisableResolver();
$Scanner = DisableScanner();
$Status = DisableStatus();
$Reader = DisableHTTP();
echo '<a href="panel.php">Panel</a> | ';
if ($Portscan == false) {
echo '<a href="portscanner.php">Portscan</a> | ';
}
if ($Resolver == false) {
echo '<a href="resolver.php">Resolver</a> | ';
}
if ($Scanner == false) {
echo '<a href="scan.php">Vulnerability Scanner</a> | ';
}
if ($Status == false) {
echo '<a href="status.php">Status</a> | ';
}
if ($Reader == false) {
echo '<a href="http.php">HTTP Header</a> | ';
}
echo '<a href="logout.php">Logout</a>';
}

function WriteToLog($PAGE) {
$DL = DisableLogs();
if ($DL == false) {
$REMOTE = $_SERVER['REMOTE_ADDR'];
$AGENT = $_SERVER['HTTP_USER_AGENT'];
$TIME = date('d-m-Y h:i:s');
$DIR = 'logs/' . $REMOTE;
if (!is_dir($DIR)) {
mkdir($DIR);
}
$file = $DIR . "/" . $TIME . '.txt';
$str = "Remote Address=" . $REMOTE . "\n";
$str .= "User-Agent=" . $AGENT . "\n";
$str .= "Page=" . $PAGE . "\n";
file_put_contents($file, $str);
}
}
?>
