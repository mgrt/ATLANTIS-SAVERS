<?php
include_once '../config.php';
include_once'../Controller/produitc.php';
$cat=$_POST['cat'];
$sql='DELETE FROM categories WHERE `id_categ`='.$cat.'';
//$sqlc='DELETE FROM categories WHERE `id_categ`='.$_post['cat'].'';
$produitc=new produitC();
$produitc->supprimerproduit($sql);
//$catc=new produitC();
//$catc->supprimerproduit($sqlc);
header('location:index.php');

?>
