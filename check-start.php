<?
// Скрипт проверки

// Соединямся с БД
require ("bd.php");
if (isset($_COOKIE['hash']))
{
	$hash="$_COOKIE[hash]";
    $query = mysql_query("SELECT * FROM users WHERE id='".$_COOKIE['id']."'");
    $userdata = mysql_fetch_array($query);
	 echo "$userdata[login]";
    if  ($userdata['user_hash'] !== $_COOKIE['hash'])
    {
   //     setcookie("hash", "", time() - 3600*24*30*12, "/", null, null, true); // httponly !!!
header ("Location:https://14-bit.ru/startup_bit/login.html");	
    }
    else
    {
header ("Location:https://14-bit.ru/startup_bit/add.html");
    }
}
else
{
header ("Location:https://14-bit.ru/startup_bit/login.html");	
}
?>