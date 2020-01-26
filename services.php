<!DOCTYPE html>
<html>
<?php include 'includes/functions.php';
include 'includes/head.php'; 
include 'includes/header.php';  ?>

<section class="container-fluid text-center text-light">
    <section class="container">
        <div class="row">
            <div class="col-md-12 py-5">
                <h1>Nos Services ainsi que la grille Tarifaire</h1>
            </div>
            <table class="table table-dark text-light">
                <thead>
                    <tr>
                        <th>Type de Service</th>
                        <th>Prestation</th>
                        <th>Prix (indicatif)</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $requeteAffichageService = $db->query('select * from services');
                    while ($affichageService = $requeteAffichageService->fetch()) {
                ?>
                    <tr>
                        <td><?php echo $affichageService['service'] ?></td>
                        <td><?php echo $affichageService['prestation'] ?></td>
                        <td><?php echo $affichageService['prix'] ?></td>
                    </tr>
                <?php
                    }
                ?>
                </tbody>
            </table>
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
</body>
</html>