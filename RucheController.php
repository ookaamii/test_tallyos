<?php
include 'connexion_bdd.php';

if ($_POST['add']) {

    $nom = $_POST['nom'];
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];

    $req = $bdd->prepare("INSERT INTO ruches (nom, latitude, longitude) VALUES (:nom, :latitude, :longitude)");
    $req->bindParam(':nom', $nom);
    $req->bindParam(':latitude', $latitude);
    $req->bindParam(':longitude', $longitude);

    $req->execute();

    header('Location: http://localhost/test_tallyos/ruches.php');
} else {
    header('Location: http://localhost/test_tallyos/ruches.php');
}