<?php

//1 funkcija

function sulyginti($a, $b){
    if ($a > $b) return 1;
    elseif ($a == $b) return 0; // == sulyginimas reiksmes
    else return -1;
}
echo sulyginti(3, 2);
echo '<br>';
echo sulyginti(3, 3);
echo '<br>';
echo sulyginti(2, 3);
echo '<br>';

//2 funkcija

function ilgis($a, $b){
    if (strlen($a) == 0) return 'tuscias'; // str- string- eilute
    elseif (strlen($a) > 0) return 'daugiau';
    else if (strlen($a) == $b) return 'lygu';
    else return 'maziau';
}
echo ilgis ('Kaunas', 10);
echo '<br>';
echo ilgis ('', 10);
echo '<br>';
echo ilgis ('Kaunas', 3);

//3 funkcija

function ilgis1($a, $b){
    if (strlen($a) == 0) $r = 'tuscias';
    elseif (strlen($a) > $b) $r = 'daugiau';
    elseif (strlen($a) == $b) $r = 'lygu';
    else $r = 'maziau';
    return $r;
}
echo'<br>';
echo ilgis1('Kaunas', 10);

//4 funkcija

function lyg($a, $b){
    if ($a > $b) return true;
    else return false;
}

echo '<br>';
$c = lyg(5,5);
if ($c) echo 'daugiau';
else echo 'nedaugiau';

//5 funkcija

function lyg1($a, $b){
    return ($a > $b);
}

echo '<br>';
if (lyg1(6, 5)) echo 'daugiau';
else echo 'nedaugiau';

?>