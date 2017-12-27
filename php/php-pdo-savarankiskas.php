<?php

$cnn = new PDO('mysql:host=test.lt;dbname=test', 'root');
$sql = "select count(*) as cnt from auto";
$res = $cnn->query($sql);
while ($row=$res->fetch()){
    echo $row['cnt'].'<br>';
}

$res->closeCursor();

$sql = "select * from auto where 
aut_kaina>3000";
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