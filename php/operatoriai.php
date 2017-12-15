<?php

$a = '6' == 6; //reiksme true
var_dump($a);

$a = '6' === 6; // reiksme false (jeigu 3 lygybes zenklai tai reiskia, kad skaicius turi buti identiskas todel ir meta false)
var_dump($a);

$a = 6 === 6; // nuemus kabutes nuo 6 gausis true

$a = true == 1; //true verciasis i 1

var_dump($a);

$a = 'a' != 'b'; // != reiskia nelygu arba <>
var_dump($a);

$a = 1;
echo ++$a . "<br>"; //++ prideda pries isvedima
echo $a++ . "<br>"; //++ prideda po isvedimo
echo $a . "<br>";

$x = 5; $y = 10;

$a = $x > 5 && $y <10; //$x - reiksme kuriam priskirta reiksme 5
var_dump($a);

$a = $x == 5 && $y >=10; // || - reiskia or salyga. uztenka, kad butu bent vienas true ir reiksme bus true
var_dump($a);

$a = $x == 5 || $y <10;
var_dump($a);

$a = $x == 5 && !($y <10); //su not salyga tampa true prirasant sauktuka !
var_dump($a);

$a = ($x == 5 xor $y == 10); //salyga teisinga tik tada jei viena is reiksmiu true arba false. Jei abi reiksmes true ar ba false tai salyga gausis true arba false
var_dump($a);

?>