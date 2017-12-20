<?php


function masina($a, $b, $c){
    return [
        "pavadinimas" => ucfirst(strtolower($a)),
        "marke" => ucfirst(strtolower($b)),
        "metai" => ucfirst(strtolower($c)),
    ];
}
$auto = masina ("Mercedes-Benz", "E350", "2010");



function isvedimas($d){
    $sablonas = " Vokiskos%s %s masinos %s";

    $pavadinimas = $d["pavadinimas"];
    $marke = $d["marke"];
    $metai = $d["metai"];


    $tekstas = "Vokiskos" . $d{"pavadinimas"} . ' ' . $d{"marke"} . 'masinos' . $d{"metai"};
    //$tekstas = sprintf($sablonas, $pavadinimas, $marke, $metai);

    return $tekstas;
}

$marke = [];

$marke []= masina ("Mercedes-Benz", "S600", "2010");
$marke []= masina ("Bmw", "750", "1998");
$marke []= masina ("Audi", "S8", "2012");

echo isvedimas ($marke[1]) . '</br>';
echo isvedimas ($marke[0]) . '</br>';
echo isvedimas ($marke[2]) . '</br>';


$mm = ['Mercedes-Benz' => 'S600', 'Bmw' => '750', 'Audi' => 'S8'];
sort($mm);
echo json_encode($mm) . '<br>';

function html($m){
    $sablonas = "<table>
    <tr>
        <td>%s</td><td>%s</td><td>%s</td>
    </tr>
    <tr>
        <td>%s</td><td>%s</td><td>%s</td>
    </tr>
    <tr>
        <td>%s</td><td>%s</td><td>%s</td>
    </tr>
</table>";

    $m1 = $m[2];
    $m2 = $m[1];
    $m3 = $m[0];


    $html = sprintf($sablonas,
        $m1 ['pavadinimas'], $m1['marke'], $m1['metai'],
        $m2 ['pavadinimas'], $m2['marke'], $m2['metai'],
        $m3 ['pavadinimas'], $m3['marke'], $m3['metai']

    );
    return $html;
}

echo html ($marke);


?>