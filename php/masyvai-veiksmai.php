<?php

$m = ['bmw', 'audi', 'honda', 'lada'];
echo json_encode($m); echo '<br>';//json_encode objekto pavertimas i tekstine forma. perduoda duomenis is front-end i back-end ir atgal
sort($m); //rusiavimas pagal reiksme didejimo tvarka. pvz 1<2, a<b
echo json_encode($m); echo '<br>';
rsort($m);//rusiavimas pagal reiksme mazejimo tvarka


echo json_encode($m); echo '<br>';//JSON.stringify - javascript JSON kodavimo forma
//shuffle($m);//ismetymas atsitiktine tvarka
//echo json_encode($m); echo '<br>';
$m2 = array_slice($m, 1, 2);
echo json_encode($m2); echo '<br>';//masyvo dalis

$m3 = array_slice($m, 1, 3);
echo json_encode($m3); echo '<br>';//masyvo dalis
unset($m3[1]);//pasalinti elementa bmw siuo atveju
echo json_encode($m3); echo '<br>';//masyvo dalis

$m3 = array_slice($m, 1, 3);
echo json_encode($m3); echo '<br>';//masyvo dalis
for ($i=0; $i<count($m3); $i++){ //surasti pagal reiksme ir pasalinti
    if($m3[$i]=='bmw'){
        unset($m3[$i]);
        break;
    }
}
echo json_encode($m3); echo '<br>';//masyvo dalis

$m4 = $m; //dubliuojama
if (in_array('honda',$m4)) echo 'honda rasta<br>';
else echo'honda nerasta<br>';//parodo ar yra toks elementas

$s = 'honda, bmw, audi, lada';
$ms = explode(',', $s);//kabutese esantis zenklas yra skiriklis''
echo json_encode($ms); echo '<br>';//masyvas is teksto
//echo $s2; echo '<br>';// tekstas is masyvo
for ($i=0; $i<count($ms); $i++) $ms[$i] = trim($ms[$i]); //is masyvo pasalinami tarpai is krastu
$s2 = implode(':', $ms);
echo $s2; echo '<br';//tekstas is masyvo

list($auto1, $auto2, $auto3, $auto4) = $ms;//is masyvo suraso kintamuosius
var_dump($auto1);
var_dump($auto2);
var_dump($auto3);
var_dump($auto4);

$a1 = $ms[0];
$a2 = $ms[1];
$a3 = $ms[2];
$a4 = $ms[3];

var_dump($a1);
var_dump($a2);
var_dump($a3);
var_dump($a4);

?>