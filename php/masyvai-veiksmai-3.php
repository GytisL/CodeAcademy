<?php

//1
$m = ['labas', 'rytAS', '...kaunas#', 'jonas jonAITIS'];

function mazosios($s){
    $x = strtolower($s);
    $x = rtrim(ltrim($x, '.'), '#'); //trinami taskai ir groteles siuo atveju. apvalymas
    return $x;
}


$nm = [];
for ($i=0; $i<count($m); $i++) $nm[] = mazosios($m[$i]);//keiciamos didziosios raides i mazasias
echo json_encode($nm) . '<br>'; //isvedamos elementu reiksmes

//2
$nm = [];
$nmd = [];
for ($i=0; $i<count($m); $i++){
    $s = mazosios($m[$i]);
    //$nm[] = ucfirst($s);//keiciamos didziosios raides i mazasias
    $nm[] = ucwords($s);
    $nmd[] = strtoupper($s);
}
echo json_encode($nm) . '<br>';
echo json_encode($nmd) . '<br>';

//3
$nm = [];
$nmd = [];
$nmp = [];
$nm1 = [];
$nmx = [];
$nms = [];
for ($i=0; $i<count($m); $i++){
    $s = mazosios($m[$i]);
    //$nm[] = ucfirst($s);//keiciamos didziosios raides i mazasias
    $nm[] = ucwords($s);// pirmas raides padaro didziosiomis
    $nmd[] = strtoupper($s); //visas raides pavercia didziosiomis
    $nmp[] = str_replace( 'a', '*', $s); //visas a raides pakeis i zvaigzdutes. *
    $nm1[] = $s . '-' . strlen($s);//skaiciuoja zenklu skaiciu ir paraso salia - ir skaiciu
    $nmx[] = $s . '-' . strpos($s,'a');//iesko kurioj pozicijoj yra a raide siuo atveju. pradeda skaiciuoti nuo nulio
    $nms[] = str_shuffle($s);
}
echo json_encode($nm) . '<br>';
echo json_encode($nmd) . '<br>';
echo json_encode($nmp) . '<br>';
echo json_encode($nm1) . '<br>';
echo json_encode($nmx) . '<br>';
echo json_encode($nms) . '<br>';




?>