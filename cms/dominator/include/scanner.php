<?php
//  __________________________________________________________________________________________
// |                                                                                          |
// |  Made by TheRealDominator                                                                |
// |  Please do not remove any of this tags                                                   |
// |  this code is free to use For everyone as long they don't claim that this is their work  |
// |  thanks For reading this and enjoy my code                                               |
// |__________________________________________________________________________________________|
// 
function Vscan ($url) {


$surl = $url . '/adm/';
$file_headers = @get_headers($surl);
if($file_headers[0] == 'HTTP/1.1 404 Not Found' or $file_headers[0] == 'HTTP/1.1 301 Moved Permanently') { 
}
else {
echo "/adm/ This is interesting... <br>";
 }
 
 
 $surl = $url . '/admin/';
$file_headers = @get_headers($surl);
if($file_headers[0] == 'HTTP/1.1 404 Not Found' or $file_headers[0] == 'HTTP/1.1 301 Moved Permanently') { 
}
else {
echo "/admin/ This is interesting... <br>";
 }
 
 
$surl = $url . '/test/';
$file_headers = @get_headers($surl);
if($file_headers[0] == 'HTTP/1.1 404 Not Found' or $file_headers[0] == 'HTTP/1.1 301 Moved Permanently') { 
}
else {
echo "/test/ This is interesting... <br>";
 }
 
 
$surl = $url . '/panel/';
$file_headers = @get_headers($surl);
if($file_headers[0] == 'HTTP/1.1 404 Not Found' or $file_headers[0] == 'HTTP/1.1 301 Moved Permanently') { 
}
else {
echo "/panel/ This is interesting... <br>";
 }
 
 
$surl = $url . '/server-status/';
$file_headers = @get_headers($surl);
if($file_headers[0] == 'HTTP/1.1 403 Forbidden') { 
echo "/server-status/ Maybe a Apache Server... <br>";
 }
 
 
$surl = $url . '/server-status/';
$file_headers = @get_headers($surl);
if($file_headers[0] == 'HTTP/1.1 404 Not Found' or $file_headers[0] == 'HTTP/1.1 301 Moved Permanently') { 
}
else {
echo "/server-status/ it looks like it is accessible with your browser. <br>";
 }
 
 
$surl = $url . '/wp-panel.php/';
$file_headers = @get_headers($surl);
if($file_headers[0] == 'HTTP/1.1 404 Not Found' or $file_headers[0] == 'HTTP/1.1 301 Moved Permanently') { 
}
else {
echo "/Wp-panel.php is this WordPress? <br>";
 }
 
 
$surl = $url . '/manager/';
$file_headers = @get_headers($surl);
if($file_headers[0] == 'HTTP/1.1 404 Not Found' or $file_headers[0] == 'HTTP/1.1 301 Moved Permanently') { 
}
else {
echo "/manager/ This is interesting... <br>";
 }
 
 
$surl = $url . '/docs/';
$file_headers = @get_headers($surl);
if($file_headers[0] == 'HTTP/1.1 404 Not Found' or $file_headers[0] == 'HTTP/1.1 301 Moved Permanently') { 
}
else {
echo "/docs/ This is interesting... <br>";
 }
 
 
$surl = $url . '/web/';
$file_headers = @get_headers($surl);
if($file_headers[0] == 'HTTP/1.1 404 Not Found' or $file_headers[0] == 'HTTP/1.1 301 Moved Permanently') { 
}
else {
echo "/web/ This is interesting... <br>";
 }
 
 
$surl = $url . '/index.php';
$file_headers = @get_headers($surl);
if($file_headers[0] == 'HTTP/1.1 404 Not Found' or $file_headers[0] == 'HTTP/1.1 301 Moved Permanently') { 
}
else {
echo "This server is running PHP found /index.php <br>";
 }
 
 
$surl = $url . '/index.aspx';
$file_headers = @get_headers($surl);
if($file_headers[0] == 'HTTP/1.1 404 Not Found' or $file_headers[0] == 'HTTP/1.1 301 Moved Permanently') { 
}
else {
echo "This server is running ASP.net found /index.aspx <br>";
 }
 
 
$surl = $url . '/default.aspx';
$file_headers = @get_headers($surl);
if($file_headers[0] == 'HTTP/1.1 404 Not Found' or $file_headers[0] == 'HTTP/1.1 301 Moved Permanently') { 
}
else {
echo "maybe a default/unpatched IIS server found default.aspx <br>";
 }
 
 
$surl = $url . '/index.jsp';
$file_headers = @get_headers($surl);
if($file_headers[0] == 'HTTP/1.1 404 Not Found' or $file_headers[0] == 'HTTP/1.1 301 Moved Permanently') { 
}
else {
echo "This server is running JSP found index.jsp <br>";
 }
 
 
$surl = $url . '/admin.php';
$file_headers = @get_headers($surl);
if($file_headers[0] == 'HTTP/1.1 404 Not Found' or $file_headers[0] == 'HTTP/1.1 301 Moved Permanently') { 
}
else {
echo "/admin.php This is interesting... <br>";
 }
 
 
$surl = $url . '/admin.jsp';
$file_headers = @get_headers($surl);
if($file_headers[0] == 'HTTP/1.1 404 Not Found' or $file_headers[0] == 'HTTP/1.1 301 Moved Permanently') { 
}
else {
echo "/admin.jsp This is interesting... <br>";
 }
 
 
$surl = $url . '/admin.aspx';
$file_headers = @get_headers($surl);
if($file_headers[0] == 'HTTP/1.1 404 Not Found' or $file_headers[0] == 'HTTP/1.1 301 Moved Permanently') {
}
else {
echo "/admin.aspx This is interesting... <br>";
 }
 
 
$surl = $url . '/admin.html';
$file_headers = @get_headers($surl);
if($file_headers[0] == 'HTTP/1.1 404 Not Found' or $file_headers[0] == 'HTTP/1.1 301 Moved Permanently') { 
}
else {
echo "/admin.html This is interesting... <br>";
 }
 
 
$surl = $url . '/panel.php';
$file_headers = @get_headers($surl);
if($file_headers[0] == 'HTTP/1.1 404 Not Found' or $file_headers[0] == 'HTTP/1.1 301 Moved Permanently') { 
}
else {
echo "/panel.php This is interesting... <br>";
 }
 
 
$surl = $url . '/panel.jsp';
$file_headers = @get_headers($surl);
if($file_headers[0] == 'HTTP/1.1 404 Not Found' or $file_headers[0] == 'HTTP/1.1 301 Moved Permanently') { 
}
else {
echo "/panel.jsp This is interesting... <br>";
 }
 
 
$surl = $url . '/panel.aspx';
$file_headers = @get_headers($surl);
if($file_headers[0] == 'HTTP/1.1 404 Not Found' or $file_headers[0] == 'HTTP/1.1 301 Moved Permanently') { 
}
else {
echo "/panel.aspx This is interesting... <br>";
 }
 
 
$surl = $url . '/panel.html';
$file_headers = @get_headers($surl);
if($file_headers[0] == 'HTTP/1.1 404 Not Found' or $file_headers[0] == 'HTTP/1.1 301 Moved Permanently') { 
}
else {
echo "/panel.html This is interesting... <br>";
 }
 
 
 $surl = $url . '/manager.jsp';
$file_headers = @get_headers($surl);
if($file_headers[0] == 'HTTP/1.1 404 Not Found' or $file_headers[0] == 'HTTP/1.1 301 Moved Permanently') { 
}
else {
echo "/manager.jsp This is interesting... <br>";
 }
  
 
 $surl = $url . '/manager.aspx';
$file_headers = @get_headers($surl);
if($file_headers[0] == 'HTTP/1.1 404 Not Found' or $file_headers[0] == 'HTTP/1.1 301 Moved Permanently') { 
}
else {
echo "/manager.aspx This is interesting... <br>";
 }
 PartTwo($url);
}
 
 
 
 // it didn't work when i tried it in one function for some reason
 
 function PartTwo ($url) {
 $surl = $url . '/manager.html';
$file_headers = @get_headers($surl);
if($file_headers[0] == 'HTTP/1.1 404 Not Found' or $file_headers[0] == 'HTTP/1.1 301 Moved Permanently') { 
}
else {
echo "/manager.html This is interesting... <br>";
 }
 
 
$surl = $url . '/test.php';
$file_headers = @get_headers($surl);
if($file_headers[0] == 'HTTP/1.1 404 Not Found' or $file_headers[0] == 'HTTP/1.1 301 Moved Permanently') { 
}
else {
echo "/test.php This is interesting... <br>";
 }
 
 
$surl = $url . '/test.jsp';
$file_headers = @get_headers($surl);
if($file_headers[0] == 'HTTP/1.1 404 Not Found' or $file_headers[0] == 'HTTP/1.1 301 Moved Permanently') { 
}
else {
echo "/test.jsp This is interesting... <br>";
 }
  
 
$surl = $url . '/test.aspx';
$file_headers = @get_headers($surl);
if($file_headers[0] == 'HTTP/1.1 404 Not Found' or $file_headers[0] == 'HTTP/1.1 301 Moved Permanently') { 
}
else {
echo "/test.aspx This is interesting... <br>";
 }
  
 
$surl = $url . '/test.html';
$file_headers = @get_headers($surl);
if($file_headers[0] == 'HTTP/1.1 404 Not Found' or $file_headers[0] == 'HTTP/1.1 301 Moved Permanently') { 
}
else {
echo "/test.html This is interesting... <br>";
 }
  
 
$surl = $url . '/web.php';
$file_headers = @get_headers($surl);
if($file_headers[0] == 'HTTP/1.1 404 Not Found' or $file_headers[0] == 'HTTP/1.1 301 Moved Permanently') { 
}
else {
echo "/web.php This is interesting... <br>";
 }
 
 
$surl = $url . '/web.jsp';
$file_headers = @get_headers($surl);
if($file_headers[0] == 'HTTP/1.1 404 Not Found' or $file_headers[0] == 'HTTP/1.1 301 Moved Permanently') { 
}
else {
echo "/web.jsp This is interesting... <br>";
 }
  
 
$surl = $url . '/web.aspx';
$file_headers = @get_headers($surl);
if($file_headers[0] == 'HTTP/1.1 404 Not Found' or $file_headers[0] == 'HTTP/1.1 301 Moved Permanently') { 
}
else {
echo "/web.aspx This is interesting... <br>";
 }
  
 
$surl = $url . '/web.html';
$file_headers = @get_headers($surl);
if($file_headers[0] == 'HTTP/1.1 404 Not Found' or $file_headers[0] == 'HTTP/1.1 301 Moved Permanently') { 
}
else {
echo "/web.html This is interesting... <br>";
 }
  
 
$surl = $url . '/cpanel.php';
$file_headers = @get_headers($surl);
if($file_headers[0] == 'HTTP/1.1 404 Not Found' or $file_headers[0] == 'HTTP/1.1 301 Moved Permanently') { 
}
else {
echo "/cpanel.php This is interesting... <br>";
 }
 
 
$surl = $url . '/cpanel.jsp';
$file_headers = @get_headers($surl);
if($file_headers[0] == 'HTTP/1.1 404 Not Found' or $file_headers[0] == 'HTTP/1.1 301 Moved Permanently') { 
}
else {
echo "/cpanel.jsp This is interesting... <br>";
 }
  
 
$surl = $url . '/cpanel.aspx';
$file_headers = @get_headers($surl);
if($file_headers[0] == 'HTTP/1.1 404 Not Found' or $file_headers[0] == 'HTTP/1.1 301 Moved Permanently') { 
}
else {
echo "/cpanel.aspx This is interesting... <br>";
 }
  
 
$surl = $url . '/cpanel.html';
$file_headers = @get_headers($surl);
if($file_headers[0] == 'HTTP/1.1 404 Not Found' or $file_headers[0] == 'HTTP/1.1 301 Moved Permanently') { 
}
else {
echo "/cpanel.html This is interesting... <br>";
 }
   
 
$surl = $url . '/cpanel/';
$file_headers = @get_headers($surl);
if($file_headers[0] == 'HTTP/1.1 404 Not Found' or $file_headers[0] == 'HTTP/1.1 301 Moved Permanently') { 
}
else {
echo "/cpanel/ This is interesting... <br>";
 }
   
 
$surl = $url . '/phpmyadmin/';
$file_headers = @get_headers($surl);
if($file_headers[0] == 'HTTP/1.1 404 Not Found' or $file_headers[0] == 'HTTP/1.1 301 Moved Permanently') { 
}
else {
echo "/phpmyadmin/ This is interesting... <br>";
 }
   
 
$surl = $url . '/login.html';
$file_headers = @get_headers($surl);
if($file_headers[0] == 'HTTP/1.1 404 Not Found' or $file_headers[0] == 'HTTP/1.1 301 Moved Permanently') { 
}
else {
echo "/login.html found a login page... <br>";
 }
   
 
$surl = $url . '/login.php';
$file_headers = @get_headers($surl);
if($file_headers[0] == 'HTTP/1.1 404 Not Found' or $file_headers[0] == 'HTTP/1.1 301 Moved Permanently') { 
}
else {
echo "/login.php Found a login page... <br>";
 }
   
 
$surl = $url . '/login.aspx';
$file_headers = @get_headers($surl);
if($file_headers[0] == 'HTTP/1.1 404 Not Found' or $file_headers[0] == 'HTTP/1.1 301 Moved Permanently') { 
}
else {
echo "/login.aspx Found a Login Page... <br>";
 }
   
 
$surl = $url . '/login.jsp';
$file_headers = @get_headers($surl);
if($file_headers[0] == 'HTTP/1.1 404 Not Found' or $file_headers[0] == 'HTTP/1.1 301 Moved Permanently') { 
}
else {
echo "/login.jsp Found a Login Page... <br>";
 }
   
 
$surl = $url . '/execlogin.html';
$file_headers = @get_headers($surl);
if($file_headers[0] == 'HTTP/1.1 404 Not Found' or $file_headers[0] == 'HTTP/1.1 301 Moved Permanently') { 
}
else {
echo "/execlogin.html This is interesting... <br>";
 }
   
 
$surl = $url . '/execlogin.php';
$file_headers = @get_headers($surl);
if($file_headers[0] == 'HTTP/1.1 404 Not Found' or $file_headers[0] == 'HTTP/1.1 301 Moved Permanently') { 
}
else {
echo "/execlogin.php This is interesting... <br>";
 }
   
 
$surl = $url . '/execlogin.aspx';
$file_headers = @get_headers($surl);
if($file_headers[0] == 'HTTP/1.1 404 Not Found' or $file_headers[0] == 'HTTP/1.1 301 Moved Permanently') { 
}
else {
echo "/execlogin.aspx This is interesting... <br>";
 }
   
 
$surl = $url . '/execlogin.jsp';
$file_headers = @get_headers($surl);
if($file_headers[0] == 'HTTP/1.1 404 Not Found' or $file_headers[0] == 'HTTP/1.1 301 Moved Permanently') { 
}
else {
echo "/execlogin.jsp This is interesting... <br>";
 }
   
 
$surl = $url . '/php/';
$file_headers = @get_headers($surl);
if($file_headers[0] == 'HTTP/1.1 404 Not Found' or $file_headers[0] == 'HTTP/1.1 301 Moved Permanently') { 
}
else {
echo "/php/ This is interesting... <br>";
 }
   
 
$surl = $url . '/aspx/';
$file_headers = @get_headers($surl);
if($file_headers[0] == 'HTTP/1.1 404 Not Found' or $file_headers[0] == 'HTTP/1.1 301 Moved Permanently') { 
}
else {
echo "/aspx/ This is interesting... <br>";
 }
   
 
$surl = $url . '/jsp/';
$file_headers = @get_headers($surl);
if($file_headers[0] == 'HTTP/1.1 404 Not Found' or $file_headers[0] == 'HTTP/1.1 301 Moved Permanently') { 
}
else {
echo "/jsp/ This is interesting... <br>";
 }
   
 
$surl = $url . '/html/';
$file_headers = @get_headers($surl);
if($file_headers[0] == 'HTTP/1.1 404 Not Found' or $file_headers[0] == 'HTTP/1.1 301 Moved Permanently') { 
}
else {
echo "/html This is interesting... <br>";
 }
   
 
$surl = $url . '/css/';
$file_headers = @get_headers($surl);
if($file_headers[0] == 'HTTP/1.1 404 Not Found' or $file_headers[0] == 'HTTP/1.1 301 Moved Permanently') { 
}
else {
echo "/css/ This is interesting... <br>";
 }
   
 
$surl = $url . '/js/';
$file_headers = @get_headers($surl);
if($file_headers[0] == 'HTTP/1.1 404 Not Found' or $file_headers[0] == 'HTTP/1.1 301 Moved Permanently') { 
}
else {
echo "/js/ This is interesting... <br>";
 }
   
 
$surl = $url . '/asp/';
$file_headers = @get_headers($surl);
if($file_headers[0] == 'HTTP/1.1 404 Not Found' or $file_headers[0] == 'HTTP/1.1 301 Moved Permanently') { 
}
else {
echo "/asp/ This is interesting... <br>";
 }
   
 
$surl = $url . '/xml/';
$file_headers = @get_headers($surl);
if($file_headers[0] == 'HTTP/1.1 404 Not Found' or $file_headers[0] == 'HTTP/1.1 301 Moved Permanently') { 
}
else {
echo "/xml/ This is interesting... <br>";
 }
 
 $surl = $url . '/phpmyadmin/index.php';
$file_headers = @get_headers($surl);
if($file_headers[0] == 'HTTP/1.1 404 Not Found' or $file_headers[0] == 'HTTP/1.1 301 Moved Permanently') { 
}
else {
echo "/phpmyadmin/index.php Unprotected PhpMyAdmin <br>";
 }

 $surl = $url . '/phpmyadmin/setup.php';
$file_headers = @get_headers($surl);
if($file_headers[0] == 'HTTP/1.1 404 Not Found' or $file_headers[0] == 'HTTP/1.1 301 Moved Permanently') { 
}
else {
echo "/phpmyadmin/setup.php Default PhpMyAdmin Setup File<br>";
echo $file_headers[0];
 }
 }
?>
