<?php
	require ("bd.php");
	$result = mysql_query ("SELECT * FROM Text WHERE role='1'",$db);
	$row=mysql_fetch_array($result);
	if ($row["title"]!=''){
	do {
	echo'
   <div class=" col-lg-4 col-md-6 col-sm-12" style="margin-top:25px;  ">
  <div class="col-lg-3-push-1">

  <div class="card " style="height:100%;box-shadow: 0 0 10px rgba(0,0,0,0.5);">
    <div class="image-container">
    <img class="card-img-top"style="height:400px;" src="src/'.$row["Image"].'"   alt="Card image cap">
</div>
    <div class="card-body">
      <h5 class="card-title"><p align="center">'.$row["title"].'<small>
      <br>'.$row["description"].'</small></p></h5><form action="look.php"method="post">
      <button type="submit" style="margin-left: calc(50% - 80px);" class="btn btn-outline-dark btn-bit btn-lg" name="id" id="bur" value="'.$row["id"].'" >Подробнее...</button></form>
    </div>
  </div>
</div>
</div>
';	
}
	while($row=mysql_fetch_array($result));}
?>