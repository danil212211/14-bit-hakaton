<?php
	require ("bd.php");
	$result = mysql_query ("SELECT * FROM Text WHERE User_id='$_COOKIE[id]'",$db);
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
			<ul class="navbar-nav mr-auto">
				<li class="nav-item"><a href="content-inves.php" class=" nav-link">Вернуться</a></li>
				<li class="nav-item"> <a href="add.html"  class="nav-link ">Создать проект</a></li>
			</ul>
			<ul class="navbar-nav my-2 my-lg-0"><li class="nav-item my-2 my-lg-0">
				<li><a href="my.php" class="nav-link">Мои проекты</a></li>
				<li class="nav-item "><a href="logout.php" class=" nav-link">Выйти из аккаунта</a></li>
			</ul>
		</div>
	</nav><div class="container">
<form action="red-2.php" class="was-validated" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label>Название проекта</label>
    <textarea name="title" required class="form-control" style="height:50px;" maxlength="60" >'.$row["title"].'</textarea>
  </div>
  <label>Обложка</label
  <div class="form-group">
	<br><input  name="Photo" type="file" class="file" accept=".jpg, .jpeg, .png">  
	<input type="checkbox" class="form-check-input" name="wer" value="'.$row["Image"].'" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Оставить фотографию?</label>
  <div class="form-group">
    <label>Краткое описание проекта</label>
    <textarea name="description" required class="form-control" style=" top:0px; height:120px;" maxlength="100">'.$row["description"].'</textarea>
  </div>
  <div class="form-group">
    <label>Место реализации проекта</label>
    <textarea name="town" required class="form-control" >'.$row["town"].'</textarea>
  </div>

  <div class="form-group">
    <label>Описание проекта</label>
    <textarea name="text" required class="form-control" style="height:200px;">'.$row["Text"].'</textarea>
  </div>
  <button name="id" value='.$row["id"].' class="btn btn-primary" type="submit">Редактировать стартап</button>
  </div></form>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="ckeditor.js"></script>';
		echo"
		<script>CKEDITOR.replace('text');
CKEDITOR.editorConfig = function( config ) {
	config.toolbarGroups = [
		{ name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
		{ name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
		{ name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
		{ name: 'forms', groups: [ 'forms' ] },
		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
		{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
		{ name: 'links', groups: [ 'links' ] },
		{ name: 'insert', groups: [ 'insert' ] },
		{ name: 'styles', groups: [ 'styles' ] },
		{ name: 'colors', groups: [ 'colors' ] },
		{ name: 'tools', groups: [ 'tools' ] },
		{ name: 'others', groups: [ 'others' ] },
		{ name: 'about', groups: [ 'about' ] }
	];

	config.removeButtons = 'PasteText,PasteFromWord,EasyImageUpload,Anchor,About,Styles,Format,Source';
};		
</script>";
echo '
</body>
</html>';
?>