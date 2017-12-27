<?php

$myfile = fopen("failas.txt", "w"); //w (meaning) - Open a file for write only. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
$txt = "Labas rytas";
fwrite($myfile, $txt);
fclose($myfile);

echo 'Irasyta<br>';

$myfile = fopen("failas.txt", "w");
$txt = "2017";
fwrite($myfile, $txt);
fclose($myfile);

echo 'Papildyta<br>';

if (!file_exists ('failai2')) {
    mkdir('failai2');
    echo 'dir-as sukurtas<br>';
}

rmdir('failai2');
echo 'dir-as pasalintas<br>';

copy('failas.txt', 'failai/failas.txt');
echo 'failas nukopijuotas<br>';

unlink( 'failai/failas.txt');
echo 'failas pasalintas<br>';

$a = scandir('.');//scandir paima visos direktorijos turini. Norint paimti elementa is esamo reikia prirasyti taska. Du taskai (..) reiskia grizima i aukstesni lygi

//var_export($a as $fn){
   foreach($a as $fn){
    echo $fn.'<br>';
}


?>