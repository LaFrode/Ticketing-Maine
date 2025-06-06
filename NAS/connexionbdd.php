<?php
try
{
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=localhost;dbname=nas', 'root', '', $pdo_options);
    $bdd->exec("SET NAMES utf8");
    
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}




?>