<?php
session_start();

$_SESSION['user'] = 'username';

if ($_SESSION['user'] == 'username'){
    $_SESSION['iframe'] = true;
}

//echo '<pre>';
//var_dump($_SESSION);
//echo '</pre>';



require 'index.view.php';
