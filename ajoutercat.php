<?php
include_once '../config.php';
include_once '../model/categorie.php';
include_once'../Controller/produitc.php';
 if(!isset($_POST['id_categ'])||!isset($_POST['nom_cat']))
{
	echo "erreur de ";
}
$cate=new categorie($_POST['id_categ'],$_POST['nom_cat']);

$cat=new produitC();
$cat->AJoutercat($cate);
header('location:index.php');
?>