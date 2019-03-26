#!/usr/bin/php
<?php

function    ft_next_word($s, &$i)
{
    $word = "";
    while ($s[$i] && $s[$i] != ' ')
        $word .= $s[$i++];
    while ($s[$i] && $s[$i] == ' ')
        $i++;
    return $word;
}

function    ft_split($s)
{
    $i = 0;
    $array = array();
    while ($word = ft_next_word($s, $i))
        array_push($array, $word);
    return $array;
}

$array = array();
while (--$argc > 0)
    $array = array_merge($array, ft_split($argv[$argc]));
sort($array);
foreach($array as $s)
    echo $s . "\n";
?>