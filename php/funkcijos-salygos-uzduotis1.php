<?php

function ilgis($a){

    $vard1 = 'jonas';
    $vard2 = 'petras';
    $vard3 = 'ona';

    if (strlen($vard1) == $a) return $vard1;
    elseif (strlen($vard2) == $a) return $vard2;
    else if (strlen($vard3) == $a) return $vard3;
    else return 'nerasta';
}

echo '<br>';
echo ilgis (3); // gautas ats. "ona", nes ieskojo ir rado varda susidedanti is triju zenklu
echo '<br>';
echo ilgis (5);  //gautas ats. "jonas"
echo '<br>';
echo ilgis (6); // gautas ats. "petras" irasomas skaicius is kiek raidziu susideda zodis is tiek ir iesko.

?>