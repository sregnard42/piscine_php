<?php

function ft_is_sort($tab)
{
    $sorted = $tab;
    sort($sorted);
    $rsorted = $tab;
    rsort($rsorted);
    return ($tab === $sorted || $tab === $rsorted);
}

?>