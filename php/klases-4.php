<?php
session_start();

//surista su clasemis asmuo.php ir svecias.php

//kiekviena klase atskiras failas
include "class/asmuo.php";
include "class/svecias.php";//2 klase extendina pirma klase

$asmuo = new asmuo('jonas', 'jonaitis', 20);
var_dump ($asmuo);

$svecias = new svecias('antanas', 'jonaitis', 20, 'mesa'); //atsakyme tvarka issimaiso
var_dump ($svecias);
echo json_encode($svecias) . '<br>';
echo serialize($svecias) . '<br>';//issaugojimas faile automatiskai sistemos budu is failo
$x = serialize($svecias);// i $x ateina teksta
$y = unserialize($x); //$y is teksto pasidaro objektas

//$_SESSION['asmuo'] = $x;//raktas - asmuo.  i klases-4x irasom $svecias = unserialize($_SESSION['asmuo']); //budas nenaudojant duomenu baziu perkelti klases. $_SESSION['asmuo'] Demontsracija kaip veikia

var_dump($y);

if (isset($_SESSION['cnt'])){
    $cnt = $_SESSION['cnt'];
    $cnt++;
    $_SESSION['cnt'] = $cnt;
    //$session['cnt']++
}

else $_SESSION['cnt'] = 1;//isjungus ir ijungus narsykle is naujo visi skaiciavimai prasides nuo nulio. $_SESSION['asmuo'] Demontsracija kaip veikia
echo 'cnt:' . $_SESSION['cnt'] . '<br>';//$_SESSION butina is didziuju raidziu. $_SESSION['asmuo'] Demontsracija kaip veikia



?>