<?php

$xml = simplexml_load_file('automobiliai.xml');

$result = $xml->xpath('row');//result grazina rezultata i sarasa masyvo.

echo '<table>';
foreach($result as $rec){
    echo '<tr>';
    echo '<td>' . (string)$rec['id'] . '</td>';
    echo '<td>' . (string)$rec->gamintojas . '</td>';//istrina is kaires ir desines teksto tarpustrim pavercia i stringa(eilute)
    echo '<td>' . trim($rec->modelis) . '</td>';
    echo '<td>' . trim($rec->metai) . '</td>';
    echo '</tr>';
}

echo '</table>';

$result = $xml->xpath("row[@id='bmw']");
echo '<table>';
foreach($result as $rec) {
    echo '<tr>';
    echo '<td>' . (string)$rec['id'] . '</td>';
    echo '<td>' . (string)$rec->gamintojas . '</td>';
    echo '<td>' . trim($rec->modelis) . '</td>';
    echo '<td>' . trim($rec->metai) . '</td>';
    echo '</tr>';
}
echo '</table>';

echo htmlspecialchars($xml->asXML());





?>