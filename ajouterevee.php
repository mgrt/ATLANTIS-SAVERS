<?php 
include_once '../config.php';
include_once '../model/evente.php';
include_once'../Controller/offrec.php';

if(!isset($_POST['Id_event'])||!isset($_POST['nom_event'])||!isset($_POST['date_deb'])||!isset($_POST['date_fin']))
{
	echo "erreur de ";
}

$pof=new  evv( $_POST['Id_event'],$_POST['nom_event'], $_POST['date_deb'],$_POST['date_fin']);


$off=new offrec();
$lod=$off->Ajouterev($pof);
header('location:index.php');

?>