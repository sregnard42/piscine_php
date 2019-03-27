<?php

function ft_is_sort($tab)
{
    $sorted = $tab;
    sort($sorted);
    $rsorted = $tab;
    rsort($rsorted);
    print_r($tab);
    print_r($sorted);
    print_r($rsorted);
    return ($tab === $sorted || $tab === $rsorted);
}

?>