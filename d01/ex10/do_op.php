#!/usr/bin/php
<?php

function ft_error($err)
{
    echo $err;
    exit (0);
}

$err = "Incorrect Parameters\n";
if (--$argc < 3)
    ft_error($err);
for ($i = 1; $i <= $argc; $i++)
{
    $argv[$i] = str_replace(" ", "", $argv[$i]);
    $argv[$i] = str_replace("\t", "", $argv[$i]);
}
$a = $argv[1];
$o = $argv[2];
$b = $argv[3];
if ($o == "+")
    $res = $a + $b;
else if ($o == "-")
    $res = $a - $b;
else if ($o == "/")
{
    if ($b == 0)
        ft_error($err);
    $res = $a / $b;
}
else if ($o == "*")
    $res = $a * $b;
else if ($o == "%")
{
    if ($b == 0)
        ft_error($err);
    $res = $a % $b;
}
echo $res . "\n";
?>