<?php
//visi masyvai skaiciavima pradeda nuo nulio.
$masyvas = ['bmw', 'audi', 'honda', 'jaguar']; // bmw- nuline pozicija, audi - pirma pozicija, jaguar - antra pozicija.

for ($i = 0; $i<count($masyvas); $i++){
    echo $i . '. ' . $masyvas[$i] . '<br>';
}
echo '<br>';


$masyvas1 = ['bmw', 'audi', 'honda', 'jaguar']; // bmw- nuline pozicija, audi - pirma pozicija, jaguar - antra pozicija.

for ($a = 0; $a<count($masyvas1); $a++){
    echo ($a + 1) . '. ' . $masyvas1[$a] . '<br>';
}
echo '<br>';


//nuliniai masyvai su foreach negali but, mes klaida.
$masyvas2 = ['bmw', 'audi', 'honda', 'jaguar'];{
    $b = 10;
    foreach($masyvas2 as $masina) {
        echo ($b++) . '. ' . $masina . '<br>';
    }
}

?>