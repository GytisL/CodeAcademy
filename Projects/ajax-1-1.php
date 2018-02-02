<?php

echo $_POST["vardas"].'<br>' ;
echo $_POST["pavarde"] .'<br>';
echo $_POST["pastas"];


echo "Data:" . date('Y-m-d') . "<br>";

date_default_timezone_set("Europe/Vilnius");
echo "Dabartinis laikas" . date("h:i:sa");
?>