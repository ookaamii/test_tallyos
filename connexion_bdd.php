<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=ruches;charset=utf8', 'USERNAME', 'MDP');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
