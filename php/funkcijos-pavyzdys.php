<?php

$sveciai = [
['vardas'=> 'Jonas', 'pavarde'=> 'Jonaitis', 'patiekalas' => 'mesa', 'issilavinimas' => 'dr.'], // bus $e
    ['vardas'=> 'Petras', 'pavarde'=> 'Petraitis', 'patiekalas' => 'zuvis'], //kiekvieno svecio duomenys yra asociatyviniam masyve
        ['vardas'=> 'Sandra', 'pavarde'=> 'Sandrita', 'patiekalas' => 'salotos', 'issilavinimas' => 'bureja']
];

function info($e){ // e- pavadinta elementas arba eilute
    $s = $e['vardas'] . ' ' . $e['pavarde'] . ' patiekalas: ' . $e['patiekalas'];
    if (isset($e['issilavinimas'])) $s .= ' ' .$e['issilavinimas']; //isset tikrina ar sitas elementas egzistuoja raktas issilavinimas
    return $s;
}
echo 'Sveciu sarasas<br>'; // reikia rasyti, kad priskirti reiksme
echo '--------------<br>';

for ($i=0; $i<count($sveciai); $i++){
$line = ($i + 1) . '. ' . info($sveciai[$i]) . '<br>';
echo $line;
}


echo '---------------<br>';
echo 'Is viso sveciu: '.count($sveciai);

?>