<?php
//(4.4) 1.Sukurkite PHP skriptą, kuriame būtų aprašyti du kintamieji. Sudėkite juos, sumą padauginkite iš PI reikšmės. Išveskite rezultatą ekrane.
$x = 7;
$y = 8;
$z = ($x+$y)*3.14159265359;
echo $z;
?>

<?php
//(5.4) 2.Sukurkite PHP skriptą, kuriame būtų aprašytas taksi automobilio asociatyvinis masyvas, kurio raktai yra: gamintojas, modelis, metai, vairuotojai. Vairuotojai taip pat turi būti asociatyvinis masyvas, kurio raktai: vardas, pavarde, stazas.
$taksi = [['gamintojas'=>'DaimlerAG', 'modelis'=>'Mercedes-benzE320', 'metai'=>'2005'],
    ['vairuotojai' => ['vardas'=>'Jonas', 'pavarde'=>'Jonaitis', 'stazas'=>'20']]];
var_dump($taksi);
print_r($taksi);
?>

<?php
//(6.6) 3.Sukurkite PHP skriptą, kuriame būtų aprašyta funkcija, su 3 parametrais: minimalus skaicius, maksimalus skaicius, kiek atsitiktinių skaiciu sugeneruoti. Funkcija turi gražinti atsitiktinių skaičių masyvą. Pademonstruoti funkcijos veikimą.
function parametrai($p1, $p2, $p3){
    $pp = [];
    for ($i=0; $i<$p3; $i++){
        $pp []= rand($p1, $p2);
    }
        return $pp;
}
var_dump (parametrai(2, 4, 3));
var_dump (parametrai(1, 5, 7));
var_dump (parametrai(8, 9, 6));
?>

<?php
//(7.6) 4.Sukurkite PHP skriptą, kuriame būtų aprašytas vienmatis skaičių masyvas. Masyvo kas antro elemento reikšmę cikle programiškai pakeiskite į 0.
$m = [2, 59, 4, 77, 88, 57];
function elementas($e){
        for ($i=0; $i<count($e); $i++){
                if($i % 2 == 0) $e[$i] = 0;
        }
    return $e;
}


var_dump ($m);
//var_export ($m);
//print_r ($m);
//echo json_encode ($m);
?>

<?php
//(9.5) 5. Sukurkite PHP skriptą, kuriame būtų aprašyta klasė “dviratis”, kuri turi savybes ‐ pavadinimas, kaina. Sukurkite standartinį klasės __construct metodą, kuriam perdavus du parametrus ‐ pavadinimas, kaina ‐ perduotus parametrus padėtų į savo savybes.          Panaudodami prieš tai sukurtą klasę dviratis, sukurkite klases moteriskas ir vyriskas, kurios paveldi dviratis klasę. dviratis klasę papildykite metodu “info”, kuris išvestų suformatuotą eilutę “pavadinimas, kaina”. moteriskas klasėje perrašykite metodą info, pakeisdami išvedamą eilutę į “pavadinimas, kaina: moteriskas”. moteriskas ‐ tiesiog paprastas žodis. vyriskas klasėje perrašykite metodą info, pakeisdami išvedamą eilutę į “pavadinimas, kaina: vyriskas”. vyriskas ‐ tiesiog paprastas žodis. Patkrinkite visų trijų klasių metodo “info” veikimą.

class dviratis{
    public $pavadinimas;
    public $kaina;
    function __construct($pav, $k){
        $this->pavadinimas = $pav;
        $this->kaina = $k;
    }
    function savybes(){
        $dvir = "Pavadinimas:%s, Kaina:%s";
        echo sprintf($dvir, $this->pavadinimas, $this->kaina);
    }
}
$param = new dviratis ('Trek', '2000');

var_dump($param);
//var_export ($param);
//print_r ($param);
//echo json_encode ($param);

class moteriskas extends dviratis{
    function klases(){
        $dvir2 = "Pavadinimas:%s, Kaina:%s, (Moteriskas)";
        return sprintf($dvir2, $this->pavadinimas, $this->kaina);
    }
}
$param2 = new moteriskas ('Corwin', '300');
var_dump($param2);
echo $param2->klases() . '<br>';

class vyriskas extends dviratis{
    function klases(){
        $dvir3 = "Pavadinimas:%s, Kaina:%s, (Vyriskas)";
        return sprintf($dvir3, $this->pavadinimas, $this->kaina);
    }
}
$param3 = new vyriskas ('Kona', '1000');
var_dump($param3);
echo $param3->klases() . '<br>';

?>

<?php
//(10.8) 6.Sukurkite PHP skriptą, kuriame aprašykime klasę numberList, kurioje būtų viena savybė ‐ $numbers, kuri bus masyvas, taip pat būtų metodas add($number), kuris prideda naują skaičių į masyvą sąvybę $numbers. Sukurkite metodą delMin(), kuris pašalina mažiausią masyve sąvybėje esantį skaičių. sukurkite funkciją getInfo(), kuris išveda skaičius esančius savybėje.




?>


<?php

//$m = [1,3,8,9];
//array_splice($m, 2,1) geresne funkcija nei pvz unset($m[2]) nes pvz 8 isbraukus is masyvo unset mes error.

?>













<?php
//Sukurkite PHP skripta, kuriame aprasykite klase auto, kurioje butu viena savybe . $sarasas. __construct metode suraskite 3 automobiliu duomenis asociatyvinio masyvo formoje. Duomenys: nuotrauka, gamintojas, modelis, metai, kaina, pastabos. Sukurkite metoda getList(), kuris isveda asociatyvinio masyvo duomenis HTML lenteles formoje. Sukurti egzemplioriu ir ivykdyti funkcija.

class auto{
    public $sarasas = [];

    function __construct(){
        $a = [['gamintojas'=>'Bmw', 'modelis'=>'750iL', 'metai'=>'1996', 'kaina'=>'5000'],
            ['gamintojas'=>'Audi', 'modelis'=>'RS7', 'metai'=>'2017', 'kaina'=>'100000'],
            ['gamintojas'=>'Zaz', 'modelis'=>'965', 'metai'=>'1960', 'kaina'=>'1000'],
            ['gamintojas'=>'Mercedes', 'modelis'=>'E350AMG', 'metai'=>'2015', 'kaina'=>'62000']
        ];
    }

    function getList(){
        echo '<table>';

        foreach ()
        for ($i = 0; $i < count($this->sarasas); $i++) {
            echo '<tr>';

             }
             echo '</tr>';
         }
         echo '<table>';
     }

}

$aa = new auto();
$aa->getList();

var_dump($aa);




?>