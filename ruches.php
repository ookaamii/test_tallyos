<?php
include 'connexion_bdd.php';
?>

<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
     <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
     <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
     <link href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.bootstrap4.min.css" rel="stylesheet">
<link href="resources/css/style.css" rel="stylesheet">
    <title>Ruches</title>
</head>
<body>
<header>
    <nav class="navbar-expand-lg navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Company</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="index.php" id="accueil">Accueil</a>
                </li>
                <li class="nav-item">
                     <a class="nav-link" href="ruches.php" id="ruches">Ruches
                                           <?php
                                           $compt = $bdd->query("SELECT COUNT(id) AS 'nb' FROM ruches");
                                           $donnees = $compt->fetch();
                                           echo "<span class='nb_ruche'>" . $donnees['nb'] . "</span>";
                                           ?>
                                       </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="informations.php" id="infos">Informations</a>
                </li>
            </ul>
            <span class="navbar-text">
      Déconnexion
    </span>
        </div>
    </nav>
</header>

<section>
<button type="button" class="btn btn-success add-ruche">Ajouter une ruche</button>

<form method="post" class="form-add" action="RucheController.php">
<input type="text" placeholder="Nom de la ruche" name="nom" required />
<input type="text" placeholder="Latitude" name="latitude" required />
<input type="text" placeholder="Longitude" name="longitude" required />
<input type="submit" value="Ajouter" name="add" />
</form>

<table class="table table-striped table-ruches">
  <thead>
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Latitude</th>
      <th scope="col">Longitude</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>

  <?php
  $stmt = $bdd->prepare("SELECT * FROM ruches");
  if ($stmt->execute()) {
    while ($row = $stmt->fetch()) {
    echo "<tr><td>" . $row['nom'] . "</td><td>" . $row['latitude'] . "</td><td>" . $row['longitude'] . "</td><td class='inline'><a href='update.php?". $row['id'] . "'>Modifier </a>  / <form action='DeleteRuche.php' method='post'><input type='hidden' name='id' value='". $row['id'] . "'/><input type='submit' name='supp' value='Supprimer' id='supp'/></form></td></tr>";

     }
  }
  ?>

  </tbody>
</table>
</section>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script src="resources/js/script.js"></script>
</body>
</html>
