<?php 
include_once '../config.php';
include_once '../model/offre.php';
include_once'../Controller/offrec.php';

if(!isset($_POST['id_off'])||!isset($_POST['id_event'])||!isset($_POST['datdeb'])||!isset($_POST['datfin'])||!isset($_POST['id_prod'])||!isset($_POST['pour']))
{
	echo "erreur de ";
}
$pof=new  off( $_POST['id_off'],$_POST['id_prod'], $_POST['datdeb'],$_POST['datfin'],$_POST['id_event'],($_POST['pour']));


$off=new offrec();
$lod=$off->Ajouter($pof);
header('location:index.php');
?>