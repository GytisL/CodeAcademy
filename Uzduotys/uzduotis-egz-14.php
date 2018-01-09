<?php
//egzamine sitos uzduoties nebus
//(10.7)8.Sukurkite PHP skriptą, kuriame aprašykite klasę lentele, kurioje būtų viena savybė ‐ $table, kuri bus dvimatis masyvas, taip pat būtų metodas add, kurio parametras yra 3 skaičių masyvas. Patalpinti gautą masyvą į savybės %table masyvą. Sukurkite metodą get(),kuris paskaičiuoja kiekvienoje lentelės eilutėje esančių elemntų vidurkį ir jų patalpina į eilutės pabaigą. Išvesti savybės $table masyvą HTML lentele. Pademonstruokite veikimą.

class lentele {
    public $table = [];
    function add($m){
        $s=0;
        foreach($m as $number){
            $s += $number;
        }
        $m[] = $s / count($m);//skaiciuojamas vidurkis irpatalpinamas i eilutes pabaiga
        $this->table[] = $m;
    }
    function get(){
        echo '<table>';
        for ($i=0; $i<count($this->table); $i++){
            echo '<tr>';
            for ($j=0; $j<count($this->table[$i]); $j++){
                echo '<td>' . $this->table[$i][$j] . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
    }
}
$a = new lentele();
$a->add([1,2,5]);
$a->add([6,66,55]);
$a->add([8,88,888]);
$a->get();
?>

<?php
//(9.4) 9. Sukurkite klasę diagnostika. Klasės savybė - $duomenys - asociatyvimis masyvas, kuriame yra diagnostikos pranesimai apie klaidas: raktas => tekstas (angliškas). Padaryti funkcija, kuri pagal kodą (funkcijos parametras) gražina klaidos pranešimo tekstą. Sukurti lituanizuotą diagnostikos klasę diagnostika_lt, kuri paveldi klasę diagonostika ir turi kitą diagnostikos pranešimų masyvą (pakeičiantį originalą), kur kodai yra tie patys, o tekstai - lietuviški. Išbandyti abi klases kreipiantis į funkciją tuo pačiu kodu. Jeigu kodo masyve nėra, tai reikia gražinti pranešimą "Code not found" ("Kodas nerastas").

?>