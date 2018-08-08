<?php

$trudnaTablica = [
    'piotrek' => ['wiek' => 32, 'zawod' => 'prezenter', 'zainteresowania' => ['psy', 'koty']],
    'bartek' => ['wiek' => 33, 'zawod' => 'dj', 'zainteresowania' => ['baby', 'kwiatki']],
];

echo $trudnaTablica['piotrek']['wiek'];
echo "</br>";
echo "</br>";
echo $trudnaTablica['bartek']['zawod'];
echo "</br>";
echo "</br>";


foreach ($trudnaTablica as $imie=>$dane)
{
    echo $dane['wiek'];

}
echo "</br>";
echo "</br>";

echo $trudnaTablica['piotrek']['zainteresowania'][0];

echo "</br>";
echo "</br>";

foreach ($trudnaTablica as $imie=>$dane)
{
  foreach ($dane['zainteresowania'] as $zainteresowanie)
  {
      echo $zainteresowanie;
  }
}

echo "</br>";
echo "</br>";


    foreach ($trudnaTablica['bartek']['zainteresowania'] as $zainteresowania=>$zainteresowanie)
    {
        echo $zainteresowanie . '</br>';
    }






