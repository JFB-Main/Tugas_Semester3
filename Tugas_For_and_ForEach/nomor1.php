<?php
$n = 10;    // jumlah suku dari 1 ke 19
$a = 1;     // suku pertama
$un = 19;   // suku terakhir

$sum = ($n / 2) * ($a + $un);
echo "Perhitungan menggunakan rumus $sum" . PHP_EOL;

echo "Perhitungan menggunakan for loop" . PHP_EOL;
$sum = 0;
for ($i = 1; $i <= 19; $i += 2){
    echo $i . ($i != 19 ? " + " : " = ");
    $sum += $i;
}
echo $sum . PHP_EOL;
?>