#!/usr/bin/php
<?php

function    ft_error($err)
{
    echo $err;
    exit (0);
}

function    epur_str($s)
{
    $s = str_replace("\t", "", $s);
    $s = str_replace(" ", "", $s);
    return $s;
}

function    get_number($src, &$dst, &$i)
{
    $err = "Syntax Error\n";
    $dst = "";
    if ($src[0] == '-' || $src[0] == '+')
        $dst .= $src[$i++];
    else if (!ctype_digit($src[0]))
        ft_error($err);
    while ($i < strlen($src) && ctype_digit($src[$i]))
        $dst .= $src[$i++];
}

function    parse_args($s, &$a, &$o, &$b)
{
    $i = 0;
    get_number($s, $a, $i);
    $o = $s[$i++];
    get_number($s, $b, $i);
}

$err = "Incorrect Parameters\n";
if (--$argc != 1)
    ft_error($err);
parse_args(epur_str($argv[1]), $a, $o, $b);
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