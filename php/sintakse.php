<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<!--html komentaras -->


<script>
    //javascript komentaras
</script>


<?php
echo 'labas'; // komentaras php komentaras veikia tik <?php viduje
/* komentaras
komentaras
*/
// kintamieji
$a = 5; //skaicius
$af = 5.6; //float (plaukiojancio kablelio skaicius)
$af = 3.1e-3; //float (3.1e-3=3.1*10^-3)
$b = true; //boolean(loginis)
$c = "abc"; // string
$d = ['bmw', 'honda']; // massyvas
$e = new stdClass(); //objektas
$f = NULL; //nieko

/* kintamieji gali buti 3 rusiu
local
static
global
*/

function pvz_static(){
    static $a = 0; // sukuriamas su pradine reiksme
    $a++; // pridedamas +1
    echo $a . '<br>'; // parodymas
}
pvz_static(); // sukuriamas $a; pridedamas +1 ir parodoma
pvz_static(); // pridedamas +1 ir parodoma
pvz_static(); // pridedamas +1 ir parodoma

$g = "labas";

function pvz_local(){
    //$g = "rytas"; funkcija butinai reikia priskirti kintamajam, siuo atveju $g
    echo $g . "<br>"; //kreipinys iš vidaus ($g) i lauka yra nematomi
}
pvz_local(); // bus klaida, nes nepriskirtas siuo atveju $g.


global $h;
$h = "labas";
function pvz_global(){
    global $h;
    echo $h . "<br>";
}
pvz_global();
echo $GLOBALS['h'] . "<br>";
echo $h . " rytas" . "<br>";


echo $_SERVER['PHP_SELF'] . "<br>";
echo $_SERVER['HTTP_HOST'] . "<br>";


eval('$s = "aaa";'); //ivykdo php koda is teksto. Iesko kintamojo kai ""
echo $s . "<br>";
unset($s); // panaikina $s
echo $s . "<br>"; // iesko $s, bet yra klaida, nes panaikintas $s kintmasis

define('konst', 'labas'); // konstanta. Konstanta nekinta
echo konst . "<br>"; // br naudojama, kad nesumestu visko i viena eilute

// const konst = 'labas'; /sintakse galioja tik klaseje

?>

</body>
</html>
