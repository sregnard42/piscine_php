#!/usr/bin/php
<?php

function    get_next($s, &$key, &$val)
{
    $exp = explode(":", $s);
    $key = $exp[0];
    $val = $exp[1];
}

if (--$argc < 2)
    return (0);
$my_key = $argv[1];
unset($argv[0], $argv[1]);
foreach ($argv as $arg)
{
    get_next($arg, $key, $val);
    if ($my_key == $key)
        $my_val = $val;
}
if (strlen($my_val))
    echo $my_val . "\n";
?>