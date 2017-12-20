<?php
//2uzduotis
$m = ['dell', 'alienware', 'packard bell', 'asus'];
function mazosios_raides($mr){
    $s=[];
    for ($i=0; $i<count($mr); $i++){
        $s [] = ucwords(strtolower($mr[$i]));
    }
    return $s;

}

echo json_encode($m) . '<br>';


//3uzduotis



//4 uzduotis

$tm = ['dd', 'aa', 'pb', 'aa'];
function parametrai($mas){
    $f=[];
    for ($c=0; $c<count($mas); $c++){
        $f[] = $mas[$c] . '-' . (strlen($mas[$c])+1) . '.';
    }
    return $f;
}

echo json_encode(parametrai($tm)) . '<br>'; //json_encode is vidinio formato $tm pavercia i teksta 'dd', 'aa' ....

?>


