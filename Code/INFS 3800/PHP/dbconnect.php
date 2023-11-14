<?php

# dbservername will be the ip address of the server we are connecting to
$dbervername = "localhost";
$dbusername = "infsclass";
$dbpassword = "webclass";
$dbname = "infs3800";

$conn = mysql_connect($dbervername, $dbusername, $dbpassword, $dbname);

?>