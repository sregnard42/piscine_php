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

function    ft_split($s)
{
    $i = 0;
    $array = array();
    while ($word = ft_next_word($s, $i))
        array_push($array, $word);
    return $array;
}
?>