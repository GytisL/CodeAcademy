<?php

class turgus {
    public $automobiliai;
    function automobilis($gamintojas, $modelis, $metai, $kaina){
        if(!isset($this->automobiliai))
            $this->automobiliai = [];
            $this->automobiliai [] = [
                'ga'=>$gamintojas,
                'mo'=>$modelis,
                'ka'=>$kaina,
                'me'=>$metai
            ];

    }
    function minKaina(){
        $min = $this->automobiliai[0]['ka'];
        for ($i=0; $i<count($this->automobiliai); $i++){
            if ($this->automobiliai[$i]['ka']<$min) $min = $this->automobiliai[$i]['ka'];
        }
        return $min;
    }
}


$objektas = new turgus();

$objektas -> automobilis('bmw', '750', '1996', '5000');
$objektas -> automobilis('zaz', '965', '1965', '2000');
$objektas -> automobilis('audi', 'a4', '2000', '3000');

echo $objektas->minKaina();
?>