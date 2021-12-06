<?php 
include_once '../config.php';
include_once '../model/produit.php';
include_once'../Controller/produitc.php';
if(!isset($_POST['id_produi'])||!isset($_POST['note'])||!isset($_POST['nbr'])||!isset($_POST['kdim']))
{
	echo "erreur de ";
}
$x=$_POST['note']+$_POST['kdim'];

$produiit=new  avi($_POST['id_produi'],$x,$_POST['nbr']);


$produitc=new produitC();
$produitc->avie($produiit);
header('location:http://localhost/site/b/view/fr/products.php');





?>