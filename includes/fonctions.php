<?php 
    //Ne Pas Toucher
    $db = new PDO('mysql:host=intranetcg2805.mysql.db;dbname=intranetcg2805;charset=utf8', 'intranetcg2805', 'Tango2267');
    
    $nom = $_POST['nom'] ?? '';
    $prenom = $_POST['prenom'] ?? '';
    $tache = $_POST['tache'] ?? '';
    $dateTache = $_POST['dateTache'] ?? '';
    $priorite = $_POST['priorite'] ?? '';
    
    $prepaRequete = $db->prepare('INSERT INTO todo(nom, prenom, tache, dateTache, priorite) VALUES("'.$nom.'", "'.$prenom.'", "'.$tache.'", "'.$dateTache.'", "'.$priorite.'")'); 
    if(empty($nom) && empty($prenom) && empty($tache) && empty($dateTache) && empty($priorite)){
        
    }else{
        $requeteExec = $prepaRequete->execute();
    }
?>