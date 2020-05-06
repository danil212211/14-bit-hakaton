<?php
	$id=$_POST['id'];
	$title=$_POST['title'];
	$description=$_POST['description'];
	$town=$_POST['town'];
	$text=$_POST['text'];
	$uploaddir = '/var/www/14-bit/www/startup_bit/src/';
	$uploadfile = $uploaddir .($_FILES['Photo']['name']);
	$prev=($_FILES['Photo']['name']);
	if ($prev=="") { $prev=$_POST['wer']; }
	move_uploaded_file($_FILES['Photo']['tmp_name'], $uploadfile);
	copy($_FILES['Photo']['tmp_name'], $uploadfile);
	include ("bd.php");
	$result=mysql_query ("UPDATE Text SET title='$title', description='$description', Image='$prev' , Text='$text' WHERE id='$id'");
	header("location:my.php");	
?>