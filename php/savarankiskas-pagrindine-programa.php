<?php

session_start();

include "class/savarankiskas_automobilio_klase.php";
include "class/savarankiskas_serviso_klase.php";

$auto = [];
$auto [] = new savarankiskas_serviso_klase('General motors', 'toyota', '2010');
$auto [] = new savarankiskas_serviso_klase('Tesla motors', 'tesla', '2017');
$auto [] = new savarankiskas_serviso_klase('General motors', 'opel', '2015');

var_dump ($auto);

foreach($auto as $aa){
    echo $aa->info() . '<br>';
}
?>