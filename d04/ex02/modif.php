<?php

function ft_error($error)
{
    echo $error;
    exit(0);
}

function find_and_replace(&$content, $login, $oldpw, $newpw)
{
    if (!$content)
        return (0);
    foreach ($content as $index => $existing_user) {
        if ($existing_user["login"] == $login && $existing_user["passwd"] == $oldpw) {
            $content[$index]["passwd"] = $newpw;
            return (1);
        }
    }
    return (0);
}

$success = "OK\n";
$error = "ERROR\n";
$dir = "../private/";
$file = $dir . "passwd";

$submit = $_POST["submit"];
$login = $_POST["login"];
$oldpw = $_POST["oldpw"];
$newpw = $_POST["newpw"];
if ($submit != "OK" || !$login || !$oldpw || !$newpw)
    ft_error($error);
$oldpw = hash("whirlpool", $oldpw);
$newpw = hash("whirlpool", $newpw);
$content = @file_get_contents($file);
if ($content === false)
    ft_error($error);
$content = unserialize($content);
if (!find_and_replace($content, $login, $oldpw, $newpw))
    ft_error($error);
file_put_contents($file, serialize($content));
echo $success;
?>