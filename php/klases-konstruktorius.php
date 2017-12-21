<?php

class darbuotojas
{
    public $vardas;
    public $pavarde;
    public $atlyginimas;

    function __construct($vard, $pav, $atl)
    { //pagal nutylejima visos funkcijos yra public. Paskirtis kurimo metu perduoti varda, pavarde ir atlyginima
        $this->vardas = $vard;
        $this->pavarde = $pav;
        $this->atlyginimas = $pav;
    }

    function info()
    {
        $s = 'Vardas: %s, Pavarde: %s, Atlyginimas: %s EUR';
        return sprintf($s, $this->vardas, $this->pavarde, $this->atlyginimas);
    }
    function vardas_pavarde($skyriklis){
        return $this->vardas . $skyriklis . $this->pavarde;
    }
}

$d = new darbuotojas('Jonas', 'Jonaitis', '1500');

var_dump($d);

echo $d->info() .'<br>';
echo $d->vardas_pavarde(' ') .'<br>';
echo $d->vardas_pavarde(' * ') .'<br>';

?>