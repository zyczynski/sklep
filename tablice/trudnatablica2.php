<?php

$trudnaTablica = [
    'piotrek' => ['wiek' => 32, 'zawod' => 'prezenter', 'zainteresowania' => ['psy', 'koty']],
    'bartek' => ['wiek' => 33, 'zawod' => 'dj', 'zainteresowania' => ['baby', 'kwiatki']],
];


foreach ($trudnaTablica as $imie=>$dane)
{
    echo $imie . "</br>";
    echo $dane['zawod'] . '</br>';

        foreach ($trudnaTablica['zainteresowania'] as $zainteresowanie)
        {
            echo $zainteresowanie;
        }


}

