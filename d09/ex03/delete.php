<?php

$id = $_REQUEST['id'];
if (!$id) {
    return;
}

if (!($handle = fopen('list.csv', 'r'))) {
    return;
}
if (!($new_file = fopen('tmp.csv', 'w+'))) {
    return;
}

while (!feof($handle)) {
    $line = fgetcsv($handle);
    if ($line) {
        $line = explode(';', $line[0]);
        $line_id = $line[0];
        $line_val = $line[1];
        $line = $line_id . ';' . $line_val;
        if ($line_id != $id) {
            if (!(fputcsv($new_file, explode(';', $line), ';', chr(127)))) {
                return;
            }
        }
    }
}
fclose($handle);
fclose($new_file);
rename('tmp.csv', 'list.csv');
