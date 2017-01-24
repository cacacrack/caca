<html>
<title>Cyber Attack System</title>
<!--Favicon-->
<link rel="icon" href="yuno.png" type="image/x-icon"/>	
	

<!---CSS dan Tampilan--->
<style>


/* unvisited link */
a:link {
    color: yellow;
}

/* visited link */
a:visited {
    color: cyan;
}

/* mouse over link */
a:hover {
    color: white;
}

/* selected link */
a:active {
    color: green;
}
		
		.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 15px;
}
		
	body {
		background-image: url("bg.jpg"); 
		background-color: #000000;
		color: #FF0000;
		text-align: center;
		font-family: helvetica;
		font-size: 14px;
		margin: 10% auto auto auto;
	}
	
	#pesan {
		background: #000000;
		width: 80%;
		padding: 10px;
		border: 2px solid #f00;
		margin: 0px auto auto auto;

	}
	
	#menu {
	background:#191919;
	border-bottom:1px solid #333333;
	border-top:1px solid #333333;
	}
	
	form {
		color: #f00;
	}
	
	input {
		border: 1px solid #f00;
		padding: 10px;
		background: #000;
		color: #f00;
	}
	
	input[type=text] {
		width: 500px;
	}
	
<!---Konten 1 Header--->	
</style>
</head>
<body>
<div id="pesan">
<font face="arial" color="red" size="3">Welcome To The CMS</a></center> <font face="arial" color="white" size="3">[ Cyber Attack System v.1.2.1 ]</a></center><br>
<font face="arial" color="yellow" size="3">Codename <font face="arial" color="white" size="3">[ DarkNime ] <font face="arial" color="yellow" size="3">Created by <font face="arial" color="white" size="3">[ Yukinoshita 47 ]</a></center><br>
<font face="arial" color="lime" size="3">All of Resource This CMS Is From <font face="arial" color="white" size="3">[ Google, Github, And Many More ]</a></center><br>
</div>
<p>&nbsp;</p>


<!---Konten 2 accordion Menu--->	
	
	
<div id="pesan">
<!--CSS dan Tampilan-->
<!DOCTYPE html>
<html>
<head>
<style>
button.accordion {
    background-color: #000000;
    color: #f00;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: center;
    outline: none;
    font-size: 20px;
    transition: 0.4s;
}

button.accordion.active, button.accordion:hover {
    background-color: #ddd; 
}

div.panel {
    padding: 0 18px;
    display: none;
    background-color: black;
}

div.panel.show {
    display: block;
}
</style>
</head>
<body>
	
<!--Headernya Accordion Menu-->

<center><a href=hack.php ><img src=logo.png height=300 width=350 alt="#" /></a></center>
<h2>Welcome To Playground Boss If You Wanna Play With Your Toys <br>Just Dont Be Fucking Shit And Do Something Fun Here</h2>
	<font face="arial" color="red" size="5">__________________________________________</a></center><br>
	<br>
	<font face="arial" color="cyan" size="3">Cyber Attack System v.1.2.1 [DarkNime] Opensource Version</a></center><br>
	<br>
	<font face="arial" color="yellow" size="3">"Victory Need Preparation So Make A Plan Before Do Something"</a></center><br>

	 <?php
            session_start();
            if (isset($_SESSION['user'])){
            $user = $_SESSION['user'];
            //user active
            echo
            '<p align="center">'.
            '<a href="index.php">Logout</a>'.
            '</p>';
            echo '<a>Now Online : &nbsp;</a>'.
            $user;
            } else {
            header('location: index.php');
            exit;
            }
            //server OS and User
            echo "<br>".php_uname()."<br>";
            echo "Server IP: <font color=lime>".gethostbyname($_SERVER['HTTP_HOST'])."</font> | Your IP: <font color=lime>".$_SERVER['REMOTE_ADDR']."</font><br>";


      ?>

	<br>
	<font face="arial" color="red" size="5">__________________________________________</a></center><br>
 
 
 	<br>
	<font face="arial" color="red" size="5">Start Attack !!! And Use This Tools Below</a></center><br>
	<font face="arial" color="red" size="5">__________________________________________</a></center><br>
    

<!---Menu Accordion - Attack And Exploitation--->
<!--Awal nya-->
<button class="accordion">Penetration Testing Suite</button>
<div class="panel">
  	<br><br>
  	<center><a href=><img src=exploit.gif height=200 width=400 alt="#" /></a></center>
	<br><br>
	<font face="arial" color="yellow" size="3">"Take Your Vape & Coffee And Start Hack Your Target Boss :D"</a></center>
	<br>

<!--Garis Pembatas--><font face="arial" color="red" size="5">__________________________________________</a></center><p>

     <!---Attack And Exploitation--->
	<div id="menu">
	<p>
	<p>
	<b><font face="arial" color="white" size="3">Attack And Exploitation</a></center></b><br>
	 #&nbsp;<a href="exploit.php">Exploit List</a>
	 #&nbsp;<a href="x1.php">CSRF x 1</a> 
	 #&nbsp;<a href="x2.php">CSRF x 2</a>
	 #&nbsp;<a href="x3.php">Fatcat SQLI</a> 
	 #&nbsp;<a href="x5.php">XSSer</a>
	 <p>
	 <p>
	 </div> 
	 
<!--Garis Pembatas--><font face="arial" color="red" size="5">__________________________________________</a></center><p>
 
	 
	 <!--Scanner And Info Gathering-->
	 <div id="menu">
	 <p>
	 <p>
	 <b><font face="arial" color="red" size="3">Vulnerability Scanner And Info Gathering</a></center><br></b>
	 #&nbsp;<a href="x7.php">Bing IP Grabber</a> 
	 #&nbsp;<a href="x22.php">DOM!N@TOR Network Tools</a>
	 #&nbsp;<a href="x13.php">Shellshock Scanner</a> 
	 #&nbsp;<a href="x23.php">Web vulnerability scanner</a>
	 <p>
	 <p>
	 </div> 	 

<!--Garis Pembatas--><font face="arial" color="red" size="5">__________________________________________</a></center><p>
	 
	<!--Tool CMS Lokal-->
	<div id="menu">
	<p>
	<p>
	<b><font face="arial" color="orange" size="3">Tool And Exploiter CMS Lokal</a></center><br></b>
	 #&nbsp;<a href="x9.php">Lokomedia Auto SQLI</a>
	 #&nbsp;<a href="x10.php">Lokomedia Admin Finder</a>
	 #&nbsp;<a href="x12.php">Popoji CMS Register</a>
	<p> 
	<p> 
	</div>
	

<!--Garis Pembatas--><font face="arial" color="red" size="5">__________________________________________</a></center><p>
	
	<!--Exploit WordPress-->
	<div id="menu">
	<p>
	<p>
	<b><font face="arial" color="magenta" size="3">Tool And Exploiter CMS Wordpress</a></center><br></b>
	 #&nbsp;<a href="x15.php">WP Tevolution Dorker</a>
	 #&nbsp;<a href="x16.php">WP Tevolution Mass Exploit</a> 
	 #&nbsp;<a href="x17.php">WP U-Design Mass Exploit</a>
	 #&nbsp;<a href="x18.php">WP NativeChurch LFI Scanner</a>
	 #&nbsp;<a href="x26.php">WP Password Bruteforce</a>
	<p>
	<p>
	</div>
	

<!--Garis Pembatas--><font face="arial" color="red" size="5">__________________________________________</a></center><p>
		
	<!--Exploit Joomla-->
	<div id="menu">
	<p>
	<p>
	<b><font face="arial" color="lime" size="3">Tool And Exploiter CMS Joomla</a></center><br></b>
	 #&nbsp;<a href="x19.php">Joomla Com_User Scanner</a>
	 #&nbsp;<a href="x20.php">Joomla Get Modules Info</a>
	 #&nbsp;<a href="x24.php">Joomla JCE Exploit</a>
	 <p>
	 <p>
	 </div> 

<!--Garis Pembatas--><font face="arial" color="red" size="5">__________________________________________</a></center><p>

	<!--Exploit Other CMS--> 
	<div id="menu">
	<p>
	<p>
	<b><font face="arial" color="yellow" size="3">Tool And Exploiter Other CMS</a></center><br></b>
	 #&nbsp;<a href="x4.php">Magento Add Admin</a>
	 #&nbsp;<a href="x6.php">Auto Plupload</a> 
	 #&nbsp;<a href="x8.php">Drupal Core 7 SQLI</a> 
	 #&nbsp;<a href="x11.php">Mass Revslider</a> 
	 #&nbsp;<a href="x14.php">WHMCMS Auto Exploit</a>
	 #&nbsp;<a href="x21.php">HTTPAttactIIS</a>
	 #&nbsp;<a href="x25.php"> PHP CGI Argument Injection Remote Exploit V0.2</a>
	 <p>
	 <p>
	 </div> 
	 
<!--Garis Pembatas--><font face="arial" color="red" size="5">__________________________________________</a></center><p>
	</div>

<!--Akhir nya-->


<!---Menu Accordion 2 Encryption And Hash Cracking--->	
<!--Awal nya-->
<button class="accordion">Encryption And Hash Cracking</button>
<div class="panel">
	<br><br>
  	<center><a href=><img src=key.png height=100 width=100 alt="#" /></a></center>
	<br>
	<font face="arial" color="white" size="3">Encryption And Hash Cracking</a></center><br>

<!--Garis Pembatas--><font face="arial" color="red" size="5">__________________________________________</a></center><p>
	

	<!--Encryption--> 
	<div id="menu">
	<p>
	<p>
	<b><font face="arial" color="white" size="3">Encryption</a></center><br></b>
    #&nbsp;<a href="y1.php">Encryption Pack</a> 
	#&nbsp;<a href="y4.php">Base64 En-DEcode</a>
	#&nbsp;<a href="y5.php">Encoder-Decoder X'Inject</a>
	<p>
	<p>
	</div> 
	
<!--Garis Pembatas--><font face="arial" color="red" size="5">__________________________________________</a></center><p>

	
	<!--Hash Crack--> 
	<div id="menu">
	<p>
	<p>
	<b><font face="arial" color="white" size="3">Hash And Password Crack</a></center><br></b>
	#Link&nbsp;<a href="https://hashkiller.co.uk/md5-decrypter.aspx">HashKiller</a> 
	#&nbsp;<a href="y3.php">MD5 Online</a> 
	<p>
	<p>
	</div> 

<!--Garis Pembatas--><font face="arial" color="red" size="5">__________________________________________</a></center><p>
	 
	 
	</div>
<!--Akhir nya-->


<!---Menu Accordion 3 Tracking And Stuff--->
<!--Awal nya-->
<button class="accordion">Tracking And Other Stuff</button>
<div class="panel">
	<br><br>
	<center><a href=><img src=tracking.jpg height=300 width=200 alt="#" /></a></center>
	<br>
	<font face="arial" color="white" size="3">Tracking And Other Stuff</a></center><br>
	<p> 
    #Link&nbsp;<a href="http://who.is">Whois</a> 
	#Link&nbsp;<a href="http://www.ip2location.com/">IP Tracking</a> 
	#Link&nbsp;<a href="http://shodan.io">Shodan HQ</a> 
	#Link&nbsp;<a href="http://0day.today">1337 Day</a> 
	#Link&nbsp;<a href="http://exploit-db.com">Exploit-DB</a> 
	<br><br>
	</div>

<!---Menu Accordion 4 Maintaining Access--->	
<!--Awal nya-->
<button class="accordion">Maintaining Access</button>
<div class="panel">
	<br><br>
  	<center><a href=><img src=key.png height=100 width=100 alt="#" /></a></center>
	<br>
	<font face="arial" color="white" size="3">Encryption And Hash Cracking</a></center><br>

<!--Garis Pembatas--><font face="arial" color="red" size="5">__________________________________________</a></center><p>
	

	<!--Encryption--> 
	<div id="menu">
	<p>
	<p>
	<b><font face="arial" color="white" size="3">Shell Access Scanner</a></center><br></b>
    #&nbsp;<a href="z1.php">Pasir Merah Shell Checker</a> 
	<p>
	<p>
	</div> 

<!--Garis Pembatas--><font face="arial" color="red" size="5">__________________________________________</a></center><p>

	 
	</div>
<!--Akhir nya-->

<!--Akhir dari Konten Menu Accordion-->

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        this.classList.toggle("active");
        this.nextElementSibling.classList.toggle("show");
  }
}
</script>
</body>
</html>
