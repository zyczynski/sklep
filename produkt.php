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

    /**
     * @return mixed
     */
    public function getCena()
    {
        return $this->cena;
    }

    /**
     * @return mixed
     */
    public function getNazwa()
    {
        return $this->nazwa;
    }
}

