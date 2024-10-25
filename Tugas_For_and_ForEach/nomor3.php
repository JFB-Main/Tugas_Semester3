<?php
echo "menggunakan if else" . PHP_EOL;
for ($i = 1; $i <= 100; $i++){
    if ($i % 3 == 0 && $i % 5 == 0) 
        echo "$i\tflash buzz" . PHP_EOL;
    elseif ($i % 3 == 0)
        echo "$i\tbuzz" . PHP_EOL;
    elseif ($i % 5 == 0)
        echo "$i\tflash" . PHP_EOL;
    else
        echo $i . PHP_EOL;
}

echo "menggunakan ternary" . PHP_EOL;
for ($i = 1; $i <= 100; $i++){
    echo ($i % 3 == 0 && $i % 5 == 0) 
        ? "$i\tflash buzz" . PHP_EOL 
        : (($i % 3 == 0) 
        ? "$i\tbuzz" . PHP_EOL 
        : (($i % 5 == 0)
        ? "$i\tflash" . PHP_EOL 
        : $i . PHP_EOL));
}

echo "menggunakan switch" . PHP_EOL;
for ($i = 1; $i <= 100; $i++){
    switch(true) {
        case ($i % 3 == 0 && $i % 5 == 0): 
            echo "$i\tflash buzz" . PHP_EOL;
            break;
        case ($i % 3 == 0):
            echo "$i\tbuzz" . PHP_EOL;
            break;
        case ($i % 5 == 0):
            echo "$i\tflash" . PHP_EOL;
            break;
        default:
            echo $i . PHP_EOL;
    };
}

echo "menggunakan match" . PHP_EOL;
for ($i = 1; $i <= 100; $i++){
    echo match(true) {
        ($i % 3 == 0 && $i % 5 == 0) => "$i\tflash buzz" . PHP_EOL,
        ($i % 3 == 0) => "$i\tbuzz" . PHP_EOL,
        ($i % 5 == 0) => "$i\tflash" . PHP_EOL,
        default => $i . PHP_EOL,
    };
}
?>