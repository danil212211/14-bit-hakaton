<?php
$id=$_POST['id'];
require ("bd.php");
$result = mysql_query ("DELETE FROM Text WHERE id='$id'");
header ("location:my.php");


?>