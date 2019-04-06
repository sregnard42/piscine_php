<?php

$line = $_REQUEST['line'];
if (!$line) {
    return;
}

if (!($line = explode(';', $line))) {
    return;
}

if (!($handle = fopen('list.csv', 'a'))) {
    return;
}

if (!(fputcsv($handle, $line, ';', chr(127)))) {
    return;
}

if (!(fclose($handle))) {
    return;
}
