<?php
session_start();
 include("check-user.php");
echo'
<html>
<head>
	<link href="css/content.css" rel="stylesheet">
	<link href="css/in.css" rel="stylesheet">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet">
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
 <li class="nav-item"> <a href="add.html"  class="nav-link ">Создать проект</a></li>
';
if ($userdata['role']=="2")  { 
		echo '<li class="nav-item"> <a href="admin.php"  class="nav-link ">Админ панель</a></li>';}
echo '
</ul>
<ul class="navbar-nav my-2 my-lg-0"><li class="nav-item my-2 my-lg-0">
<li><a href="admin-request.php" class="nav-link">Заявки</a></li>
<li class="nav-item "><a href="logout.php" class=" nav-link">Выйти из аккаунта</a></li>
</ul>
  </div>
</nav>

 <div class="container-fluid">
<div class="row">';
 require ("bd-content-admin-request.php");
echo '
</div></div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		
</body>
</html>';
?>