<?php
$destinataire =$_POST['mail']; 
$sujet = "Sujet"; // sujet du mail
$message =$_POST['rep']; 
mail ($destinataire, $sujet, $message);
header('location:index.php');
?>