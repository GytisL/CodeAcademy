<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php

$asmenys = [
    [
        'vardas' => 'Jonas',
        'pavarde' => 'Jonaitis',
        'maistas' => 'Mesa',
        'lytis' => 'Vyras'
    ],
    [
        'vardas' => 'Tomas',
        'pavarde' => 'Tomaitis',
        'maistas' => 'Zuvis',
        'lytis' => 'Vyras'
    ],
    [
        'vardas' => 'Ona',
        'pavarde' => 'Ona',
        'maistas' => 'Salotos',
        'lytis' => 'Moteris'
    ],
];
function getInfo($zmones){
    $s = '';
    $s .= '<td>' . $zmones['vardas'] . '</td>';
    $s .= '<td>' . $zmones['pavarde'] . '</td>';
    $s .= '<td>' . $zmones['maistas'] . '</td>';
    $s .= '<td>' . $zmones['lytis'] . '</td>';
    return $s;
}

?>

<table>
    <tr>
        <th>Nr.</th>
        <th>Vardas</th>
        <th>Pavarde</th>
        <th>Maistas</th>
        <th>Lytis</th>
    </tr>

    <?php
    $nr = 1;
    foreach($asmenys as $zmones){
        echo'<tr>';
        echo '<td>' . $nr++ . '</td>';
        echo getInfo($zmones);
        echo'</tr>';
    }
?>