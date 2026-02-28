<?php

// Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array.

$numbers = [1, 45, 99, 3349, 33, 47, 99, 89, 90, 3];

$sum = 0;

foreach($numbers as $number){
        if($number % 2 == 0){
            $sum = $sum + $number;
        }
};

$average = $sum / count($numbers);



echo "La media dei numeri presenti nell'array " . $average;

?>