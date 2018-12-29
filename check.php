<?php 
session_start();
/*error_reporting(0);*/

$_SESSION["uname"]="rajendra";
echo $_SESSION["uname"];
$_SESSION_unset();
echo $_SESSION["uname"];
?>