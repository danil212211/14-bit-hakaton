<?php
	require ("bd.php");
	$result = mysql_query ("SELECT * FROM Text",$db);
	$row=mysql_fetch_array($result);
	do {
	echo'
   <div class="col-lg-4 col-md-6 col-sm-12" style="margin-top:25px;  ">
  <div class="col-lg-3-push-1">
  <div class="card">
    <div class="image-container">
    <img class="card-img-top img-fluid"style="height:400px;" src="src/'.$row["Image"].'"   alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"><p align="left">'.$row["title"].'</p><small>
      <p class="card-text" align="left">'.$row["description"].'</p> <p align="center"></small></h5><form action="look.php"method="post">
      <button type="submit" class="btn  btn-primary btn-lg" name="id" id="bur" value="'.$row["id"].'" >Подробнее...</button></form>
    </div>
  </div>
</div>	
</div>
</div>
';	
}
	while($row=mysql_fetch_array($result));
?>