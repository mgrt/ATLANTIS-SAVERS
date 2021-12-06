<?php
include_once '../config.php';
include_once'../Controller/produitc.php';
$prod=$_POST['id_produi'];
$sql='DELETE FROM produit WHERE `id_produit`='.$prod.'';
//$sqlc='DELETE FROM categories WHERE `id_categ`='.$_post['cat'].'';
$produitc=new produitC();
$produitc->supprimerproduit($sql);
//$catc=new produitC();
//$catc->supprimerproduit($sqlc);
header('location:index.php');

?>
