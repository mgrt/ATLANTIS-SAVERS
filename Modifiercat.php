<?php
include_once '../config.php'; 
include_once '../model/categorie.php';
include_once'../Controller/produitc.php';

if(!isset($_POST['id_categ'])||!isset($_POST['nom_cat']))
{
	echo "erreur de ";
}

$cat=new categorie($_POST['id_categ'],$_POST['nom_cat']);

$produitc=new produitC();
$produitc->Modifiercat($cat);
header('location:index.php');





?>