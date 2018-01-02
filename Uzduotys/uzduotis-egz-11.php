<?php

//Sukurti PHP skripta, kuriame reikia aprasyti klase textList, kurioje butu viena savybe $texts, kuri bus masyvas, taip pat metodas add($text), kuris prideda nauja teksta i masyva savybe $texts. Taip pat sukurti metoda(funkcija) symbols(), kuris grazintu masyve savybeje esanciu elementu simboliu skaiciu.

class textList {
    public $texts;
    function add($text){
        if (!isset($this->texts))
            $this->texts = [];
            $this->texts[]= $text;
    }
    function symbols(){
        $s = 0;
        for ($i=0; $i<count($this->texts); $i++){
            $s += strlen($this->texts[$i]);//strlen grazina masyve esanciu elementu simboliu skaiciu.
        }
        return $s;
    }
}
$simbSkaic = new textList();

$simbSkaic->add('Labas');
$simbSkaic->add('vakaras');

echo $simbSkaic->symbols();









?>