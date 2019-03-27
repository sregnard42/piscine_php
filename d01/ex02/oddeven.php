#!/usr/bin/php
<?php
$request = "Entrez un nombre: ";
echo $request;
while (($input = trim(fgets(STDIN))) != NULL) {
    if ($input - (int)$input != 0)
        echo "'" . $input . "' n'est pas un chiffre\n";
    else if (is_numeric($input)) {
        if (substr((int)$input, -1) % 2 == 0)
            echo "Le chiffre " . $input . " est Pair\n";
        else
            echo "Le chiffre " . $input . " est Impair\n";
    } else
        echo "'" . $input . "' n'est pas un chiffre\n";
    echo $request;
}
echo "\n";
?>