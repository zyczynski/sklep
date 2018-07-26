<?php
//Tablica kolorów

$kolory = ['czerwony', 'żółty', 'zielony'];

print_r($kolory);

echo "dostepne kolory to:";
array_push($kolory, "niebieski");
$kolory[] = "brazowy";
echo "</br>";
print_r($kolory);
$kolory[1] = "sraczkowaty";
echo "</br>";
 foreach ($kolory as $kolor)
 {
     echo "<li>";
     echo $kolor;
     echo "</li>";
 }
print_r($kolory);
