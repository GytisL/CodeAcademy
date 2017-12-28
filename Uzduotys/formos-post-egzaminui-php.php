<?php

session_start();

if(!isset($_SESSION['postoInfo']))
    $_SESSION['postoInfo'] = $_POST;

print_r($_POST);
//header('Location: http://test.lt/php/formos-post-egzaminui-html.html');

?>