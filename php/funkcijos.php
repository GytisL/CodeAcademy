<?php

function writeMsg() {
    echo "Hello world!<br>";
}

writeMsg(); // pirma karta iskviecia funkcija function writeMsg()
writeMsg(); // antra karta iskviecia funkcija

function familyName($fname='Nesamone', $lname= 'Nezinomas') {  // parasoma funkcija, bet ji nevykdoma. $fname yra default reiksme, o $1name reikia priskirti, nes mes gausime error.
    echo "$fname $lname.<br>";
}

familyName('Jonas'); // reikia funkcijas issikviesti tada ji yra vykdoma istacius konkrecias reiksmes. Funkcijos vykdymas
familyName(); // galima rasyti daug skirtingu priskirimu, bet naudos ta pacia funkcija ir gausis kitos riksmes priklausomai nuo priskyrimo
familyName('Antanas', 'Antanaitis');

$fn = 'familyname'; //sukuriama reiksme funkcijai
call_user_func($fn, 'Petras', 'Petraitis'); // galima turet programos koda ir keisti kintamuosius, pvz pakeisti is 'familyname" i $fn
// funkcijos gali buti paprasto ir gali grazinti reiksme

function familyNameRet($fname = 'Nesamone', $lname = 'Nezinomas') {
    return "$fname $lname.<br>"; //grazina reiksme
}
echo familyNameRet("Jonas", 'Jonaitis'); // reikia rasyti, kad priskirti reiksme

$x = familyNameRet("Jonas", 'Jonaitis');
echo $x;

$fnc = 'familyNameRet';
echo $fnc("Jonas", 'Jonaitis');

$fm = function ($fname='Nesamone', $lname= 'Nezinomas') { // funkcijos keitimas per kintamaji
    return "$fname $lname.<br>";
};
echo $fm("Jonas", 'Jonaitis');

$fm = function($a = '', $b = ''){  // fake funkcija
    return 'belekas';
};
echo $fm("Jonas", 'Jonaitis');



?>