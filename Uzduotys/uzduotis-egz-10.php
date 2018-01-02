<?php

//Panaudodami pries tai sukurta klase automobilis, sukurkite klases lengvasis ir krovininis, kurios paveldi automobilis klase, automobilis klase papildyti metodu "duomenys", kuris isvestu suformatuota eilute "gamintojas-modelis-metai". lengvasis klaseje perrasyti metoda duomenys, pakeisdami isvedama eilute i "gamintojas", modelis, metai (lengvasis automobilis)". lengvasis automobilis tiesiog paprastas zodis.


class automobilis{//klase gali tureti tik savybes
    public $gamintojas;
    public $modelis;
    public $metai;

    function __construct($gam, $mod, $met){
        $this->gamintojas = $gam;
        $this->modelis = $mod;
        $this->metai = $met;

    }
    function duomenys(){
        $k = "Gamintojas: %s, Modelis: %s, Metai: %s";
        return sprintf($k, $this->gamintojas, $this->modelis, $this->metai);
    }

}
$a = new automobilis ('Mercedes', 'S600', '2000');
$a = new automobilis ('Audi', 'S7', '2005');


var_dump($a);

echo $a->duomenys() . '<br>';

class lengvasis extends automobilis{
    function duomenys(){
        $k = "Gamintojas: %s, Modelis: %s, Metai: %s (lengvasis automobilis)";
        return sprintf($k, $this->gamintojas, $this->modelis, $this->metai);
    }
}

$a2 = new lengvasis ('Volkswagen', 'Transporter', '1994');

echo $a2->duomenys() . '<br>';

/*class lengvasis extends automobilis {
    function duomenys(){
        $k = gamintojas . ' - '. $this->modelis . ' - ' . $this->metai . ' - '.'(lengvasis automobilis)';
        echo $f;
    }
}*/

class krovininis extends automobilis{

}

$a3 = new krovininis ('Mercedes-benz', 'Vito', '2006');

echo $a3->duomenys();

?>