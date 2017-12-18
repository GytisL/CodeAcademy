<?php

function spalvos_kodas ($spalva){  //funkcija negali prasideti skaiciumi
    switch($spalva){
        case 'raudona': $kodas = 'red'; break; //butinai parasyti break, kad neitu i sekanti case
        case 'geltonas': $kodas = 'yellow'; break;
        case 'tamsus': $kodas = '#222222'; break;
        default: $kodas = 'black';
    }
    return $kodas;
}
echo '<p style="color:' . spalvos_kodas('raudona') . '">Labas</p>'; //jungiasi spalvos taskais

// <p style=color: red">labas</p> turi taip but html'e

//echo '<p style="color:red">Labas</p>'; //tas pats kaip ir echo '<p style="color:' . spalvos_kodas('raudona') . '">Labas</p>';

echo "<br>";

echo '<p style="color:' . spalvos_kodas('yellow') . '">Labas</p>';
echo "<br>";

echo '<p style="color:' . spalvos_kodas('#222222') . '">Labas</p>';
echo "<br>";

echo '<p style="color:' . spalvos_kodas('oranzine') . '">Labas</p>';  //black by default
echo "<br>";


?>