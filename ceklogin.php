      <?php
            session_start();
            if(isset($_SESSION['user']))
            {
            session_destroy();
            }
      ?>


<html>
<title>Cyber Attack System</title>
<!--Favicon-->
<link rel="icon" href="tohka.png" type="image/x-icon"/>	
	

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
		background-color: #000000;
		width: 40%;
		padding: 20px;
		border: 2px solid #f00;
		margin: 0px auto auto auto;
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
	
<!---Konten 1--->	
	</style>
</head>
<body>
	<div id="pesan">
	<center><a href=><img src=tohka.png height=300 width=200  alt="#" /></a></center>
	<br>
<br>	
	<font face="arial" color="cyan" size="3">Cyber Attack System v.1.2.1 [DarkNime]</a></center><br>
<br>
<?php
      $acc_user = 'yukinoshita47';
      $acc_pas = 'gsh1337';
      if (isset($_POST['login']))
      $username = $_POST['username'];
      $password = $_POST['password'];
      $username = strip_tags($username);
      $password = strip_tags($password);
      if (($username==$acc_user) && ($password==$acc_pas))
      {
      session_start();
      $_SESSION['user'] = $username;
      echo 'Selamat Datang Bos, Yukinoshita 47 Anda Berhasil Login'.
      '<br/> <br>'.
      '<a href="hack.php">Lanjutkan</a>'.
      '<br/>';
      } else {
      echo 'Username dan password salah'.
      '<br/>'.
      '<a href="index.php">Coba lagi</a>'.
      '<br/>';
      }
?>

	
    </div>
	<p>&nbsp;</p>
