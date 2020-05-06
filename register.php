<?php


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
		<div class="container"><form method="POST">
			<div class="input-group mb-3">
				<input required type="email" class="form-control" name="login" placeholder="Почта или телефон" style="padding-left:50px; font-size:30px; margin-top:50px; border-radius:76px; height:80px;">
			</div>
			<div class="input-group mb-3">
				<input required type="password" class="form-control" name="password" placeholder="Пароль" style="padding-left:50px; font-size:30px; margin-top:50px; border-radius:76px; height:80px;">
			</div>
				<button type="submit" name="register" class=" btn stylebutton">Регистрация</button>
				</form>
		</div>

		<a href="login-start.html" style="color:#E2E2E2;" class="login" >Войти</a>
		</div>
<div class="modal fade" style="margin-top:20px;" id="Register" tabindex="-1" role="dialog" aria-labelledby="RegisterModalLabel" aria-hidden="true">
  <div class="container" style="background-color:white; max-width:100%; width:700px; height:450px; border-radius:95px;">
	<p align="center" style=" padding-top:20px; font-size:40px; font-weight:bold; color:blue;">Введите код подтверждения</p>
	<form action="save_user.php" method="post">
				<div class="input-group mb-3">
				<input type="text" class="form-control" name="proverk" placeholder="Код" aria-label="Имя пользователя" style="padding-left:50px; font-size:30px; margin-top:50px; border-radius:76px; height:80px;">
			</div>
				<button type="submit" class="btn" style="position:absolute; left:50%; margin-left:-160px; min-width:300px; font-size:50px;
 color:#FFFF; background-color: #B956C9; border-radius:68px; height:90px;">Ввести</button></form>
			<div class="modal-dialog">
			</div>
      </div>
</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>';

if (isset($_POST[register] )) { 
echo "<script>$('#Register').modal('show');</script></body></html>";
$login=$_POST[login];
setcookie (login,"$login");
$password=$_POST[password];
$prov=mt_rand(1000000,9999999);
//$password=$_POST[password];
	require ("bd.php");
	$result = mysql_query("DELETE FROM proverka");
	$result = mysql_query("SELECT id FROM users WHERE login='$login'");
	$myrow = mysql_fetch_array($result);
	if (!empty($myrow['id'])) {
		exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
    } 
	require("/var/www/14-bit/www/startup_bit/vendor/phpmailer/phpmailer/class.phpmailer.php");  
	require("/var/www/14-bit/www/startup_bit/vendor/phpmailer/phpmailer/class.smtp.php");
	require ("vendor/autoload.php");
	$mail = new PHPMailer(true);                              
	try {
		$mail->CharSet = 'utf-8';
		$mail->setLanguage('ru', 'vendor/phpmailer/phpmailer/language/'); 
				//Options
		$mail->SMTPDebug = 0;                                
		$mail->isSMTP();                                      
		$mail->SMTPAuth = true;                                                    
		$mail->SMTPSecure = 'tls';                            
		$mail->Port = 587;                                     
		$mail->Host = 'smtp.gmail.com';  
		$mail->Username = '14.bit.mail@gmail.com';             
		$mail->Password = 'Gfhjkm5599';                        
    			//Recipients
		$mail->setFrom('14.bit.mail@gmail.com', '=?UTF-8?B?' . base64_encode('Команда 14-Bit'.''.$next_id) . '?=');
		$mail->addAddress($login);
   			//Content
		$mail->isHTML(true);                                  
		$mail->Subject = '=?UTF-8?B?' . base64_encode('Информация о регистрации на Пэтшэринг'.''.$next_id) . '?=';
		$mail->Body = "Благодарим за регистрацию! Ваш код подтверждения - $prov ";
		$mail->send();
}
	catch (Exception $e){}
	$result2 = mysql_query ("INSERT INTO proverka (login,password,Prov,role) VALUES('$login','$password','$prov','1')");
} else  echo "</body></html>";
?>