<?php
session_start();
$user = $_SESSION["loggued_on_user"];
if ($user && $user != "")
    echo $user . "\n";
echo "ERROR\n";
?>