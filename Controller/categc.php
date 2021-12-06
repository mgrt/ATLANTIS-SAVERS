<?php 
include_once '../config.php';
class categC{
function affichercat(){
 		$sql="SELECT * FROM categories ";
		$db=config::getConnexion();
		try{ 
$recipesStatement = $db->prepare($sql);
$recipesStatement->execute();
$title=$recipesStatement->fetchall();
return $title;
		} 
		catch(Exception $e){
			die("erreur:".$e->getMessage());
		}
 }


}



 ?>