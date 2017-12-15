<?php

$a = true; // logine reiksme - teisingai
$b = false; // logine reiksme - neteisingai

$c = 6 > 5; // gauname true
$d = 5 > 6; // gauname false
echo $a . "<br>";
echo $b . "<br>";
echo $c . "<br>";
echo $d . "<br>";


var_dump($d);
print_r($c); // naudojama tik derinimo metu

$f = (bool)1; //cast tipo
var_dump($f);

$int_a = 0x10; //hex decimal integer. eina ne nuo 1 iki 9, o nuo i iki 16
echo $int_a . "<br>"; //atsakymas 16

$float_a = 1.15e1; // 1.15e1 = 1.15*10
echo $float_a . "<br>";


//eilutes (string)
$eil = ' *** ';
$eil_a = 'labas $eil rytas';
echo $eil_a.'<br>';
echo "labas $eil rytas" .'<br>';
echo "labas($eil)rytas" .'<br>'; //radus kintamaji ideda su skliaustais
echo "labas \x31 rytas" .'<br>'; //sesioliktainej formoj iesko reiksmes

$aaa = <<<EOT
labas rytas<br>
as atejau
EOT;
echo $aaa .'<br>';

var_dump(array(<<<EOD
foobar!
EOD

));

echo strlen( "abcdef") . "<br>";

$bbb = "labas rytas";
$ccc = substr($bbb, 6, 3);
echo $ccc . "<br>";
echo strtoupper($ccc) . "<br>"; // funkcija strtoupper  padaro didziasias raides

$o_1 = new stdClass(); // objekto sukurimas 1 budas
//$o_2 = new class{}; // objekto sukurimas 2 budas TINKAMAS NAUDOTI TIK NAUJAUSIOJ VERSIJOJ
$o_3 = (object)[]; // objekto sukurimas 3 budas paima objekto masyva ir cast'ina
$o_4 = json_decode("{}"); // objekto sukurimas 4 budas

$o_1->tipas = 'automobilis';   //  -> kreipimasis i jo savybe (angliskai properties)
$o_1->pavdeze = 'automatine';
$o_1->durys = 4;

var_dump($o_1);
echo $o_1->tipas . ' ' . $o_1->pavdeze . '<br>';
$o_1->{'labas rytas'} = 'aaa';
echo $o_1->{'labas rytas'} . "<br>";

echo $o_1->{'tipas'} . ' ' . $o_1->{'pavdeze'} . '<br>';



?>