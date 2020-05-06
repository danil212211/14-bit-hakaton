<?php
	$login="$_COOKIE[login]";
	$password=$_POST['proverk'];
	session_start();
	$login = stripslashes($login);
	$login = htmlspecialchars($login);
	$login = trim($login);
	$password = trim($password);
	include ("bd.php");
	$result = mysql_query("SELECT * FROM proverka WHERE login='$login'",$db);
	$myrow = mysql_fetch_array($result);
	if ($myrow['Prov']==$password) { 
		setcookie (prov,0);
		$_SESSION['login']=$myrow['login']; 
		$_SESSION['id']=$myrow['id'];
		$result2 = mysql_query ("INSERT INTO users (login,password,role) VALUES('$login','$myrow[password]','$myrow[role]')");
	$result = mysql_query("DELETE FROM proverka where login='$login'");
		header ("Location:https://14-bit.ru/startup_bit/login.html");	
		}
		else {
			exit ("Извините, введённый вами пароль неверный.");
		}
?>