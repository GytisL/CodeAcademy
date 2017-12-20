<?php

$m = ['bmw', 'audi', 'honda'];


$ma = ['bmw' => 'raudona', 'audi' => 'balta', 'honda' => 'juoda']; //raktas 'bmw' reiksme 'raudona'. Eina raktas ir reiksme

echo $m[0]. '<br>';
echo $ma['bmw']. '<br>';

$mx = ['bmw' => ['raudona', 'melyna', 'zalia'], 'audi' => 'balta', 'honda' => 'juoda'];

echo $mx['bmw'][0] . $mx['bmw'][1] . $ma['bmw'][2] . '<br>';
echo implode(' *** ', $mx['bmw']) . '<br>';

$ma['lada'] = 'geltona'; //ideda papildoma reiksme
echo json_encode($ma) . "<br>";

unset($ma['bmw']); // pasalina siuo atveju bmw
echo json_encode($ma) . "<br>";

$my = ['bmw' => 'raudona', 'audi' => 'balta', 'honda' => 'juoda'];
sort($my); //surusiavimas pagal reiksme
echo json_encode($my) . "<br>";

$mz = ['bmw' => 'raudona', 'audi' => 'balta', 'honda' => 'juoda'];
ksort($mz); //surusiavimas pagal rakta
echo json_encode($mz) . "<br>";

$mz = ['bmw' => 'raudona', 'audi' => 'balta', 'honda' => 'juoda'];
krsort($mz); //surusiavimas pagal rakta is desines puses i kaire
echo json_encode($mz) . "<br>";
$a = ['a', 'x', 'z'];
$b = ['c', 'm'];
$c = array_merge($a, $b);
print_r($c);//naudojamas tik derinimui
sort($c);//surusiuojama
print_r($c);
echo '<br>' . json_encode($c);

$aa = ['bmw' => 'raudona', 'audi' => 'balta', 'honda' => 'juoda'];
$bb = ['toyota' => 'zalia', 'lada' => 'melyna'];
$cc = array_merge($aa, $bb);
echo '<br>' . json_encode($cc);
ksort($cc); //surusiuota pagal rakta. Raktai yra 'bmw', 'audi'...
echo '<br>' . json_encode($cc);

function test($ma, $key){
    if (isset($ma[$key])) echo '<br>yra'; else echo '<br>nera'; //reiksmes negrazinamos. jeigu isset duoda ats: true tai ka nors galima daryt, jei ne reikia padaryti taip, kad nebutu klaida
}

test($cc, 'honda');//reiksme true, nes 'honda' yra irasyta $aa
test($cc, 'kia');// reiksme false, nes 'kia' nera nei $aa nei $bb

echo '<br>' . $cc['honda'] . '<br>';
//------
$s = "Labas %s %s. Sveiki atvyke";
echo sprintf($s, 'jonas', 'jonaitis'); //sablonas



?>