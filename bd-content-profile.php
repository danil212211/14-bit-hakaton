<?php
//	require ("check-profile.php");
	require ("bd.php");
	$result = mysql_query ("SELECT * FROM Text WHERE User_id='$_COOKIE[id]'",$db);
	$row=mysql_fetch_array($result);
		if ($row["title"]!=''){
	do {
	echo'
   <div class="col-lg-4 col-md-6 col-sm-12" style="margin-top:25px;  ">
  <div class="col-lg-3-push-1">
  <div class="card" style="box-shadow: 0 0 10px rgba(0,0,0,0.5);">
    <div class="image-container">
    <img class="card-img-top img-fluid"style="height:400px;" src="src/'.$row["Image"].'"   alt="Card image cap">
	</div>
    <div class="card-body">
      <h5 class="card-title"><p align="center">'.$row["title"].'</p></h5>
      <p class="card-text" align="center">'.$row["description"].'</p> <p align="center"><form action="look.php"method="post">
      <button type="submit"  class="btn btn-outline-dark btn-bit btn-lg" name="id" id="bur" value="'.$row["id"].'" >Подробнее...</button></form>
<form action="red.php" method="post"><button type="submit" class="btn  btn-outline-success btn-lg btn-bit" name="id" id="bur" value="'.$row["id"].'" >Редактировать</button></form>
<button  data-toggle="modal" data-target="#Modal'.$row["id"].'" class="btn  btn-outline-danger btn-lg btn-bit"  >Удалить</button>



	<div class="modal fade" id="Modal'.$row["id"].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">'.$row["Name"].' - Вы действительно хотите удалить проект?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img class="img-fluid" src="src/'.$row["Image"].'" width="500px" height="400px"><br>
      </div>
      <div class="modal-footer">
	<form action="del.php" method="post">
        <button type="submit" class="btn btn-danger"   name="id" value="'.$row["id"].'">Да</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Нет</button></form>
      </div>
    </div>
  </div>

    </div>
  </div>
</div>	
</div>
</div>
';	
	}
		while($row=mysql_fetch_array($result));}
?>