<?php

session_start();

include_once('../class/autoload.php');

$errors         = array();
$data 			= array();



$data['success']=false;




 $tab=array();
$mypdo=new mypdo();


$tab['identifiant']=$_POST['identifiant'];
$tab['nom']=$_POST['nom'];
$tab['prenom']=$_POST['prenom'];
$tab['age']=$_POST['age'];
$tab['commentaire']=$_POST['commentaire'];

$data=$mypdo-> insert_enfant_admin($tab);



echo json_encode($data);
?>