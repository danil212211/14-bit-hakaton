<?php
function generateCode($length=5) {
    $chars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $code = "";
    $clen = strlen($chars) - 1;
    while (strlen($code) < $length) {
            $code .= $chars[mt_rand(0,$clen)];
    }
    return $code;
}

	session_start();if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} }
	if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} };
	$login = stripslashes($login);
	$login = htmlspecialchars($login);
	$password = stripslashes($password);
	$password = htmlspecialchars($password);
	$login = trim($login);
	$password = trim($password);
	include ("bd.php");
	$result = mysql_query("SELECT * FROM users WHERE login='$login'",$db); //извлекаем из базы все данные о пользователе с введенным логином
	$myrow = mysql_fetch_array($result);
	if (empty($myrow['password']))
	{
    	echo '<html>
<head>
	<link href="css/in.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>14-bit</title>
</head>
<body>
	<div class="container-fluid body">
		<div class="container" style="max-width:600px;">
			<a href="index.html"><img src="src/StartUp_bit.png" class="img-fluid" style="margin-top:100px; min-width:100%;"></a>
		</div>
		<div class="container"><form action="test_reg.php" method="post">
			<div class="input-group mb-3">
				<input name="login" type="email" class="form-control" placeholder="Почта или телефон" aria-label="Имя пользователя" style="padding-left:50px; font-size:30px; margin-top:50px; border-radius:76px; height:80px;">
			</div>
			<div class="input-group mb-3">
				<input name="password" type="password" class="form-control"  placeholder="Пароль" aria-label="Имя пользователя" style="padding-left:50px; font-size:30px; margin-top:50px; border-radius:76px; height:80px;">
			</div>
				<button type="submit"  class=" btn stylebutton">Войти</button>
		</div></form>

		<a  href="register.php" class="register">Регистрация</a>
		</div>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<div class="modal fade" style="margin-top:20px;" id="Register" tabindex="-1" role="dialog" aria-labelledby="RegisterModalLabel" aria-hidden="true">
  <div class="container" style="background-color:white; max-width:100%; width:700px; height:450px; border-radius:95px;">
	<p align="center" style=" padding-top:150px; font-size:40px; font-weight:bold; color:blue;">Неправильный логин или пароль</p>
			<div class="modal-dialog">
			</div>
      </div>
</div>'; echo"
<script>$('#Register').modal('show');</script></body></html>')";
	}
	else {
		if ($myrow['password']==$password) {
		$hash = generateCode(15);
		setcookie("id", $myrow['id'], time()+60*60*24*30, "/");
		setcookie("hash", $hash, time()+60*60*24*30, "/", null, null, true); // httponly !!!
		$result=mysql_query("UPDATE users SET user_hash='".$hash."' WHERE login='$login'");
		header ("Location:https://14-bit.ru/startup_bit/content-inves.php");	
	}
	else { 
    	echo '<html>
<head>
	<link href="css/in.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>14-bit</title>
</head>
<body>
	<div class="container-fluid body">
		<div class="container" style="max-width:600px;">
			<a href="index.html"><img src="src/StartUp_bit.png" class="img-fluid" style="margin-top:100px; min-width:100%;"></a>
		</div>
		<div class="container"><form action="test_reg.php" method="post">
			<div class="input-group mb-3">
				<input name="login" type="email" class="form-control" placeholder="Почта или телефон" aria-label="Имя пользователя" style="padding-left:50px; font-size:30px; margin-top:50px; border-radius:76px; height:80px;">
			</div>
			<div class="input-group mb-3">
				<input name="password" type="password" class="form-control"  placeholder="Пароль" aria-label="Имя пользователя" style="padding-left:50px; font-size:30px; margin-top:50px; border-radius:76px; height:80px;">
			</div>
				<button type="submit"  class=" btn stylebutton">Войти</button>
		</div></form>

		<a  href="register.php" class="register">Регистрация</a>
		</div>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<div class="modal fade" style="margin-top:20px;" id="Register" tabindex="-1" role="dialog" aria-labelledby="RegisterModalLabel" aria-hidden="true">
  <div class="container" style="background-color:white; max-width:100%; width:700px; height:450px; border-radius:95px;">
	<p align="center" style=" padding-top:150px; font-size:40px; font-weight:bold; color:blue;">Неправильный логин или пароль</p>
			<div class="modal-dialog">
			</div>
      </div>
</div>'; echo"
<script>$('#Register').modal('show');</script></body></html>')";    }
    }
    ?>