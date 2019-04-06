<?php

$content = array();
if (!($handle = fopen('list.csv', 'r'))) {
    return;
}

while (!feof($handle)) {
    $line = fgetcsv($handle);
    if ($line)
        array_push($content, $line[0]);
}
fclose($handle);
echo json_encode($content);
