#!/usr/bin/php
<?php

function    ft_next_word($s, &$i)
{
    $word = "";
    $len = strlen($s);
    while ($i < $len && $s[$i] == ' ')
        $i++;
    while ($i < $len && $s[$i] != ' ')
        $word .= $s[$i++];
    while ($i < $len && $s[$i] == ' ')
        $i++;
    return $word;
}

if (--$argc < 1)
    return (0);
$s = $argv[1];
$i = 0;
$first_word = ft_next_word($s, $i);
while ($word = ft_next_word($s, $i))
    echo $word . " ";
echo $first_word . "\n";
?>