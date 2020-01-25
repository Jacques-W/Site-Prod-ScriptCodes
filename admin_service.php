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
    <title>ScriptCodes</title>
</head>
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
                <li class="nav-item active">
                    <a class="nav-link" href="services.php">Nos Services</a>
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
<section class="container-fluid py-5">
    <section class="container text-center text-light">
        <div class="row">
            <div class="col-md-12">
                <h1>Gestion des services proposés</h1>
            </div>
            <div class="col-md-12 py-5">
                <form method="post">
                    <label>Type de Service</label>
                        <input type="text" class="form-control" name="nomServiceGestion">

                </form>
            </div>
        </div>
    </section>
</section>
<footer>
    <section class="container text-center">
        <div class="row">
            <div class="col-md-12 text-center text-light">
                <p>© copyright 2020 - Tous droits r&eacute;serv&eacute;s &agrave; ScriptCodes - Propuls&eacute; par ScriptCodes</p>
            </div>
            <div class="col-md-4">
                <p><span id="logoFaceBook"><i class="fab fa-facebook"></i></span><a href="https://facebook.com/ScriCodes-106267850925400/" target="_blank"> ScriptCodes</a></p>
            </div>
            <div class="col-md-4">
                <p><span id="logoTwitter"><i class="fab fa-twitter"></i></span><a href="https:/twitter.com/ScriCodes" target="_blank"> ScriptCodes</a></p>
            </div>
            <div class="col-md-4">
                <p><span id="logoLinkedIn"><i class="fab fa-linkedin-in"></i></span><a href="https://www.linkedin.com/in/jacques-wickersheim-69b138192" target="_blank"> ScriptCodes</a></p>
            </div>
        </div>
    </section>
</footer>
</html>