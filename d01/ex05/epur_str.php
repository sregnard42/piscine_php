#!/usr/bin/php
<?php
if (--$argc < 1)
    return (0);
$count = 1;
$s = $argv[1];
while ($count > 0)
    $s = str_replace("  ", " ", $s, $count);
if ($s[0] == " ")
    $s = substr($s, 1);
if ($s[strlen($s) - 1] == " ")
    $s = substr($s, 0, -1);
echo $s . "\n";
?>