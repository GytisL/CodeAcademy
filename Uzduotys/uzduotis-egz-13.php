<?php
//14 pamoka
//(4.3)1.Sukurkite PHP skriptą, kuriame būtų aprašyti trys kintamieji ir ekrane būtų išvestas tų kintamųjų kvadratų vidurkis.
$a = 2;
$b = 3;
$c = 4;
$d = (($a**2)+($b**2)+($c**2))/3;
echo $d;
?>

<?php
//(5.3)2.Sukurkite PHP skriptą, kuriame būtų aprašytas masyvas, aprašantis tris codeAcademy kursus, kurių kiekvienas yra aprašytas asociatyviniu masyvu naudojant raktus. Asociatyviniuose  masyvuose turi būti laukeliai: kurso pavadinimas, mokinių skaičius, kursų pradžios data.
$c = [["kursoPavadinimas"=>"aaa", 'mokiniuSkaicius'=>'10', 'pradziosData'=>'2017-11-11'],
    ["kursoPavadinimas"=>"bbb", 'mokiniuSkaicius'=>'30', 'pradziosData'=>'2017-09-17'],
    ["kursoPavadinimas"=>"ccc", 'mokiniuSkaicius'=>'20', 'pradziosData'=>'2018-02-15']];
var_dump ($c);
?>

<?php
//(6.5)3.Sukurkite PHP skriptą, kuriame būtų aprašyta funkcija, kuriai padavus 5 parametrus ‐ skaičius, funkcija turi paskaičiuoti aritmetinį vidurkį, ištraukti šaknį ir padauginti iš 10. Rezultatą gražinti. Iškviesti funkciją perduodant 5 parametrus (skaičius) ir parodyti rezultatą.
function parametrai5($sk1, $sk2, $sk3, $sk4, $sk5){
    $vid = 10*(sqrt(($sk1+$sk2+$sk3+$sk4+$sk5)/5));
    return sprintf($vid, $sk1, $sk2, $sk3, $sk4, $sk5);
}
   $rez = parametrai5(2, 3, 5, 7, 8);
echo $rez . '<br>';
?>

<?php
//while pvz.$i=0; while{($i<count($m)), kodas, $i++}. while yra tas pats kaip ir for tik while reikia prisiskirti pradine reiksme $i=0 ir po kodo $i++.
//(7.5)4.Sukurkite PHP skriptą, kuriame būtų aprašytas tekstas sudarytas iš žodžių. Suskaidykite tekstą į žodžius ir sukelkite į masyvą. Panaudodami while ciklą ‐ pakeiskite visus masyvo elementus ‐ paversdami tekstą didžiosiomis raidemis, gale teksto prijunkite taško simbolį '.'. Sujunkite visus masyvo elementus į vieną teksto eilutę sujungdami juos kableliais ','.
$t = "Lorem ipsum dolor sit amet consectetur adipiscing elit";
$tekstas = explode(" ", $t);
    $i=0;
    while($i<count($tekstas)){
        $tekstas[$i] = strtoupper($tekstas[$i]) . '.';
        $i++;
    }
$text2 = implode(', ' , $tekstas);
echo $text2 . '<br>';
?>

<?php
//(8.3)5.Sukurkite PHP skriptą, kuriame būtų aprašyta klasė “universitetas”, kuri turi savybes ‐ pavadinimas, miestas, studentai. Sukurkite standartinį klasės __construct metodą, kuriam perdavus tris parametrus ‐ pavadinimas, miestas, studentai ‐ perduotus parametrus padėtų į savo savybes.
class universitetas1{
    public $pavadinimas;
    public $miestas;
    public $studentai;
    function __construct($pp1, $pp2, $pp3){
        $this->pavadinimas = $pp1;
        $this->miestas = $pp2;
        $this->studentai = $pp3;
    }
    function savybes(){
        $un = "Pavadinimas: %s, Miestas: %s, Studentai: %s";
        return sprintf($un, $this->pavadinimas, $this->miestas, $this->studentai);
    }
}
$nnn = new universitetas1('KTU', 'Kaunas', '20');
var_dump($nnn);
echo $nnn->savybes(). '<br>';
?>

<?php
//(9.3)6.Panaudodami prieš tai sukurtą klasę universitetas, sukurkite klases ktu ir vu, kurios paveldi universitetas klasę. universitetas klasę papildykite metodu “info”, kuris išvestų suformatuotą eilutę “pavadinimas, miestais, studentai”. ktu klasėje perrašykite metodą info, pakeisdami išvedamą eilutę į “pavadinimas, miestas, studentai (KTU)”. KTU ‐ tiesiog paprastas žodis. vu klasėje perrašykite metodą info, pakeisdami išvedamą eilutę į “pavadinimas, miestais, studentai (VU)”. VU ‐ tiesiog paprastas žodis. Patikrinkite visų trijų klasių metodo “info” veikimą.
class universitetas{
    public $pavadinimas;
    public $miestas;
    public $studentai;
    function __construct($pp1, $pp2, $pp3){
        $this->pavadinimas = $pp1;
        $this->miestas = $pp2;
        $this->studentai = $pp3;
    }
    function info(){
        $un = "Pavadinimas: %s, Miestas: %s, Studentai: %s";
        return sprintf($un, $this->pavadinimas, $this->miestas, $this->studentai);
    }
}
$nnn = new universitetas('LSMU', 'Kaunas', '20');
echo $nnn->info(). '<br>';
var_dump($nnn);

class ktu extends universitetas{
    function klases(){
        $un2 = "Pavadinimas: %s, Miestas: %s, Studentai: %s, (KTU)";
        return sprintf($un2, $this->pavadinimas, $this->miestas, $this->studentai);
    }
}
$nnn2 = new ktu('uuu', 'Kaunas', '100');
echo $nnn2->klases(). '<br>';
var_dump($nnn2);

class vu extends universitetas{
    function klases(){
        $un3 = "Pavadinimas: %s, Miestas: %s, Studentai: %s, (VU)";
        return sprintf($un3, $this->pavadinimas, $this->miestas, $this->studentai);
    }
}
$nnn3 = new vu('vvv', 'Vilnius', '200');
echo $nnn3->klases(). '<br>';
var_dump($nnn3);
?>

<?php
//egzamine sitos uzduoties nebus
//(10.6)7. Sukurkite PHP skriptą, kuriame aprašykite klasę loto, kurioje būtų viena savybė ‐ $table, kuri bus dvimatis masyvas, taip pat būtų metodas generate(), kuris sugeneruoja 5 x 5 atsitiktinių skaičių dvimatį masyvą (min skaičius = 1, max skaičius = 75). Sukurkite metodą get(),kuris išveda sugeneruotą masyvą 5 x 5 HTML lentele. Pademonstruokite veikimą.

class loto{
    public $table = [];
    function generate(){
        for ($i = 0; $i < 5; $i++){
            for ($j = 0; $j < 5; $j++){
                $this->table[$i][$j] = rand(1, 75);
            }
        }
    }
    function get(){
        echo '<table>';
        for ($i = 0; $i < 5; $i++) {
            echo '<tr>';
            for ($j = 0; $j < 5; $j++) {
                echo '<td>' . $this->table[$i][$j] . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
    }
}
$lentele = new loto();
$lentele->generate();
$lentele->get();
?>