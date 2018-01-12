<?php
session_start();
if (!isset($_SESSION['pavadinimas'])) $_SESSION['pavadinimas'] = [];
$_SESSION['pavadinimas'][] = $_POST;
header('location: location:11-uzduotis.html');