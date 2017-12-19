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



?>


