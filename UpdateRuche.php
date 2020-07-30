<?php
include 'connexion_bdd.php';

if ($_POST['update']) {

    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];

    $req = $bdd->prepare("UPDATE ruches SET nom = :nom, latitude = :latitude, longitude = :longitude WHERE id = $id");
    $req->bindParam(':nom', $nom);
    $req->bindParam(':latitude', $latitude);
    $req->bindParam(':longitude', $longitude);

    $req->execute();

    header('Location: http://localhost/test_tallyos/ruches.php');
} else {
    header('Location: http://localhost/test_tallyos/ruches.php');
}