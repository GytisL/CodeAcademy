
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
function svecias($vardas, $pavarde, $maistas){
    return [
        'vardas' => ucfirst(strtolower($vardas)),
        'pavarde' => ucfirst(strtolower($pavarde)),
        'maistas' => ucfirst(strtolower($maistas))
    ];

}

$sv = svecias ('Jonas', 'Petras', 'Antanas');
//var_dump($sv);


$sveciai = [];
$s = svecias('Juozas', 'Juozaitis', ' Zuvis');
//print_r($s);
$raktas = strtolower($s['vardas']) . strtolower($s['pavarde']); // juozasjuozaitis
$sveciai[$raktas] = $s;

//var_dump($sveciai);



$s = svecias('Antanas', 'Antanaitis', ' Mesa');
$raktas = strtolower($s['vardas']) . strtolower($s['pavarde']); // juozasjuozaitis
$sveciai[$raktas] = $s;
//var_dump($sveciai);



$s = svecias('Petras', 'Petraitis', ' Sriuba');
$raktas = strtolower($s['vardas']) . strtolower($s['pavarde']); // juozasjuozaitis
$sveciai[$raktas] = $s;

//var_dump($sveciai);

ksort($sveciai);
//print_r($sveciai);

function eilute($svecias){
    //return"<tr><td>{$svecias['vardas']}</td><td>{$svecias['pavarde']}</td></td>{$svecias['maistas']}</td</tr>tr>";
    return"<tr><td>".$svecias['vardas']."</td><td>".$svecias['pavarde']."</td></td>".$svecias['maistas']."</td</tr>";
    }
?>
<table>
<?php

foreach($sveciai as $s=>$s_svecias){
    echo eilute($s_svecias);
}

?>

</table>

</body>
</html>

