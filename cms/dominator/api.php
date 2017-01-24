<?php
//  __________________________________________________________________________________________
// |                                                                                          |
// |  Made by TheRealDominator                                                                |
// |  Please do not remove any of this tags                                                   |
// |  this code is free to use For everyone as long they don't claim that this is their work  |
// |  thanks For reading this and enjoy my code                                               |
// |__________________________________________________________________________________________|
// 
//  __________________________________________________________________________________________
// |                                                                                          |
// |  API VERSION  0.1 ALPHA                                                                  |
// |__________________________________________________________________________________________|
// 
include 'include/users.php';
include 'include/scanner.php';
$key = $_GET['key'];
$type = $_GET['type'];
$AuthorizedKey = ApiKey();
if ($key == $AuthorizedKey) {

if ($type == 'port') {
if(!empty($_GET['domain'])) {    
$ports = array($_GET['port']);
    $results = array();
    foreach($ports as $port) {
        if($pf = @fsockopen($_GET['domain'], $port, $err, $err_string, 1)) {
            $results[$port] = true;
            fclose($pf);
        } else {
            $results[$port] = false;
        }
    }
 
    foreach($results as $port=>$val)    {
        $prot = getservbyport($port,"tcp");
                echo "Port $port : ";
        if($val) {
            echo "Open<br>";
        }
        else {
            echo "Closed<br>";
        }
    }
}
}
if ($type == 'status') {
if(!empty($_GET['domain'])) {    
 $ports = array(80, 443);

    $results = array();
    foreach($ports as $port) {
        if($pf = @fsockopen($_GET['domain'], $port, $err, $err_string, 1)) {
            $results[$port] = true;
            fclose($pf);
        } else {
            $results[$port] = false;
        }
    }
 
    foreach($results as $port=>$val)    {
        $prot = getservbyport($port,"tcp");
                echo "Port $port : ";
        if($val) {
            echo " Online<br>";
        }
        else {
            echo " Offline<br>";
        }
    }
}
}
if ($type == 'scan') {
if(!empty($_GET['domain'])) {    
$url = $_GET['domain'];
Vscan($url);
}
}
if ($type == 'resolver') {
if(!empty($_POST['domain'])) {    
$host = $_POST['domain'];
echo gethostbyname($host);
}
}
if ($type == 'reader') {
if(!empty($_GET['domain'])) {    
$url = $_GET['domain'];
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
}
}
else {
echo '<html><h1 style="align: center;">401 Forbidden</h1></html>';
}
?>
