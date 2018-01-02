<?php

//Sukurti PHP skripta, kuriame butu aprasyti trys kintamieji ir ekrane butu isvestas tu kintamuju kvadratu suma.

$a = 2;
$b = 3;
$c = 4;

$sum = $a**2+$b**2+$c**2;

echo ($sum) . '<br>';

?>




<?php

//Sukurti PHP skripta, kuriame butu aprasytas vienmatis masyvas, aprasantis viena asmeni naudojant raktus, pavyzdziui "lytis => "vyras". Masyve turi buti laukeliai: vardas, pavarde, gimimo metai.

//$a = ['vardas' => 'Petras', 'pavarde' => 'Petraitis', 'gimimoMetai' => '1980'];

//var_export($a);

?>


<?php

//Sukurti PHP skripta, kuriame butu aprasyta funkcija, kuriai padavus keturis parametrus skaicius, funkcija turi grazinti rezultata visu paduotu parametru aritmetini vidurki.

function parametrai($p1, $p2, $p3, $p4){
    $vid = ($p1+$p2+$p3+$p4)/4;
    return $vid;
}

echo parametrai(2, 4, 6, 8) . '<br>';

?>


<?php

//Sukurti PHP skripta, kuriame butu aprasytas vienmatis masyvas is 4 elementu teksto eiluciu. Panaudodami foreach cikla pakeisti visus masyvo elementus paversdami teksta mazosiomis raidemis, pirma raide - didziaja ir pridedami gale teksto taska.

$mas = ['tekstas1' => 'labas1', 'tekstas2' => 'labas2', 'tekstas3' => 'rytas1', 'tekstas4' => 'rytas2'];
    foreach ($mas as $elem => $reiksm){
        $mas [$elem]= ucfirst(strtolower($reiksm)) . '.';
    }

        var_export($mas);


?>


