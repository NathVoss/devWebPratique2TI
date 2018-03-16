<?php
/**
 * Created by PhpStorm.
 * User: Nathan
 * Date: 28-02-18
 * Time: 09:17
 */
// var Config de base
$title = 'Acceuil';
$site_name = 'Nom_de_mon_site';
$href_logo = 'IMG/04.png';
$alt_logo = 'logo';
$contenu = 'Bienvenue';
// var menu
$index = 'Accueil';
$userProfil = 'Profil';
$userInfos = 'Mes infos';
$config = 'Configuration';
$gestLog = 'Connexion';
// var sous-menu
$sem01 = 'TP01';
$sem02 = 'TP02';
$sem03 = 'TP03';
$sem04 = 'TP04';
include 'INC/dbConnect.inc.php';
// pied de page
$auteur = "<a href='mailto:".___MATRICULE___."@students.ephec.be' title='".___MATRICULE___."@students.ephec.be'>".$__INFOS__['prenom']." ".$__INFOS__['nom']."</a>";


include 'INC/layout.html.inc.php';