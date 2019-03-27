#!/usr/bin/php
<?php

function    ft_next_word($s, &$i)
{
    $word = "";
    while ($s[$i] && $s[$i] == ' ')
        $i++;
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

function    ft_sort(&$array)
{
    $alpha = array();
    $nb = array();
    $other = array();
    foreach ($array as $s)
    {
        if (ctype_alpha($s[0]))
            array_push($alpha, $s);
        else if (ctype_digit($s[0]))
            array_push($nb, $s);
        else
            array_push($other, $s);
    }
    sort($alpha, SORT_STRING | SORT_FLAG_CASE);
    sort($nb, SORT_STRING);
    sort($other, SORT_STRING);
    $array = array_merge($alpha, $nb, $other);
}

$array = array();
while (--$argc > 0)
    $array = array_merge($array, ft_split($argv[$argc]));
ft_sort($array);
foreach($array as $s)
    echo $s . "\n";
?>