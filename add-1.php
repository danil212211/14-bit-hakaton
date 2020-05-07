<?php
	include ("check-user.php");
	$title=$_POST['title'];
	$price=$_POST['price'];
	$description=$_POST['description'];
	$town=$_POST['town'];
	$text=$_POST['text'];
	$uploaddir = '/var/www/14-bit/www/startup_bit/src/';
	$prev=mt_rand(100000,999999).($_FILES['Photo']['name']);
	$prev2=mt_rand(100000,999999).($_FILES['Present']['name']);
	$prev3=mt_rand(100000,999999).($_FILES['Biz']['name']);
	$uploadfile = $uploaddir .$prev;
	$uploadfile2 = $uploaddir .$prev2;
	$uploadfile3 = $uploaddir .$prev3;
	move_uploaded_file($_FILES['Photo']['tmp_name'], $uploadfile);
	move_uploaded_file($_FILES['Present']['tmp_name'], $uploadfile2);
	move_uploaded_file($_FILES['Biz']['tmp_name'], $uploadfile3);
	copy($_FILES['Photo']['tmp_name'], $uploadfile);
	copy($_FILES['Present']['tmp_name'], $uploadfile2);
	copy($_FILES['Biz']['tmp_name'], $uploadfile3);
	include ("bd.php");
	$result= mysql_query ("INSERT INTO Text (Price,title,description,town,Text,image,User_id, Present, Biz) VALUES ('$price','$title','$description', '$town', '$text', '$prev','$_COOKIE[id]','$prev2','$prev3')");
	header ("Location:https://14-bit.ru/startup_bit/content-inves.php");
?>