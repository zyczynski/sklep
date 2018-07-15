<?php
require_once 'produkt.php';


$jablko = new Produkt('jablko', '5');
$bombonierka = new Produkt('bombonierka','10');

echo $jablko->getNazwa() ." kosztuje " . $jablko->getCena();
echo "</br>";
echo "a" . $bombonierka->getNazwa() . " kosztuje " . $bombonierka->getCena();
