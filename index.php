<?php
require_once 'produkt.php';

$produkty =
    [
        $jablko = new Produkt('jablko', '5'),
        $bombonierka = new Produkt('pietruszka','9'),
        $bombonierka = new Produkt('bombonierka','10'),
        $bombonierka = new Produkt('narkotyki','40'),
        $bombonierka = new Produkt('flaszka','50')
    ];

//echo $jablko->getNazwa() ." kosztuje " . $jablko->getCena();
//echo "</br>";
//echo "a" . $bombonierka->getNazwa() . " kosztuje " . $bombonierka->getCena();


foreach ($produkty as $produkt)
{
    echo $produkt->getNazwa() . " kosztuje ";
    echo $produkt->getCena();
    echo '</br>';
}

