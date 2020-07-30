Importer la bdd ruches.sql

Changer dans le fichier "CONNEXION_BDD.PHP", les informations liées :
    $bdd = new PDO('mysql:host=localhost;dbname=ruches;charset=utf8', 'USERNAME', 'MDP');

Le chemin en localhost :
http://localhost/test_tallyos/index.php
