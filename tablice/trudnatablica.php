<?php

$trudnaTablica = [
    'piotrek' => ['wiek' => 32, 'zawod' => 'prezenter'],
    'bartek' => ['wiek' => 33, 'zawod' => 'dj'],
];

echo "<pre>";
foreach ($trudnaTablica as $imie=>$dane)
    {
        echo $imie;
        echo " ma ";
        echo $dane['wiek'];

    }

echo "zawód bartka to: " . $trudnaTablica['bartek']['zawod'];