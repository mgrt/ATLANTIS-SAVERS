<?php 
include_once '../config.php';
include_once'../Controller/utic.php';
include_once'../model/usecr.php';
if(!isset($_POST['id'])||!isset($_POST['rol'])||!isset($_POST['mdp'])||!isset($_POST['nom'])||!isset($_POST['prenom'])||!isset($_POST['mail'])||!isset($_POST['tel']))
{
	echo "erreur de ";
}


$pof=new  userr( $_POST['id'],$_POST['nom'], $_POST['prenom'],$_POST['mail'],$_POST['tel'],$_POST['rol'],$_POST['mdp']);


$us=new usec();
$lod=$us->Modifieruser($pof);
header('location:index.php');





?>