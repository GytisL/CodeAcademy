<?php

//1.Sukurti PHP skripta , kuriame butu aprasyti du kintamieji ir ekrane butu isvestas tu kintamuju skirtumo saknis

$c=8;
$d=6;

$e = sqrt($c-$d);

echo $e . '<br>';

?>


<?php

//2.Sukurti PHP skripta, kuriame butu aprasytas masyvas, aprasantis tris automobilius, kuriu kiekvienas yra aprasytas asociatyviniu masyvu naudojant raktus. Asociatyviniuose masyvuose turi buti laukeliai: gamintojas, modelis, pagaminimo metai, galingumas.

$f = [["Gamintojas'=>'Audi_AG", "Modelis"=>"Audi_A6", "Pagaminimo_metai"=>"2009", "Galingumas"=>"227_AG"],
    ["Gamintojas'=>'Audi_AG", "Modelis"=>"Mazda6", "Pagaminimo_metai"=>"2008", "Galingumas"=>"140_AG"],
    ["Gamintojas'=>'Audi_AG", "Modelis"=>"Mercedes-Benz_E350", "Pagaminimo_metai"=>"2012", "Galingumas"=>"231_AG"]
];

var_dump($f);


?>


<?php

//3.Sukurti PHP skripta, kuriame butu aprasyta funkcija, kuriai padavus tris parametrus - tekstus, funkcija turi grazinti rezultata formatuota teksta. Teksto formatavimui naudoti sablona.

function parametrai3($pa1, $pa2, $pa3){
    $p = "Sriuba: %s, Antras_patiekalas: %s, Desertas: %s";
    return sprintf($p, $pa1, $pa2, $pa3);
}

$r = parametrai3('Sultinys', 'Mesa', 'Sokoladinis_tortas');

echo $r . '<br>';

?>






<?php

//4.Sukurkite PHP skriptą, kuriame būtų aprašytas tekstas sudarytas iš žodžių. Suskaidykite tekstą į žodžius ir sukelkite į masyvą. Panaudodami for ciklą ‐ pakeiskite visus masyvo elementus ‐ paversdami tekstą mažosiomis raidėmis, pirmą raidę - didžiąja. Sujunkite visus masyvo elementus į vieną teksto eilutę sujungdami juos vertikaliais '|' brūšniais.

$m = "ŽALI PUSYNELIAI BERZYNAI MELSVI-EZERAI";

$m1 = explode(" ",$m);//gausis ['ŽALI', 'PUSYNELIAI', 'BERZYNAI', 'MELSVI-EZERAI']


for($z=0; $z<count($m1); $z++){
    $m1[$z] = ucwords(strtolower($m1[$z]));
}

$m2 = implode('|' , $m1);//gausis "ŽALI, PUSYNELIAI, BERZYNAI, MELSVI-EZERAI"

echo $m2;


?>



<?php

//5.Sukurkite PHP skriptą, kuriame būtų aprašyta klasė “codeAcademy”, kuri turi savybes ‐ data, skaicius, auditorija.Sukurkite standartinį klasės __construct metodą, kuriam perdavus tris parametrus ‐ data, skaicius,auditorija ‐ perduotus parametrus padėtų į savo savybes.

class codeAcademy1{
    public $data;
    public $skaicius;//public(savybe) gali but ir public $x=1; private $m = [];
    public $auditorija;
    function __construct($d, $sk, $aud){
        $this->data = $d;
        $this->skaicius = $sk;
        $this->auditorija = $aud;
    }
    function savybes(){
        $c = "Data: %s, Skaicius: %s, Auditorija";
        return sprintf($c, $this->data, $this->skaicius, $this->auditorija);
    }
}

$pa = new codeAcademy1('2018-01-03', '8', '3');
$pa = new codeAcademy1('2018-01-04', '5', '2');

var_dump($pa);
echo $pa->savybes() . '<br>';

?>

<?php

//6.Panaudodami prieš tai sukurtą klasę codeAcademy, sukurkite klases backend ir frontend, kurios paveldi codeAcademy klasę. codeAcademy klasę papildykite metodu “kursas”, kuris išvestų suformatuotą eilutę “data, skaicius, auditorija”. backend klasėje perrašykite metodą duomenys, pakeisdami išvedamą eilutę į “data, skaicius, auditorija (backend kursas)”. backend kursas ‐ tiesiog paprastas žodis. frontend klasėje perrašykite metodą duomenys, pakeisdami išvedamą eilutę į “data, skaicius, auditorija (frontend kursas)”. frontend kursas ‐ tiesiog paprastas žodis. Patikrinkite visų trijų klasių metodo “kursas” veikimą.

class codeAcademy{
    public $data;
    public $skaicius;//public(savybe) gali but ir public $x=1; private $m = [];
    public $auditorija;
    public $kursas;
    function __construct($d, $sk, $aud, $kurs){
        $this->data = $d;
        $this->skaicius = $sk;
        $this->auditorija = $aud;
        $this->kursas = $kurs;
    }
    function savybes(){
        $c = "Data: %s, Skaicius: %s, Auditorija, Kursas %s";
        return sprintf($c, $this->data, $this->skaicius, $this->auditorija, $this->kursas);
    }
}

$pa = new codeAcademy('2018-01-03', '8', '3', '1');

var_dump($pa);
echo $pa->savybes() . '<br>';

class backend extends codeAcademy{
    function duomenys (){
        $d = "Data: %s, Skaicius: %s, Auditorija: %s, (backend kursas)";
        return sprintf($d, $this->data, $this->skaicius, $this->auditorija);
    }
}

$pa2 = new backend('2018-01-03', '8', '3', '2');

echo $pa2->duomenys() . '<br>';

class frontend extends codeAcademy{
    function duomenys (){
        $d = "Data: %s, Skaicius: %s, Auditorija: %s, (frontend kursas)";
        return sprintf($d, $this->data, $this->skaicius, $this->auditorija);
    }
}

$pa2 = new frontend('2018-01-03', '8', '3', '3');

echo $pa2->duomenys() . '<br>';

?>


<?php

//7.Sukurkite PHP skriptą, kuriame aprašykime klasę rndList, kurioje būtų viena savybė ‐ $numbers, kuri bus masyvas, taip pat būtų metodas generate(), kuris sugeneruoja atsitiktini skaičių ir padeda į masyvą sąvybę $numbers. Taip pat sukurkite metodą list(), kuris surikiuoja masyve esančius skaičius ir išveda juos su echo atskiriant vieną nuo kito tarpais.

class rndList{
    public $numbers = [];
    function generate(){
        $sk = rand(0,8);
        $this->numbers []=$sk;
    }
    function sarasas(){
        sort($this->numbers);
        for($i=0; $i<count($this->numbers); $i++);
            echo $this->numbers[$i] . ' ';
    }
}

$objektas = new rndList();
$objektas->generate();
$objektas->generate();
$objektas->generate();
$objektas->generate();
echo $objektas->sarasas();

?>