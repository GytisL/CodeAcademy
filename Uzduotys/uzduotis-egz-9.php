

<?php

//sukurti PHP skripta, kuriame butu aprasyta klase "automobilis", kuri turi savybes gamintojas, modelis, metai. Sukurti standartini klases __construct metoda, kuriam perdavus tris parametrus: gamintojas, modelis, metai perduotus parametrus padetu i savo savybes

class automobilis{//klase gali tureti tik savybes
    public $gamintojas;
    public $modelis;
    public $metai;
    function __construct($gam, $mod, $met){
        $this->gamintojas = $gam;
        $this->modelis = $mod;
        $this->metai = $met;
    }
}
$a = new automobilis ('Mercedes', 'S600', '2000');

var_dump($a);

?>