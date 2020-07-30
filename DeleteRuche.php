<?php
include 'connexion_bdd.php';

if ($_POST['supp']) {

    $id = $_POST['id'];
    $req = $bdd->prepare('DELETE FROM ruches WHERE id = :id');
    $req->bindParam(':id', $id);
    $req->execute();

    header('Location: http://localhost/test_tallyos/ruches.php');

}