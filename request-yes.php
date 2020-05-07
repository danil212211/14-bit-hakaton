<?php
	require ("bd.php");
	$id=$_POST['id'];

	$result=mysql_query ("UPDATE Text SET role='1'	WHERE id='$id'");
	$result = mysql_query("SELECT User_id FROM Text WHERE id='$id'");
	$myrow1 = mysql_fetch_array($result);
	$user_id= "$myrow1[User_id]";
	$result = mysql_query("SELECT login FROM users WHERE id='$user_id'");
	$myrow = mysql_fetch_array($result);
	$login="$myrow[login]";
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
		$mail->Subject = '=?UTF-8?B?' . base64_encode('Информация о вашем проекте'.''.$next_id) . '?=';
		$mail->Body = "Благодарим за проект. Он был успешно проверен и подтвержден администрацией сайта! - $prov ";
		$mail->send();
}
	catch (Exception $e){}
	header("location:admin-request.php");
?>