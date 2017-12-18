<?php

function automatas($pinigai, $pavadinimas)
{
    $prekes = [
        'coca' => 1, // naudojant skaiciu kabutes nebutinos. PHP priims
        'mineralinis' => 0.5,
        'traskuciai' => 0.75,
        'sprite' => 1.2
    ];
    if (isset($prekes[$pavadinimas])) {  //isset-reiskia ar egzistuoja elementas
        $preke = $prekes[$pavadinimas];
        if ($pinigai >= $preke) {
            //preke iskrenta pro skyle
            if ($pinigai == $preke) {
                echo 'pasiimkite preke ir graza';
            }
            else {
                echo 'pasiimkite preke ir graza';
            }
            return $preke;
        }
        else {
            echo 'per mazai pinigu';
            return $pinigai;
        }
    }
    else {
        echo 'nera tokios prekes';
        return $pinigai;
    }
}

//ateina petras ir reikia koka kolos

$preke = automatas (1, 'coca');
echo $preke;

?>