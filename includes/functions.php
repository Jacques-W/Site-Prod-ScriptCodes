<?php
// Pas Touche //
$db = new PDO('mysql:host=184.154.73.118;dbname=pfpwebho_scriptcodes;charset=utf8', 'pfpwebho_ScriptCodes', '(.uUTCU6&~CB');

$erreurMessage = '';
$message = '';

$nomAuteur = $_POST['nomAuteur'] ?? '';
$prenomAuteur = $_POST['prenomAuteur'] ?? '';
$client = $_POST['client'] ?? '';
$tache = $_POST['travailAFaire'] ?? '';
$dateTache = $_POST['dateTache'] ?? '';
$priorite = $_POST['prioriteTache'] ?? '';

$verifDateTache = '#[0-9]{1,2}-[0-9]{1,2}-[0-9]{4}#';
$prepaRequeteTache = $db->prepare('insert into todo(nom_auteur, prenom_auteur, client, tache, date_tache, priorite) values("'.$nomAuteur.'", "'.$prenomAuteur.'", "'.$client.'", "'.$tache.'", "'.$dateTache.'", "'.$priorite.'")');

if (empty($nomAuteur) && empty($prenomAuteur) && empty($client) && empty($tache) && empty($dateTache) && empty($priorite)){
    $erreurMessage = 'Le formulaire est vide!';
}elseif (empty($nomAuteur)){
    $erreurMessage = 'Le Nom de l\'auteur n\'a pas été rempli!';
}elseif (empty($prenomAuteur)){
    $erreurMessage = 'Le Prénom de l\'auteur n\'a pas été rempli!';
}elseif (empty($client)){
    $erreurMessage = 'Le Nom du Client n\'a pas été rempli!';
}elseif (empty($tache)){
    $erreurMessage = 'La Tache n\'a pas été rempli!';
}elseif (empty($dateTache)){
    $erreurMessage = 'La Date n\'a pas été rempli!';
}elseif (empty($priorite)){
    $erreurMessage = 'La Priorité de la tache n\'a pas été rempli!';
}elseif (strlen($tache) < 10){
    $erreurMessage = 'La tache n\'est pas assez longue ou est invalide!';
}elseif (!preg_match($verifDateTache, $dateTache)){
    $erreurMessage = 'Date ou format invalide!';
}else{
    $requete = $prepaRequeteTache->execute();
}

$nomServiceGestion = $_POST['nomServiceGestion'] ?? '';
$prestationServiceGestion = $_POST['prestationServiceGestion'] ?? '';
$prixServiceGestion = $_POST['prixServiceGestion'] ?? '';

// service, prestation, prix , table services //
$prepaRequeteServiceGestion = $db->prepare('insert into services(service, prestation, prix) values("'.$nomServiceGestion.'", "'.$prestationServiceGestion.'", "'.$prixServiceGestion.'")');

if (empty($nomServiceGestion) && empty($prestationServiceGestion) && empty($prixServiceGestion)){
    $erreurMessage = 'Formulaire Vide!';
}elseif (empty($nomServiceGestion)){
    $erreurMessage = 'Nom invalide ou vide';
}elseif (empty($prestationServiceGestion)){
    $erreurMessage = 'Prestation invalide ou vide';
}elseif (empty($prixServiceGestion)){
    $erreurMessage = 'Prix invalide ou vide';
}else{
    $requeteServiceGestion = $prepaRequeteServiceGestion->execute();
}

//Base de donnée client//
$nomClient = $_POST['nomClient'] ?? '';
$prenomClient = $_POST['prenomClient'] ?? '';
$nomEntreprise = $_POST['nomEntreprise'] ?? '';
$numSiret = $_POST['numSiret'] ?? '';
$typeSite = $_POST['typeSiteCommande'] ?? '';
$factureClient = $_POST['factureClient'] ?? '';

$prepaRequeteBaseClient = $db->prepare('insert into base_client(nom_client, prenom_client, nom_entreprise, num_siret, type_site, facture) values("'.$nomClient.'", "'.$prenomClient.'", "'.$nomEntreprise.'", "'.$numSiret.'", "'.$typeSite.'", "'.$factureClient.'")');

if (empty($nomClient) && empty($prenomClient) && empty($nomEntreprise) && empty($numSiret) && empty($typeSite) && empty($factureClient)){
    $erreurMessage = 'Le Formulaire est vide!';
}elseif (empty($nomClient)){
    $erreurMessage = 'Le Nom n\'a pas été entré!';
}elseif (empty($prenomClient)){
    $erreurMessage = 'Le Prénom n\a pas été entré!';
}elseif (empty($nomEntreprise)){
    $erreurMessage = 'Le Nom de l\'entreprise n\'a pas été entré!';
}elseif (empty($numSiret)){
    $erreurMessage = 'Le Numéro de Siret n\'a pas été entré!';
}elseif (empty($typeSite)){
    $erreurMessage = 'Le Type de Site commandé n\'a pas été entré!';
}elseif (empty($factureClient)){
    $erreurMessage = 'Vous n\'avez pas précisé si le client à déjà été facturé!';
}else{
    $requeteBaseClient = $prepaRequeteBaseClient->execute();
}