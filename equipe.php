<?php 
require_once ('includes/head.php');
require_once ('includes/header.php');?>

<section class="container-fluid" id="Description"></section>
	<section class="container py-5">
		<div class="equipeh1 row">
			<div class="col-6">
			<h3 class="pb-4"><strong>L'équipe</strong></h3>
			<p>Le socle commun des membres de notre équipe est le développement web, de plus chacun possède un domaine d'expertise de par leurs expériences professionnelles passées.</p>
			<p>Le partage des connaissances, des compétences, en somme la diversité de nos parcours individuels fait notre force.</p></div>
			<div class="col-6">
			<!-- <h3></h3> -->
			<p>C'est ainsi que vous pourrez compter parmi nous: bien évidemment notre directeur exécutif (GRRRR) et quand il n'est pas présent son assistante.
			<p>Deux graphistes qui mettent régulièrement des paillettes dans nos vies, un manager SEO et son lutin afin de vous garantir un référencement de qualité</p>
			<p>Un chargé du marketing pour tous ces concepts abstraits qui nous dépassent. Un chef de projet technique (sans lui c'est la jungle), sans oublier notre précieux gestionnaire administratif.</p>
			</div>
			<!-- <div class="col-3"></div> -->
		</div>
		</section>
		
		<section class="container-fluid">
		<div class="row">
			<div class="equipe col-12">
				<img class="full ml-5" width="10%" src="images/stevens.jpg" alt="Stevens">
				<img class="full" width="10%" src="images/jacques.jpg" alt="Jacques">
				<img class="full" width="10%" src="images/julie_b.jpg" alt="Julie">
				<img class="full" width="10%" src="images/eloise_f.jpg" alt="Eloïse">
				<img class="full" width="10%" src="images/alexandra_r.jpg" alt="Alexandra">
				<img class="full" width="10%" src="images/faycal.jpg" alt="Fayçal">
  				<img class="full" width="10%" src="images/lyroi.jpg" alt="Lyroi">
				<img class="full" width="10%" src="images/benoit.jpg" alt="Benoit">
                <img class="full" width="10%" src="images/rodolphe.jpg" alt="Rodolphe">
				<img class="full mr-5" width="10%" src="images/nathaelle.jpg" alt="Nathaelle">
			</div>
		</div>
	</section>
	<h2 class="equipeh1 text-center pt-4"><strong>Vous avez une idée de projet? Une question?</strong></h2>
	<h3 class="equipeh1 text-center pt-2 pb-4"><strong>N'hésitez-pas, laissez-nous vous aider!</strong></h3>
	<section class="container">
		<div class="row">
			<div class="col-3"></div>
			<div class="col-6">
				<form>
					<div class="row">
						<div class="col-6">
							<div class="form-group">
							<label for="formGroupExampleInput" class="equipeh1">Nom</label>
							<input type="nom" class="form-control" id="formGroupExampleInput" placeholder="Nom">
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
							<label for="formGroupExampleInput" class="equipeh1">Prénom</label>
							<input type="prenom" class="form-control" id="formGroupExampleInput" placeholder="Prénom">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="formGroupExampleInput2" class="equipeh1">Votre message</label>
						<textarea type="text" class="form-control" rows="5" id="formGroupExampleInput2" placeholder="Nous vous écoutons..."></textarea>
						<button class="btn mt-3" type="submit">Envoyer</button>
					</div>
				</form>
			</div>
			<div class="col-3"></div>
		</div>

	</section>


    <?php require_once ('includes/footer.php');?>
	</body>
</html>