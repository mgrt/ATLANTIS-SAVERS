<?php
include_once '../config.php';
include_once'../Controller/utic.php';

$off=new usec();
$sup=$off->supprimeruser($_POST['id_utlisitarur']);
header('location:index.php');

?>
