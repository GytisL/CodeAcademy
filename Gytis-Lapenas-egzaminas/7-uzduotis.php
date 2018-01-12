<?php
$masyvas = ['kiekvienas', 'metu', 'laikas', 'savaip', 'grazus'];
$i = 0;
foreach($masyvas as $m){
    $masyvas[$i++] = strtoupper($m);
}
var_dump($masyvas);
?>