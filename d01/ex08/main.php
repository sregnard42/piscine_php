#!/usr/bin/php
<?php
include("ft_is_sort.php");
unset($argv[0]);
$argv = array_merge($argv);
if (ft_is_sort($argv))
echo "Le tableau est trie\n";
else
echo "Le tableau n’est pas trie\n";
?>
