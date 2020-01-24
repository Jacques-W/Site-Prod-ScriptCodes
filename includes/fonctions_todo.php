<?php
// Pas Touche //
$db = new PDO('mysql:host=intranetcg2805.mysql.db;dbname=intranetcg2805;charset=utf8', 'intranetcg2805', 'Tango2267');

$erreurMessage = '';
$message = '';

$nomAuteur = $_POST['nomAuteur'] ?? '';
$prenomAuteur = $_POST['prenomAuteur'] ?? '';
$client = $_POST['client'] ?? '';
$tache = $_POST['travailAFaire'] ?? '';
$dateTache = $_POST['dateTache'] ?? '';
$priorite = $_POST['prioriteTache'] ?? '';

$verifDateTache = '#[0-9]{1,2}-[0-9]{1,2}-[0-9]{4}#';
$requete = $db->prepare('insert into todo(nom_auteur, prenom_auteur, client, tache, date_tache, priorite) values("'.$nomAuteur.'", "'.$prenomAuteur.'", "'.$client.'", "'.$tache.'", "'.$dateTache.'", "'.$priorite.'")');

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
    $requete = $db->execute();
}