#!/usr/bin/php
<?php
$request = "Entrez un nombre: ";
echo $request;
while (($input = (fgets(STDIN))) != null) {
    $input = rtrim($input, "\n\r");
    if (is_numeric($input)) {
        if ((int)$input % 2 == 0)
            echo "Le chiffre " . $input . " est Pair\n";
        else
            echo "Le chiffre " . $input . " est Impair\n";
    } else
        echo "'" . $input . "' n'est pas un chiffre\n";
    echo $request;
}
?>