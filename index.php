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
<link rel="icon" href="condom.jpg" type="image/x-icon"/>	
	

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
	<center><a href=><img src=logo.png height=300 width=350 alt="#" /></a></center>
	<br>

	<br>
	<font face="arial" color="cyan" size="3">Cyber Attack System v.1.2.1 [DarkNime]</a></center><br>
	<br>
	<font face="arial" color="yellow" size="3">Login Dulu Bos Kalo Kagak Bisa Login <br>Berarti Lu Salah Kamar Bos</font></a></center><br>
   <br>
      <form action="ceklogin.php" method="post">
            <div>
            Username:
            <br/>
            <input type="password" name="username" size="14" />
            <br/>
            Password:
            <br/>
            <input type="password" name="password" size="14" />
            <br/><br/>
            <button name="login" type="submit">Login</button>
            </div>
      </form>
   	
    </div>
	<p>&nbsp;</p>
