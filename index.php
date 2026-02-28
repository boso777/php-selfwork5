<?php

// Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array.

$numbers = [1, 45, 47, 99, 89, 90, 3, 54, 88, 22];

$sum = 0;
$pari = [];

foreach($numbers as $number){

        if($number % 2 == 0){
            $pari[] = $number;
            $sum = $sum + $number;
        };
};

$average = $sum / count($pari);


echo "La media dei numeri presenti nell'array numbers è " . $average . "\n";


?>