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
include 'include/init.php'
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Portscan - DOM!N@TOR Network Tools</title>
<link rel="stylesheet" type="text/css" href="style.css" /> </head>
<nav>
<center><h2>
<?php
WriteMenu();
$Portscan = DisablePortscan();
if ($Portscan == true) {
header('location: panel.php');
}
WriteToLog('PORT SCANNER');
?>

</h2></center><br><br><br><br>
</nav>
<body>

<div class="workspace">
<img src="img/port.png" width="256px" height="256px"><br><br>
<h3>port value is optional if you leave it empty it will scan 21, 22, 23, 25, 53, 80, 110, 443, 587, 1433, 3306, 8080</h3><b>
<form method="post" >
    Domain/IP: 
    <input type="text" name="domain" /> 
    Port:
    <input type="text" name="ports" />
    <input type="submit" value="Scan" />
</form>
<br>

<?php
if(!empty($_POST['domain'])) {    
$ports = array($_POST['ports']);
if (empty($_POST['ports'])) {
 $ports = array(21, 22, 23, 25, 53, 80, 110, 443, 587, 1433, 3306, 8080);
}
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
            echo "<span style=\"color:green\">Status: Open</span><br/>";
        }
        else {
            echo "<span style=\"color:red\">Status: Closed</span><br/>";
        }
    }
}
?>


</div>
<br />
</body>



</html>
