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
<title>Status - DOM!N@TOR Network Tools</title>
<link rel="stylesheet" href="style.css" type="text/css"> 
</head>
<nav>
<center><h2>
<?php
WriteMenu();
$Status = DisableStatus();
if ($Status == true) {
header('location: panel.php');
}
WriteToLog('STATUS SCANNER');
?>
</h2></center><br><br><br><br>
</nav>
<body>

<div class="workspace">
<img src="img/status.png" width="256px" height="256px"><br><br>
<h3>this only works on port 80 (http) and 443 (https)</h3><b>
<form method="post" >
    Domain/IP: 
    <input type="text" name="domain" /> 
    <input type="submit" value="Scan" />
</form>
<br>

<?php
if(!empty($_POST['domain'])) {    
    //list of port numbers to scan
 $ports = array(80, 443);

    $results = array();
    foreach($ports as $port) {
        if($pf = @fsockopen($_POST['domain'], $port, $err, $err_string, 1)) {
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
            echo "<span style=\"color:green\">Status: Online</span><br/>";
        }
        else {
            echo "<span style=\"color:red\">Status: Offline</span><br/>";
        }
    }
}
?>


</div>
<br />
</body>



</html>
