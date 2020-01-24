<!DOCTYPE html>
<html>
	<!-- Ajouter ligne 7 le css personnalisé -->
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
    						<a class="nav-link disabled" href="productions.php">Nos productions</a>
    					</li>
    					<li class="nav-item">
    						<a class="nav-link disabled" href="propos.php">A propos de Nous</a>
    					</li>
    					<li class="nav-item active">
    						<a class="nav-link" href="equipe.php">Notre &eacute;quipe</a>
    					</li>
    				</ul>
    			</div>
    		</nav>
    	</header>
    	<!-- Pour les CSS perso, utiliser id="" et non pas class="" -->
    	<section class="container-fluid text-center">
    		<section class="container">
    			<div class="row">
    				<div class="col-md-4 py-5">
    					<div class="card">
    						<img id="image" class="card-img-top w-25 h-25" src="images/stevens.jpg" alt="Benoit">
    							<hr class="my-2">
    						<h5 class="card-title">Steevens Paullas - Gutt</h5>
    							<hr class="my-2">
    						<p class="card-text">Directeur Executif / D&eacute;veloppeur Web / SEO</p>
    					</div>
    				</div>
    				<div class="col-md-4 py-5">
    					<div class="card">
    						<img id="image" class="card-img-top w-25 h-25" src="images/jacques.jpg" alt="Jacques">
    							<hr class="my-2">
    						<h5 class="card-title">Jacques W.</h5>
    							<hr class="my-2">
    						<p class="card-text">Chef De Projet Technique / D&eacute;veloppeur Web / SEO</p>
    					</div>
    				</div>
    				<div class="col-md-4 py-5">
    					<div class="card">
    						<img id="image" class="card-img-top w-25 h-25" src="images/julie_b.jpg" alt="Julie">
    							<hr class="my-2">
    						<h5 class="card-title">Julie Bihler</h5>
    							<hr class="my-2">
    						<p clas="card-text">D&eacute;veloppeuse Web / SEO / Graphiste</p>
    					</div>
    				</div>
    				<div class="col-md-4 py-5">
    					<div class="card">
    						<img id="image" class="card-img-top w-25 h-25" src="images/eloise_f.jpg" alt="Eloïse">
    							<hr class="my-2">
    						<h5 class="card-title">Elo&iuml;se Firus</h5>
    							<hr class="my-2">
    						<p class="card-text">D&eacute;veloppeuse Web</p>
    					</div>
    				</div>
    				<div class="col-md-4 py-5">
    					<div class="card">
    						<img id="image" class="card-img-top w-25 h-25" src="images/alexandra_r.jpg" alt="Alexandra">
    							<hr class="my-2">
    						<h5 class="card-title">Alexandra Roth</h5>
    							<hr class="my-2">
    						<p class="card-text">D&eacute;veloppeuse Web / Graphiste</p>
    					</div>
    				</div>
    				<div class="col-md-4 py-5">
    					<div class="card">
    						<img id="image" class="card-img-top w-25 h-25" src="images/faycal.jpg" alt="Fay&ccedil;al">
    							<hr class="my-2">
    						<h5 class="card-title">Fay&ccedil;al Allouache</h5>
    							<hr class="my-2">
    						<p class="card-text">D&eacute;veloppeur Web</p>
    					</div>
    				</div>
    				<div class="col-md-4 py-5">
    					<div class="card">
    						<img id="image" class="card-img-top w-25 h-25" src="images/lyroi.jpg" alt="Lyroi">
    							<hr class="my-2">
    						<h5 class="card-title">Lyroi Dorval</h5>
    							<hr class="my-2">
    						<p class="card-text">S&eacute;curit&eacute; Informatique</p>
    					</div>
    				</div>
    				<div class="col-md-4 py-5">
    					<div class="card">
    						<img id="image" class="card-img-top w-25 h-25" src="images/benoit.jpg" alt="Benoit">
    							<hr class="my-2">
    						<h5 class="card-title">Benoit</h5>
    							<hr class="my-2">
    						<p class="card-text">D&eacute;veloppeur Web / SEO</p>
    					</div>
    				</div>
    				<div class="col-md-4 py-5">
    					<div class="card">
    						<img id="image" class="card-img-top w-25 h-25" src="images/nathaelle.jpg" alt="Nathaelle">
    							<hr class="my-2">
    						<h5 class="card-title">Natha&euml;lle Dorval</h5>
    							<hr class="my-2">
    						<p class="card-text">Assistante Direction / D&eacute;veloppeuse Web</p>
    					</div>
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
	</body>
</html>