<?php

class turgus{//turgaus klases aprasas
    public $automobiliai;//savybe kur bus talpinamas automobiliu masyvas
    function automobilis($gamintojas, $modelis, $metai, $kaina){
        if (!isset($this->automobiliai))
            $this->automobiliai = [];
        $this->automobiliai [] = [
            'ga' => $gamintojas,
            'mo' => $modelis,
            'ka' => $kaina,
            'me' => $metai
        ];
    }
    function minKaina(){//funkcija parodyti zemiausia automobilio kaina turguje
        $min = $this->automobiliai[0]['ka'];
        for ($i = 0; $i < count($this->automobiliai); $i++) {
            if ($this->automobiliai[$i]['ka'] < $min) $min = $this->automobiliai[$i]['ka'];
        }
        return $min;//graziname surasta zemiausia automobilio kaina kaip funkcijos rezultatai
    }
    function maxKaina(){
        $max = $this->automobiliai[0]['ka'];
        for ($i = 0; $i < count($this->automobiliai); $i++) {
            if ($this->automobiliai[$i]['ka'] > $max) $max = $this->automobiliai[$i]['ka'];
        }
        return $max;
    }
}

$objektas = new turgus();//sukuriame klases objekto egzemplioriu

$objektas -> automobilis('bmw', '750', '1996', '5000');//idedame automobili
$objektas -> automobilis('zaz', '965', '1965', '2000');//idedame automobili
$objektas -> automobilis('audi', 'a4', '2000', '3000');//idedame automobili

echo $objektas->minKaina();
echo $objektas->maxKaina();
?>