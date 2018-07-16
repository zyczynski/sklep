<?php
require_once 'produkt.php';


    $produkt[1] = [ new Produkt('jablko', '5')];
    $produkt[2] = [ new Produkt('bombonierka','10')];
    $produkt[3] = [ new Produkt('cebula','2')];
    $produkt[4] = [ new Produkt('flaszka','50')];
    $produkt[5] = [ new Produkt('zupa','3')];
    $produkt[6] = [ new Produkt('marchew','3')];
    $produkt[7] = [ new Produkt('marichuanina','40')];
//echo "</br>";
//echo "a" . $bombonierka->getNazwa() . " kosztuje " . $bombonierka->getCena();

foreach ($produkt as $klucz => $wartosc)
{
    echo ($produkt);
}