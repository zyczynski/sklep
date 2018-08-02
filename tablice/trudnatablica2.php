<?php

$trudnaTablica = [
    'piotrek' => ['wiek' => 32, 'zawod' => 'prezenter', 'zainteresowania' => ['psy', 'koty']],
    'bartek' => ['wiek' => 33, 'zawod' => 'dj', 'zainteresowania' => ['baby', 'kwiatki']],
];



//echo $trudnaTablica['bartek']['zainteresowania'][0];

foreach ($trudnaTablica as $imie=>$zainteresowanie)

{
    echo $imie['bartek']['zainteresowania'];
}