<?php
	require ("bd.php");
	$result = mysql_query ("SELECT * FROM Text WHERE role='2'",$db);
	$row=mysql_fetch_array($result);
	
	if ($row["title"]!=''){
		
	do {
	echo'
	
   <div class=" col-12" style="margin-top:25px;  ">
 

  <div class="card " style="height:100%;box-shadow: 0 0 10px rgba(0,0,0,0.5);">
    <div class="item item_left">
    <img style="width:40%;" align="right" src="src/'.$row["Image"].'"   alt="Card image cap">

      <p align="left" style="font-size:40px;">'.$row["title"].'<small>
      <br>'.$row["description"].'</small></p></h5><form action="look.php"method="post"><br>
	  <p>
	Стоимость проекта:'.$row["Price"].'</p>
      <button type="submit" class="btn btn-outline-dark btn-bit btn-lg" name="id" id="bur" value="'.$row["id"].'" >Подробнее...</button></form>
    </div>
  </div>
</div>
';	
}
	while($row=mysql_fetch_array($result));}
?>