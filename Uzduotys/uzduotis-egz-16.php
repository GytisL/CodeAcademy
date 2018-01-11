<?php

//(01-last.html) 1. Sukurkite HTML dokumentą, kuris turėtų antraštę : “PHP kursai”, taip pat turėtų pastraipą kurioje būtų išgalvotas tekstas apibūdinans PHP kursus, bei lentelė 4x4 su išgalvotomis kursų datomis.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lentele</title>
<style>
    .lentele-4x4, th, td{
        border-collapse: collapse;
        border: 1px #dddddd solid;
    }
</style>
</head>
<body>
<h1>PHP kursai</h1>
<p>Menesio kursai</p>
<table class="lentele-4x4">
    <tr>
        <th>Nr.</th>
        <th>Data</th>
        <th>Tema</th>
        <th>Pastabos</th>
    </tr>
    <tr>
        <td>1</td>
        <td>2018-01-02</td>
        <td>Kursai1</td>
        <td>Kursai2</td>
    </tr>
    <tr>
        <td>2</td>
        <td>2018-01-03</td>
        <td>Kursai2</td>
        <td>Kursai3</td>
    </tr>
    <tr>
        <td>3</td>
        <td>2018-01-04</td>
        <td>Kursai4</td>
        <td>Kursai5</td>
    </tr>
    <tr>
        <td>4</td>
        <td>2018-01-05</td>
        <td>Kursai6</td>
        <td>Kursai7</td>
    </tr>
</table>



<?php

//(02-last.html) 2. Sukurkite HTML dokumentą, kurio <head> skiltyje būtų aprašytas stilius. Visas dokumento fonas ‐ paveikslėlis, teksto dydis 24px ir silver spalva. Dokumente turėtų būti išvesta 4x4 lentelė sudaryta iš <div> elementų, t.y. div langeliai ‐ div eilutėse, o šios ‐ pagrindiniam div elemente. Eilutės lentelėje turi būti su paraštėmis 10px, langeliai lentelėse savo ruožtu taip pat su 10px paraštėmis. Langelių fono spalva turi būti green spalva.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        body{
            background-image: url('/images/Paveiksliukas.png');
            background-size: 100%;
            font-size: 24px;
            color: silver;
        }
        .table{display: table; border-spacing: 0px 5px;;}
        .row{display: table-row; padding: 10px;}
        .cell{
            display: table-cell;
            padding: 10px;
            background-color: green;
        }
    </style>
</head>
<body>
<div class="table">
    <div class="row">
        <div class="cell">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
        <div class="cell">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
        <div class="cell">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
        <div class="cell">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
    </div>
    <div class="row">
        <div class="cell">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
        <div class="cell">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
        <div class="cell">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
        <div class="cell">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
    </div>
    <div class="row">
        <div class="cell">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
        <div class="cell">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
        <div class="cell">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
        <div class="cell">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
    </div>
    <div class="row">
        <div class="cell">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
        <div class="cell">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
        <div class="cell">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
        <div class="cell">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
    </div>
</div>
</body>
</html>







<?php
//(03-last.html) 3. Sukurkite HTML dokumentą panaudodami Bootstrap karkasą. Dokumente turi būti dvi eilutės, kuriose yra 3 stulpeliai, kurių kiekviename ‐ po nuorodą į puslapius internete. nuorodų spalvos ‐ raudona, žalia ir mėlyna. Uždėti borderius ant stulpelių.
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col border-success"><button type="button" class="btn btn-danger"><a href="https://www.google.lt/"><span style="color:white">Google</span></a></button></div>
        <div class="col border-success"><button type="button" class="btn btn-success"><a href="https://www.15min.lt/"><span style="color:white">15min</span></a></button></div>
        <div class="col border-success"><button type="button" class="btn btn-primary"><a href="https://www.delfi.lt/"><span style="color:white">Delfi</span></a></button></div>
    </div>
    <div class="row">
        <div class="col border-success"><button type="button" class="btn btn-danger"><a href="https://www.lrytas.lt/"><span style="color:white">Lrytas</span></a></button></div>
        <div class="col border-success"><button type="button" class="btn btn-success"><a href="http://kaunas.kasvyksta.lt/"><span style="color:white">Kas Vyksta Kaune</span></a></button></div>
        <div class="col border-success"><button type="button" class="btn btn-primary"><a href="http://kauno.diena.lt/"><span style="color:white">Kauno diena</span></a></button></div>
    </div>
</div>
</body>
</html>




<?php
//(04-last.php) 4. Sukurkite PHP skriptą, kuriame būtų aprašyti du kintamieji ir ekrane būtų išvestas tų kintamųjų dešimtainių logaritmų suma.

$x = 2;
$y = 3;

$z = log10($x)+log10($y);

echo $z . '<br>';
?>


<?php
//(05-last.php) 5.Sukurkite PHP skriptą, kuriame būtų aprašytas vienmatis masyvas, aprašantis vieną šalį naudojant vardinius raktus, pavyzdžiui “šalis” => “Lietuva”. Masyve turi būti laukeliai ‐ šalis, sostinė, gyventojų skaičius, plotas.

$a = ['salis'=>'Lietuva', 'gyventojuSkaicius'=>'2872000', 'plotas'=>'65300km2'];

var_dump($a);
//print_r($a);


?>




<?php
//(06-last.php) 6. Sukurkite PHP skriptą, kuriame būtų aprašyta funkcija, kuriai padavus du parametrus ‐ skaičius, funkcija turi grąžinti rezultatą ‐ visų paduotų parametrų kvadratų sumą padaugintą iš pi.


function parametrai4($sk1, $sk2){
    return ($sk1**2 + $sk2**2)*pi();
}

echo parametrai4(3,4) . '<br>';
?>

<?php

//(07-last.php) 7. Sukurkite PHP skriptą, kuriame būtų aprašytas vienmatis masyvas iš 3 elementų ‐ teksto eilučių. Panaudodami foreach ciklą ‐ pakeiskite visus masyvo elementus ‐ paversdami tekstą mažosiomis raidėmis.

$el = ['LABAS', 'RYTAS', 'VISIEMS'];

$i=0;
foreach ($el as $keit){
    $el[$i++] = strtolower($keit);
}

print_r($el);

?>



<?php
//(08-last.php) 8. Sukurkite PHP skriptą, kuriame būtų aprašyta klasė “salis”, kuri turi savybes ‐ pavadinimas, sostine, gyventojai. Sukurkite standartinį klasės __construct metodą, kuriam perdavus tris parametrus ‐ pavadinimas, sostine, gyventojai ‐ perduotus parametrus padėtų į savo savybes.

class salis{
    public $pavadinimas;
    public $sostine;
    public $gyventojai;
    function __construct($pa, $so, $gy){
        $this->pavadinimas = $pa;
        $this->sostine = $so;
        $this->gyventojai = $gy;
    }
}
$paramet = new salis('Lietuva', 'Vilnius', '2872000');

var_dump($paramet);

?>

<?php

//(09-last.php) 9. Panaudodami prieš tai sukurtą klasę salis, sukurkite klases vakaru_salis ir rytu_salis, kurios paveldi salis klasę. Salis klasę papildykite metodu “informacija”, kuris išvestų suformatuotą eilutę “šalis, sostinė, gyventojai”. rytu_salis klasėje perrašykite metodą informacija, pakeisdami išvedamą eilutę į “šalis, sostinė, gyventojai (Rytų šalis)”. Rytų šalis ‐ tiesiog paprastas tekstas.

class salis11{
    public $pavadinimas;
    public $sostine;
    public $gyventojai;
    function __construct($pa, $so, $gy){
        $this->pavadinimas = $pa;
        $this->sostine = $so;
        $this->gyventojai = $gy;
    }
    function informacija(){
        $format = "Pavadinimas: %s, Sostine: %s, Gyventojai: %s";
        echo sprintf($format, $this->pavadinimas, $this->sostine, $this->gyventojai);
    }
}

$sal = new salis11 ('Lietuva', 'Vilnius', '2872000');
//var_dump($sal);
echo $sal->informacija() . "<br>";

class rytu_salis extends salis11{
    function informacija(){
        $format = "Pavadinimas: %s, Sostine: %s, Gyventojai: %s (Rytu salis)";
        echo sprintf($format, $this->pavadinimas, $this->sostine, $this->gyventojai);
    }
}

$sal = new rytu_salis ('Kinija', 'Pekinas', '1379000000');
//var_dump($sal);
echo $sal->informacija() . "<br>";

class vakaru_salis extends salis11{
    function informacija(){
        $format = "Pavadinimas: %s, Sostine: %s, Gyventojai: %s (Vakaru salis)";
        echo sprintf($format, $this->pavadinimas, $this->sostine, $this->gyventojai);
    }
}

$sal = new vakaru_salis ('Vokietija', 'Berlynas', '81500000');
//var_dump($sal);
echo $sal->informacija() . "<br>";

?>

<?php
//(10-last.php) 10. Sukurkite PHP skriptą, kuriame aprašykime klasę countryList, kurioje būtų viena savybė ‐ $countries, kuri bus masyvas, taip pat būtų metodas insert($country), kuris papildo savybę $countries nauja šalimi. Taip pat sukurkite metodą average(), kuris grąžintų masyve sąvybėje esančių šalių pavadinimų ilgio matematinį vidurkį.

class countryList {
    public $countries = [];
    function insert($country){
        $this->countries[] = $country;
    }
    function average(){
        $sum = 0;
        $Nsalis = 0;
        for ($i=0; $i<count($this->countries); $i++){
                $Nsalis++;
                $sum += strlen($this->countries[$i]);

        }
        return $sum / $Nsalis;
    }
}
$x = new countryList();
$x->insert('Lietuva');
$x->insert('Kinija');
$x->insert('Vokietija');
$x->insert('Danija');
$x->insert('Norvegija');
echo $x->average();
?>






<?php
//(11-last-frontend.html) 11. Sukurkite HTML dokumentą su įvedimo formą. Forma turėtu turėti laukus : 2x tekstiniai laukai: Šalies pavadinimas, sostinės pavadinimas, 1x radio pasirinkimas: Šalies tipas vakarų, rytų. Forma turėtu būti nusiųsta į 11-last-backend.php failą metodu POST. 11-last-backend.php faile pridėkite įrašą į sesiją ir redirectinkite vartotoją atgal į įvedimo formos html dokumentą.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>11-last-frontend.html</title>
</head>
<body>
<form method="post" action="11-backend.php">
    <label>Šalies pavadinimas</label><input type="text" name="pavadinimas"><br>
    <label>Sostinės pavadinimas</label><input type="text" name="kodas"><br>
    <input type="radio" value="vakaru"> Vakaru
    <input type="radio" value="rytu"> Rytu
    <input type="submit" value="Siųsti">
</form>
</body>
</html>










<?php
//(12-last.txt) 12. Užduotis: "Tarkime turime lentelę duomenų bazėje ‘salys’ su laukais ‘id, salis, sostine, gyventojai’. Parašykite SQL užklausą gauti visus duomenis apie 3 šalis, turinčias daugiausiai gyventojų"

$cnn = new PDO('mysql:host=test.lt;dbname=test', 'root', '');
$res = $cnn->query('select sal_id, sal_salis, sal_sostine, sal_gyventojai from salys order by sal_gdata asc limit 0,3');





?>
</body>
</html>







