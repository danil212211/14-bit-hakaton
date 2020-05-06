<?php
	include ("check.php");
	$title=$_POST['title'];
	$description=$_POST['description'];
	$town=$_POST['town'];
	$text=$_POST['text'];
	$uploaddir = '/var/www/14-bit/www/startup_bit/src/';
	$prev=mt_rand(100000,999999).($_FILES['Photo']['name']);
	$uploadfile = $uploaddir .$prev;
	move_uploaded_file($_FILES['Photo']['tmp_name'], $uploadfile);
	copy($_FILES['Photo']['tmp_name'], $uploadfile);
	include ("bd.php");
	$result= mysql_query ("INSERT INTO Text (title,description,town,Text,image,User_id) VALUES ('$title','$description', '$town', '$text', '$prev','$_COOKIE[id]')");
	header ("Location:https://14-bit.ru/startup_bit/content-inves.php");
?>