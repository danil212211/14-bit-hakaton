<?php
echo '
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
			<ul class="navbar-nav mr-auto">
				<li class="nav-item"><a href="content-inves.php" class=" nav-link">Вернуться</a></li>
				<li class="nav-item"> <a href="add.html"  class="nav-link ">Создать проект</a></li>
			</ul>
			<ul class="navbar-nav my-2 my-lg-0"><li class="nav-item my-2 my-lg-0">
				<li><a href="my.php" class="nav-link">Мои проекты</a></li>
				<li class="nav-item "><a href="logout.php" class=" nav-link">Выйти из аккаунта</a></li>
			</ul>
		</div>
	</nav>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		';
	require ("bd.php");
	$result = mysql_query ("SELECT * FROM Text WHERE id=$_POST[id]",$db);
	$row=mysql_fetch_array($result);
	echo'
	<div >
    <img align="left"  src="src/'.$row["Image"].'" style="height:400px;"     alt="Card image cap">
      <h5 >'.$row["title"].'<br>
      <small>'.$row["description"].'</small></h5>
    </div><br>
	<h5>'.$row[Text].'
	<small>'.$row[town].'</small>  </h5>				
	</div>
  </div>
</div>	
</div>
</div>
</body>
</html>
';	
?>