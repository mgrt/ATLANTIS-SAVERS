<?php
include_once '../config.php';
include_once '../model/rec.php';
include_once'../Controller/produitc.php';
 if(!isset($_POST['id'])||!isset($_POST['rec'])||!isset($_POST['mail']))
{
	echo "erreur de ";
}
$cate=new rec($_POST['id'],$_POST['rec'],$_POST['mail']);

$cat=new produitC();
$cat->AJouterrec($cate);
header('location:http://localhost/site/b/view/fr/home.php');
?>