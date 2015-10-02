<?php
session_start();
include_once('class/autoload.php');


$site = new page_base_securisee_admin('Ajout famille');
$site->js='jquery.validate.min';
$site->js='messages_fr';
$site->js='jquery.tooltipster.min';
$site->style='tooltipster';
$site->style='perso';


$controleur=new controleur();

$site-> right_sidebar=$site-> rempli_right_sidebar();
$site-> left_sidebar=$controleur->retourne_formulaire_famille('Ajout');

$site->affiche();

$ConnexionBaseAlae = new Connexion();
//récupération de l'identifiant de connexion (objet PDO)
$connexion = $ConnexionBaseSIO->connexion;

$sql = "INSERT INTO famille [(identifiant, mp, nom1,prenom1, adresse11, adress12, cp1, ville1, mail1, tel1, fonction1, nom2, prenom2, adresse21, adresse22, cp2, ville2, mail2, tel21, tel22, tel23, fonction2)])
	VALUES ('identifiant','mp','nom1','prenom1','adresse11','adresse12','cp1','ville1','tel11','tel12','tel13','fonction1','nom2','prenom2','adresse21','adresse22','adresse23','cp2','ville2','tel21','tel22','tel23','fonction2'";

	mysql_query ($sql) or die ('Erreur SQL !'.$sql.'<br />'.mysql_error());
mysql_close();
)
?>