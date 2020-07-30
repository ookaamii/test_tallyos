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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="resources/css/style.css" rel="stylesheet">
    <title>Ruches</title>
</head>
<body>
<header>
    <nav class="navbar-expand-lg navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Company</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
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

<section class="section-accueil">
    <div class="container">
        <row class="row">
            <div class="col-lg-8 col-sm-12">
                <form method="post">
                    <div class="flex">
                        <div class="photo"></div>
                        <div class="form-message">
                            <label>Template name</label>
                            <input type="text" name="template_name" class="input_accueil"/>
                            <label>Subject</label>
                            <input type="text" name="template_name" class="input_accueil"/>
                        </div>
                    </div>

                    <label>Message</label>
                    <textarea></textarea> <br/><br/>
                    <label>Message Type</label>
                    <select name="type_message">
                        <option value="email_push">Email + Push</option>
                    </select>
                    <br/><br/>
                    <label>Send to group</label>
                    <div class="inline">
                        <input type="checkbox" id="management" name="management">
                        <label for="management">Top Management</label>
                    </div>
                    <div class="inline">
                        <input type="checkbox" id="marketing" name="marketing">
                        <label for="marketing">Marketing Departement</label>
                    </div>
                    <div class="inline">
                        <input type="checkbox" id="design" name="design">
                        <label for="design">Design Departement</label>
                    </div>
                    <div class="inline">
                        <input type="checkbox" id="financial" name="financial">
                        <label for="financial">Financial Departement</label>
                    </div>
                    <div class="inline">
                        <input type="checkbox" id="supply" name="supply">
                        <label for="supply">Supply Departement</label>
                    </div>
                    <br/>
                    <input type="submit" class="btn btn-info btn-valider" name="valider" value="Valider"/>
                    <button type="button" class="btn btn-light btn-annuler">Annuler</button>
                </form>
                <br/><br/>
            </div>

            <div class="col-lg-4 col-sm-12">
                <div class="thumbnail-block">
                    <img src="resources/images/fond.jpg" class="thumbnail img-fluid"/>
                    <h3>Thumbnail label</h3>
                    <p>blablabla</p>
                    <button type="button" class="btn btn-info">Button</button>
                    <button type="button" class="btn btn-light">Button</button>
                </div>
                <br/>

                <label>Tap Target</label>
                <select name="tap_target" class="select-target">
                    <option value="profile_screen">Profile screen</option>
                </select><br/><br/>

                <label>Set Type</label>
                <div>
                    <input type="radio" id="news" name="set" value="news"
                           checked>
                    <label for="news" class="btn-success set">New</label>
                </div>

                <div>
                    <input type="radio" id="reports" name="set" value="reports">
                    <label for="reports" class="btn-primary set">Reports</label>
                </div>

                <div>
                    <input type="radio" id="documents" name="set" value="documents">
                    <label for="documents" class="btn-warning set">Documents</label>
                </div>

                <div>
                    <input type="radio" id="media" name="set" value="media">
                    <label for="media" class="btn-info set">Media</label>
                </div>

                <div>
                    <input type="radio" id="test" name="set" value="test">
                    <label for="test" class="btn-secondary set">Test</label>
                </div>
                <br/>

                <button type="button" class="btn btn-danger btn-supp">Supprimer</button>
                <br/><br/>
            </div>
        </row>
    </div>


</section>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="resources/js/script.js"></script>
</body>
</html>
