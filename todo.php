<!DOCTYPE html>
<html>
	<?php 
	   include 'includes/fonctions.php';
	?>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
	
	<title>ScriptCode Intranet Staff</title>
</head>
<body>
	<section class="container-fluid">
		<section class="container">
			<nav class="navbar navbar-expand-lg navbar-light">
  				<a class="navbar-brand" href="#">Navbar</a>
  					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#barreNavigation" 
  						aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    					<span class="navbar-toggler-icon"></span>
  					</button>
			<div class="collapse navbar-collapse" id="barreNavigation">
				<ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="https://scricodes.com">Accueil</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="services.php">Nos Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="productions.php">Nos Productions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="propos.php">A propos de Nous</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="equipe.php">Notre équipe</a>
                    </li>
                </ul>
              </div>
            </nav>
		</section>
	</section>
	<section class="container-fluid">
		<section class="container text-center">
			<div class="row">
				<div class="col-md-12">
					<form method="post">
						<label>Nom</label>
							<input type="text" class="form-control" name="nom" required>
						<label>Pr&eacute;nom</label>
							<input type="text" class="form-control" name="prenom" required>
						<label>Tache &agrave; effectuer</label>
							<input type="text" class="form-control" name="tache" required>
						<label>Date de cr&eacute;ation</label>
							<input type="text" class="form-control" name="dateTache" required>
						<label>Priorit&eacute;</label>
							<select class="form-control" name="priorite">
								<option>Basse</option>
								<option>Moyenne</option>
								<option>Haute</option>
							</select>
						<button type="submit" class="btn btn-success mt-2">Cr&eacute;er</button>
					</form>
				</div>
				<div class="col-md-12 py-5">
					<?php $affichageTache = $db->query('SELECT * FROM todo ORDER BY priorite ASC');
					      while($reponseTache = $affichageTache->fetch(PDO::FETCH_ASSOC)){
					?>
					<div class="jumbotron">
						<h1 class="display-4"><?php echo $reponseTache['nom']." ".$reponseTache['prenom']?></h1>
						<p class="lead"><?php echo $reponseTache['dateTache']." ".$reponseTache['priorite']?></p>
							<hr class="my-4">
						<p><?php echo $reponseTache['tache']?></p>
					</div>
					<?php } ?>
				</div>
			</div>		
		</section>
	</section>
</body>
</html>