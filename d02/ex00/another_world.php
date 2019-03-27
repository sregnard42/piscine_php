#!/usr/bin/php
<?php

if (--$argc < 1)
    return (0);
$s = trim(preg_replace('/\s+/', ' ', $argv[1]));
echo $s . "\n";
?>