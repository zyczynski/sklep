<?php

class Produkt
{
    private $nazwa;
    private $cena;


    function __construct($nazwa, $cena)
    {
        $this->nazwa = $nazwa;
        $this->cena = $cena;
    }


    public function getCena()
    {
        return $this->cena;
    }


    public function getNazwa()
    {
        return $this->nazwa;
    }
}

