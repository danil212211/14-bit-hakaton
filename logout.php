<?php
setcookie("hash", "  ", time() - 3600*24*30*12, "/", null, null, true); // httponly !!!
setcookie("id", "  ", time() - 3600*24*30*12, "/", null, null, true); // httponly !!!
header("Location: /"); exit;
?>