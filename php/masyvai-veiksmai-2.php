<?php
//1
$m = [1,3,6,2,10,12,44];

function vidurkis($mas){
    $sum = 0;
    for ($i=0; $i<count($mas); $i++) $sum += $mas[$i]; //$sum += $mas[$i] isplesta forma $sum = $sum +$mas[$i]; +=
    return $sum / count($mas);
}

echo vidurkis($m) . '<br>';

//2
function prideti($mas, $skaicius){
    for ($i=0; $i<count($mas); $i++) $mas[$i] += $skaicius;
    return $mas;
}

echo json_encode(prideti($m, 1)); echo '<br>';

//3
$m2 = [15,3,10,20,2,0,5];

function didziausias($mm){
    $d = 0;
    for ($i=0; $i<count($mm); $i++){
        if ($mm[$i] > $d) $d = $mm[$i];
    }
    return $d;
}

echo didziausias($m2) . '<br>';

//4
$m3 = [15,3,10,20,2,0,5];

function didziausias2($mm){
    for ($i=0; $i<count($mm); $i++){
        if (isset($d)){
            if ($mm[$i] > $d) $d = $mm[$i];
        } else $d = $mm[$i];
    }
    return $d;
}

echo didziausias2($m3) . '<br>';

//5
$m4 = [15,3,10,20,2,0,5];

function maziausias($mm){
    for ($i=0; $i<count($mm); $i++){
        if (isset($d)){
            if ($mm[$i] < $d&& $mm[$i] > 0) $d = $mm[$i];
        } else $d = $mm[$i];
    }
    return $d;
}

echo maziausias($m4) . '<br>';

?>