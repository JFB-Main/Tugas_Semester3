<?php
function bmi ($gender, $tinggi) {
    $persen = $gender ? 0.1 : 0.15;
    return ($tinggi - 100) - (($tinggi - 100) * $persen);
}
echo bmi(1, 175);
echo "\n";

$gender = 'female';
$tinggi = 175;

if ($gender == 'female') {
    $berat = ($tinggi - 100) - (($tinggi - 100) * 0.1);
    echo $berat ;
}
else if ($gender == 'male') {
    $berat = ($tinggi - 100) - (($tinggi - 100) * 0.15);
    echo $berat;
}
?>