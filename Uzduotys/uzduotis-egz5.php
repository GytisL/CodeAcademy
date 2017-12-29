<?php

//Sukurti PHP skripta, kuriame butu aprasyta funkcija, kuriai padavus tris parametrus-skaicius, funkcija turi grazinti rezultata-visu paduotu parametru suma.

function parametrai($a, $b, $c){
     $sum = $a+$b+$c;
     return $sum;
}


echo parametrai(2,3,4) . '<br>';

?>






<?php

//7.Sukurti PHP skripta, kuriame butu aprasytas vienmatis masyvas is 5 elementu - teksto eiluciu. Panaudodami foreach cikla - pakeisti visus masyvo elementus - paversdami teksta didziosiomis raidemis.

$elementai = ['balta', 'zalia', 'raudona', 'geltona', 'juoda'];//vienmatis masyvas is 5 elementu teksto eiluciu.
    $i = 0;//masyvo elemento pradinis indeksas =0
    foreach ($elementai as $reiksme){//foreach ciklas
        $elementai[$i++] = strtoupper ($reiksme);//padaryta ant seno $elementai. Pakeiciamos tekso raides i didziasias raides, pakeiciant masyve pagal indeksa ir prideti +1 prie indekso.
        //e[$i++]=strtoupper ($reiksme); susikuriant ant naujo elemento
    }

var_dump ($elementai);//tikrina koks gavosi atsakymas

?>






<?php
//*Uzduotis. Sukurti PHP skripta, kuriame butu aprasytas asociatyvinis masyvas is 5 elementu - teksto eiluciu. Panaudodami foreach cikla - pakeisti visus masyvo elementus - paversdami teksta mazosiomis raidemis, o pirmaja didziaja.

$elementai1 = ['AUDI'=>'BALTA', 'BMW'=>'ZALIA', 'MERCEDES'=>'RAUDONA', 'HONDA'=>'GELTONA', 'OPEL'=>'JUODA'];
            foreach ($elementai1 as $reiksme1=>$raktas){
                $elementai1[$reiksme1]=ucfirst($raktas);
            }
var_dump ($elementai1);
//NEBAIGTA
?>





<?php

//8. Sukurkite PHP skripta, kuriame butu aprasyta klase "person", kuri turi savybes - name, surname, age. Sukurkite standartini klases __construct metoda, kuriam perdavus tris parametrus - name, surname ir age - perduotus parametrus padetu i savo savybes.







?>





<?php

//9. Panaudodami pries tai sukurta klses person, sukurkite klases staff ir client, kurios paveldi, person klase. Person klase papildykite metodu "asmenDuomenys", kuris isvestu suformatuota eilute "Vardas Pavarde (amzius". Staff klaseje perrasyti metoda asmensDuomenys, pakeisdami isvedama eilute i "Pavarde Vardas, darbuotojas". Darbuotojas tiesiog paprastas zodis.

?>


