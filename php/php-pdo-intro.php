<?php


//is phpMyAdmin iskelia duomenu baze i lentele
$cnn = new PDO('mysql:host=test.lt;dbname=test', 'root');//pirma eilute yra connection. Jis sukuria rysi su duomenu baze
$sql = "select count(*) as cnt from auto";
$res = $cnn->query($sql);
while ($row=$res->fetch()){
    echo $row['cnt'].'<br>';//asosciatyvinis ir pagal pozicija, nes galima vietojs 'cnt' ideti ir nuli [0]
    //var_export($row);
}

$res->closeCursor();//uzdaro paieskos rezultato sriti

$sql = "select * from auto";
$res = $cnn->query($sql);
echo '<table>';
while ($row=$res->fetch()) {
    echo '<tr>';
    echo '<td>' . $row['aut_gamintojas'] . '</td>>';
    echo '<td>' . $row['aut_modelis'] . '</td>>';
    echo '<td>' . $row['aut_metai'] . '</td>>';
    echo '<td>' . $row['aut_kaina'] . '</td>>';
    echo '</tr>';
}
echo '</table>';
$res->closeCursor();

?>