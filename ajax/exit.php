<?php 
setcookie('log', $login, time() - 3600 * 24 * 30, "glavcayt/index.php");
// unset($_COOKIE['login']);
echo true;
?>