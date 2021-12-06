<?php 
include_once '../config.php';
include_once '../model/produit.php';
include_once'../Controller/produitc.php';
if(!isset($_POST['id_produit'])||!isset($_POST['prix'])||!isset($_POST['quantite'])||!isset($_POST['description']))
{
	echo "erreur de ";
}
$produiit=new  prod( $_POST['id_produit'],$_POST['prix'], $_POST['quantite'],$_POST['description']);


$produitc=new produitC();
$produitc->Modifierpro($produiit);
header('location:index.php');





?>