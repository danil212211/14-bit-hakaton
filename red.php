<?php
	require ("bd.php");
	$result = mysql_query ("SELECT * FROM Text WHERE id='$_POST[id]'",$db);
	$row=mysql_fetch_array($result);
	echo'
<html>
<head>
	<link href="css/content.css" rel="stylesheet">
	<link href="css/in.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>14-bit</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark nav-con">
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button><br>
<a href="index.html"><img src="src/StartUp_bit.png" class="logo" ></a>  
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto	">
 <li class="nav-item"> <a href="add.html"  class="btn btn-outline-light " style="border-radius:60px; margin-right:10px;">Создать проект</a></li>
';
session_start();
 include("check-user.php");

if ($userdata['role']=="2")  { 
		echo '<li class="nav-item"> <a href="admin.php"  class="btn btn-outline-light " style="border-radius:60px;">Админ панель</a></li>';}
echo '
</ul>
<ul class="navbar-nav my-2 my-lg-0"><li class="nav-item my-2 my-lg-0">
<li><a href="content-inves.php" class="btn btn-outline-light " style="border-radius:60px; margin-right:10px;" >Каталог</a></li>
<li class="nav-item "><a href="logout.php" class="btn btn-outline-light " style="border-radius:60px;">Выйти из аккаунта</a></li>
</ul>
  </div>
</nav>
<div class="container">
<form action="red-2.php" class="was-validated" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label>Название проекта</label>
    <textarea name="title" required class="form-control" style="height:50px;" maxlength="60" >'.$row["title"].'</textarea>
  </div>
  <label>Обложка</label
  <div class="form-group">
	<br><input  name="Photo" type="file" class="file" accept=".jpg, .jpeg, .png"> 
		  <div class="form-group">
  <label>Презентация</label
  <div class="form-group">
	<br><input  name="Present" type="file" class="file" accept=".pptx, .pdf">
  <div class="form-group">
  <label>Бизнес-модель</label
  <div class="form-group">
	<br><input name="Biz" type="file" class="file" accept=".txt, .word,">
  <div class="form-group">
  <div class="form-group">
    <label>Краткое описание проекта</label>
    <textarea name="description" required class="form-control" style=" top:0px; height:120px;" maxlength="100">'.$row["description"].'</textarea>
  </div>
<div class="form-group">
    <label>Стоимость проекта</label>
    <textarea name="price" required class="form-control" style="height:50px;" >'.$row["Price"].'</textarea>
  </div>
  <div class="form-group">
    <label>Контактные данные</label>
    <textarea name="town" required class="form-control" >'.$row["town"].'</textarea>
  </div>


  <div class="form-group">
    <label>Описание проекта</label>
           <textarea name="text" id="editor"></textarea>  </div>
  <button name="id" value='.$row["id"].' class="btn btn-primary" type="submit">Редактировать стартап</button>
  </div></form>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/19.0.0/classic/ckeditor.js"></script>';
echo "
		<script>	
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );</script>";
echo '
</body>
</html>';
?>