<?php 
include_once '../config.php';
include_once'../Controller/offrec.php';
include_once'../model/evente.php';

if(!isset($_POST['id_event'])||!isset($_POST['nom_event'])||!isset($_POST['datdeb'])||!isset($_POST['date_fin']))
{
	echo "erreur de ";
}
$pof=new  evv( $_POST['id_event'],$_POST['nom_event'], $_POST['datdeb'],$_POST['date_fin']);


$off=new offrec();
$lod=$off->Modifierevent($pof);
header('location:index.php');





?>