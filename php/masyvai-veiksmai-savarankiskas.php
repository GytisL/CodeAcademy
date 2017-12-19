<?php
//6
//daugyba
$c = [2,6,8,7,3];

function sandauga($mas, $skaic){
    for ($i=0; $i<count($mas); $i++) $mas[$i] *= $skaic; //$mas[$i] =$mas[$i] * $skaic
    return  $mas;
}

echo json_encode(sandauga($c, 1.5)) . '<br>';



//dalyba
$c = [2,6,8,7,3];

function dalyba($mas, $skaic){
    for ($i=0; $i<count($mas); $i++) $mas[$i] /= $skaic;
    return  $mas;
}

echo json_encode(dalyba($c, 4)) . '<br>';





$masyvas = ['dell', 'alienware', 'packard bell', 'asus'];
// () parametru perduodamos reiksmes. [] naudojami tik su masyvais. 1) paskelbiam reiksme ir priskiriam reiksme. {} naudojama teksto bloko apksliaudimui, apskliaudziama su {} if, for, while.

function simboliu_skaicius ($ma)
{
    $s = 0;
    for ($i = 0; $i < count($ma); $i++) {
        $s += strlen($ma[$i]);
    }
    return $s;
}

echo simboliu_skaicius ($masyvas) . '<br>';





function skaiciuoja($h){
    $z=0;
    for($b=0; $b<count($h); $b++){
        return $z;
    } $z += sqrt($h[$b]);

}
$g = ['1', '2', '3', '4'];
$rezultatas = $skaiciuoja($g);
echo skaiciuoja ($h) . '<br>';






























?>