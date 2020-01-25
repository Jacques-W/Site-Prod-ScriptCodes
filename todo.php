<?php
    include 'includes/fonctions_todo.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://kit.fontawesome.com/e6dde792b7.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E25Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="index.php">ScriptCodes</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#barreNav" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="barreNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="services.php">Nos Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="productions.php">Nos Productions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="propos.php">A Propos de Nous</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="equipe.php">Notre Equipe</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<section class="container-fluid text-center text-light py-5">
    <section class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Gestion des Tâches</h1>
                    <hr class="mr-2">
                <p class="lead">Vous pouvez ici mettre toutes les choses à effectuer par date et priorité.</p>
            </div>
            <div class="col-md-12 py-5">
                <h5>Formulaire</h5>
                    <form method="post">
                        <label>Nom</label>
                        <input class="form-control" type="text" name="nomAuteur">
                        <label>Prénom</label>
                        <input class="form-control" type="text" name="prenomAuteur">
                        <label>Client</label>
                        <input class="form-control" type="text" name="client">
                        <label>Travail à effectuer</label>
                        <input class="form-control" type="text" name="travailAFaire">
                        <label>Date de création de la tâche</label>
                        <input class="form-control" type="text" name="dateTache">
                        <label>Priorité de la Tâche</label>
                        <select class="form-control" name="prioriteTache">
                            <option class="disabled">Selectionner la priorité</option>
                            <option>Basse</option>
                            <option>Moyenne</option>
                            <option>Haute</option>
                        </select>
                        <button type="submit" class="btn btn-success mt-2">Valider</button>
                    </form>
            </div>
                <hr class="my-5">
            <div class="col-md-12">
                <h2>Tâches à effectuer:</h2>
            </div>
            <div class="col-md-12">
                    <?php
                    $requete = $db->query('select * from todo');
                    while ($resultat = $requete->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                <div class="jumbotron bg-dark">
                    <h5 class="display-4"><?php echo $resultat['nom_auteur']." ".$resultat['prenom_auteur'] ?></h5>
                    <p class="lead"><?php echo $resultat['client']." ".$resultat['date_tache']." ".$resultat['priorite'] ?></p>
                    <hr class="my-2">
                    <p><?php echo $resultat['tache'] ?></p>
                </div>
                    <?php
                        }
                    ?>
            </div>
        </div>
    </section>
</section>
<footer>
    <section class="container text-center">
        <div class="row">
            <div class="col-md-12 text-center text-light">
                <p>© copyright 2020 - Tous droits réservés à ScriptCodes - Propulsé par ScriptCodes</p>
            </div>
            <div class="col-md-4 text-center text-light">
                <p><span id="logoFaceBook"><i class="fab fa-facebook"></i></span><a href="https://facebook.com/ScriCodes-106267850925400/" target="_blank"> ScriptCodes</a></p>
            </div>
            <div class="col-md-4 text-center text-light">
                <p><span id="logoTwitter"><i class="fab fa-twitter"></i></span><a href="https://twitter.com/ScriCodes" target="_blank"> ScriptCodes</a></p>
            </div>
            <div class="col-md-4 text-center text-light">
                <p><span id="logoLinkedIn"><i class="fab fa-linkedin-in"></i></span><a href="https://www.linkedin.com/in/jacques-wickersheim-69b138192" target="_blank"> ScriptCodes</a></p>
            </div>
        </div>
    </section>
</footer>
</body>
</html>