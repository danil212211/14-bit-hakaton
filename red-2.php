<?php
	$id=$_POST['id'];
	$title=$_POST['title'];
	$price=$_POST['price'];
	$description=$_POST['description'];
	$town=$_POST['town'];
	$text=$_POST['text'];
	$uploaddir = '/var/www/14-bit/www/startup_bit/src/';
	$prev=($_FILES['Photo']['name']);
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
	if ($prev=="") { 	$result=mysql_query ("UPDATE Text SET title='$title', Present='$prev2' , Biz='$prev3', description='$description' , Text='$text' WHERE id='$id'"); } else
		{
	$result=mysql_query ("UPDATE Text SET Price='$price' title='$title', description='$description', Image='$prev', Present='$prev2' , Biz='$prev3'  , Text='$text' WHERE id='$id'");
		}
	header("location:my.php");	
?>