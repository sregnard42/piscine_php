<?php

function ft_error($error)
{
    echo $error;
    exit(0);
}

function user_exists($content, $login)
{
    if (!$content)
        return (0);
    foreach ($content as $existing_user)
        if ($existing_user['login'] == $login)
           return (1);
    return (0);
}

function user_add($login, $passwd, $submit, $dir, $file)
{
    if ($submit != "OK" || !$login || !$passwd)
        return (0);
    if (!file_exists($dir)) {
        mkdir($dir);
        $content = [];
    } else
        $content = (file_exists($file)) ? unserialize(file_get_contents($file)) : [];
    if (user_exists($content, $login))
        return (0);
    $user = [];
    $passwd = hash("whirlpool", $passwd);
    $user["login"] = $login;
    $user["passwd"] = $passwd;
    $content[] = $user;
    file_put_contents($file, serialize($content));
    return (1);
}

$success = "OK\n";
$error = "ERROR\n";
$dir = "../private/";
$file = $dir . "passwd";

if (!user_add($_POST["login"], $_POST["passwd"], $_POST["submit"], $dir, $file))
    ft_error($error);
echo $success;
?>