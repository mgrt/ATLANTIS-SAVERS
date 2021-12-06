<?php 
include_once '../config.php';
include_once'../Controller/produitc.php';
$db=config::getConnexion();
$sql="SELECT * FROM produit where id_produit=?";
$recipesStatement = $db->prepare($sql);
$recipesStatement->execute([$_GET['id_produi']]);
$title=$recipesStatement->fetchall();
foreach($title as $pro){
	$x=$pro['affich'] ; 
}
 if($x==0){
 	$cat=new produitC();
$cat->Modifieraff1($_GET['id_produi']);
 }
 else{
 	 	$cat=new produitC();
$cat->Modifieraff0($_GET['id_produi']);
 }

header('location:index.php');



?>