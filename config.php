<?php

$vDBhost = "localhost";
$vDBuser = "root";
$vDBpass = "";
$vDBname = "data1";



$vErrorMessage = "";

if(!empty($vDBport)) $vDBhost .= ":$vDBport";

$vConn = mysql_connect($vDBhost, $vDBuser, $vDBpass);

if(!$vConn) {
    $vErrorMessage = "Không thể kết nối đến Cơ sở dữ liệu!";
} 
else {
    $vSelectedDB = mysql_select_db($vDBname, $vConn);
    
    if(!$vSelectedDB) $vErrorMessage = "Cơ sở dữ liệu '$vDBname' không tồn tại!";
    
    mysql_query("SET NAMES 'utf8'");
}

?>