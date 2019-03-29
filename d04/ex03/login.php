<?php
session_start();

include "auth.php";

function ft_error($error)
{
    echo $error;
    exit(0);
}

$login = $_GET["login"];
$passwd = $_GET["passwd"];
if (!$login || !$passwd || !auth($login, $passwd)) {
    $_SESSION["loggued_on_user"] = "";
    ft_error("ERROR\n");
}
$_SESSION["loggued_on_user"] = $login;
echo "OK\n";
?>