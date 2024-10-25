<?php
echo "Cetak bilangan pangkat 2 kurang dari 100" . PHP_EOL;

$i = 0;
$a = 0;
while ($a < 100) {
    $a = $i ** 2;
    echo "$a ";
    $i++;
}
?>