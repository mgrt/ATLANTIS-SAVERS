<!DOCTYPE html>
<html>

<?php 

class usec{
	function afficheruti(){
		$sql="SELECT * FROM utilisateurs ";
		$db=config::getConnexion();
		try{
			$liste=$db->query($sql);
			return $liste;
		}
		catch(Exception $e){
			die("erreur:".$e->getMessage());
		}
	} 
	   function supprimeruser($off){
 $sql="DELETE  FROM utilisateurs WHERE `id_utlisitarur`= $off ";
		$db=config::getConnexion();
		try{
			$liste=$db->query($sql);

        }catch(Exception $e){
			die("erreur:".$e->getMessage());
   }
}

function Modifieruser($of)
{
$sqlc= "UPDATE `utilisateurs` SET nom=:nm,prenom=:pre,mail=:mail,tel=:tel WHERE id_utlisitarur=:id  ";
$db=config::getConnexion();
try{ $recipesStatement = $db->prepare($sqlc);
	$recipesStatement->execute(['nm' =>$of->getnom(),
		              'pre' =>$of->getpre(),
		              'mail' =>$of->getmail(),
		              'tel' =>$of->gettel(),
		          
		              'id'=>$of->getid(),
		         ]);
}
 catch(Exception $e){ 
 	
			 die("erreur:".$e->getMessage());
}

} 

function Ajouter($of){
$sql= "INSERT INTO `utilisateurs` VALUES (:id,:nm, :pre, :mail, :tel,:role,:mdp)";
$db=config::getConnexion();
try{ $recipesStatement = $db->prepare($sql);
	$recipesStatement->execute([ 'id'=>$of->getid(),
		            'nm' =>$of->getnom(),
		            'pre'=>$of->getpre(),
		            'mail'=>$of->getmail(),
		            'tel'=>$of->gettel(),
		             'role'=>$of->getrole(),
		             
		                'mdp'=>$of->getmdp(),    
		       
		       



	]);
 }
 catch(Exception $e){ 
 	
			 die("erreur:".$e->getMessage());

}

}


}
?>
</html>
