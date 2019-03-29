<?php
$success = "OK\n";
$error = "ERROR\n";
$login = $_POST["login"];
$passwd = $_POST["passwd"];
$submit = $_POST["submit"];
$dir = "private/";
$file = $dir . "passwd";

session_start();
if ($submit != "OK" || !$login || !$passwd) {
    echo $error;
    exit(0);
}
if (!file_exists($dir)) {
    mkdir($dir);
    $content = NULL;
} else
    $content = (file_exists($file)) ? file_get_contents($file) : NULL;
if ($content) {
    $content = unserialize($content);
    foreach ($content as $existing_user)
        if ($existing_user["login"] == $login) {
            echo $error;
            exit(0);
    }
}
if (!$content)
    $content = [];
$user = [];
$passwd = hash("whirlpool", $passwd);
$user["login"] = $login;
$user["passwd"] = $passwd;
array_push($content, $user);
file_put_contents($file, serialize($content));
$_SESSION["login"] = $login;
$_SESSION["passwd"] = $passwd;
echo $success;
?>