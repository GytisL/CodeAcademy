<?php

class svecias{
    public $vardas;
    public $pavarde;
    public $maistas;
    function __construct($vardas, $pavarde, $maistas){
        $this->vardas = ucfirst(strtolower($vardas));//strtolower pavercia parametro teksta i mazasias raides.
        $this->pavarde = ucfirst(strtolower($pavarde));//ucfirst pirmaja raide padaro didziaja
        $this->maistas = ucfirst(strtolower($maistas));
    }
    function eilute(){
        $s = '<tr>';
        $s.= '<td>' . $this->vardas . '</td>'; //.=prijungia
        $s.= '<td>' . $this->pavarde . '</td>';//<td> - celes
        $s.= '<td>' . $this->maistas . '</td>';
        $s.= '</tr>';
        return $s;
    }
}

$sveciai = [];
$sveciai[] = new svecias('JonAs', 'JoNaitis', 'Zuvis'); //raidziu dydis nesvarbus
$sveciai[] = new svecias('PetrAs', 'petRaitis', 'Mesa');
$sveciai[] = new svecias('AntAnas', 'Antanaitis', 'Vegetaras');

 var_dump($sveciai);

 echo '<table>';
 foreach($sveciai as $sv){ //ciklai. foreach - sutrumpintas variantas. Sekancio masyvo zenkla .
     echo $sv->eilute();
 }
 echo '</table>';

?>