<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.boostrapcdn.com/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="css/main.css">
        <script src="https://kit.fontawesome.com/e6dde792b7.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E25Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
        <title>ScriptCodes</title>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="https://scricodes.com"><img src="images/logo.png" width="25%" alt=""></a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#barreNav" aria-expanded="false">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                <div class="collapse navbar-collapse" id="barreNav">
                    <ul class="navbr-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="https://scricodes.com/">Accueil</a>
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
        <section class="container-fluid">
            <section class="container text-center">
                <div class="row">
                    <div class="col-md-12 py-5">
                        <h1>Enregistrer un nouveau Client dans la base de donnée.</h1>
                    </div>
                    <div class="col-md-12 py-5">
                        <form method="post">
                            <label>Nom:</label>
                                <input type="text" class="form-control" name="nomClient">
                            <label>Prénom:</label>
                                <input type="text" class="form-control" name="prenomClient">
                            <label>Nom de l'entreprise:</label>
                                <input type="text" class="form-control" name="nomEntreprise">
                            <label>Siret:</label>
                                <input type="text" class="form-control" name="numSiret">
                            <label>Type de Site:</label>
                                <input type="text" class="form-control" name="typeSiteCommande">
                            <label>Facturé:</label>
                                <input type="text" class="form-control" name="factureClient" placeholder="facturé oui/non">
                            <button type="submit" class="btn btn-succes">Enregistrer le Client</button>
                        </form>
                    </div>
                </div>
            </section>
        </section>
        <footer class="container-fluid">
            <div class="row pt-5 my-5">
                <table class="table table-responsive">
                    <thead>
                        <tr>
                            <th>Numéro Client:</th>
                            <th>Nom Client:</th>
                            <th>Prénom Client:</th>
                            <th>Nom de l'entreprise:</th>
                            <th>Numéro de SIRET:</th>
                            <th>Type de Site commandé:</th>
                            <th>Client facturé:</th>
                        </tr>
                    </thead>
                    <tbody>
                                <?php
                                    $requeteAffichageBaseClient = $db->query('select base_client.numero_client, base_client.nom_client, base_client.prenom_client, base_client.nom_entreprise, base_client.num_siret, base_client.type_site, base_client.facture order by base_client.numero_client asc');
                                    while ($reponseBaseClient = $requeteAffichageBaseClient->fetch()){
                                ?>
                        <tr>
                            <td><?php echo $reponseBaseClient['numero_client'] ?></td>
                            <td><?php echo $reponseBaseClient['nom_client'] ?></td>
                            <td><?php echo $reponseBaseClient['prenom_client'] ?></td>
                            <td><?php echo $reponseBaseClient['nom_entreprise'] ?></td>
                            <td><?php echo $reponseBaseClient['num_siret'] ?></td>
                            <td><?php echo $reponseBaseClient['type_site'] ?></td>
                            <td><?php echo $reponseBaseClient['facture']</td>
                                <?php
                                    }
                                ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </footer>
    </body>
</html>