<!DOCTYPE html>
<html>

<?php 

class produitC{
 function afficherproduit($sql){
 		
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
 function supprimerproduit($sql)
 {
$db=config::getConnexion();
try{ $recipesStatement = $db->prepare($sql);
	$recipesStatement->execute();
 }
 catch(Exception $e){ ?>
 	<h2><?php  echo "Dans tab produit il ya id_categ donc pour effacer cet casse fasekh eli fi liste produit eli fehom id kima hedhi";?> </h2>
			 <?php die("erreur:".$e->getMessage());

 
		}?>
		
		<?php
}

function Ajouter($produiit){
$sql= "INSERT INTO `produit` VALUES (:id_produit, :id_cat, :nom, :prix, :quantite, :image, :desce,:avi,:nbr,:aff)";
$db=config::getConnexion();
try{ $recipesStatement = $db->prepare($sql);
	$recipesStatement->execute([ 'id_produit'=>$produiit->getid_produit(),
		            'id_cat' =>$produiit->getid_cat(),
		            'nom'=>$produiit->getNom_produit(),
		            'prix'=>$produiit->getprix(),
		            'quantite'=>$produiit->getQuantite(),
		            'image'=>$produiit->getimage(),
		            'desce'=>$produiit->getdescreption(),
		                 'avi'=>$produiit->getavis(),
		            'nbr'=>$produiit->getnbrper(),

'aff'=>0,


	]);
 }
 catch(Exception $e){ 
 	
			 die("erreur:".$e->getMessage());

}


}
function AJoutercat($cat)
{
	$sqlc= "INSERT INTO `categories` VALUES (:id_cat, :nom_cat)";
$db=config::getConnexion();
try{ $recipesStatement = $db->prepare($sqlc);
	$recipesStatement->execute([ 'id_cat'=>$cat->getid_cat(),
		            'nom_cat' =>$cat->getnom_cate(),
		         



	]);
 }
 catch(Exception $e){ 
 	
			 die("erreur:".$e->getMessage());
}
}
function Modifierpro($prod)
{
$sqlc= "UPDATE `produit` SET prix=:prix,Quantite=:quant,descreption=:descs WHERE id_produit=:id  ";
$db=config::getConnexion();
try{ $recipesStatement = $db->prepare($sqlc);
	$recipesStatement->execute([ 'prix'=>$prod->getprix(),
		            'quant' =>$prod->getQuantite(),
		            'descs' =>$prod->getdescreption(),
		            'id'    =>$prod->getid_produit(),
		         ]);
}
 catch(Exception $e){ 
 	
			 die("erreur:".$e->getMessage());
}

}
function Modifiercat($cat)
{
$sqlc= "UPDATE `categories` SET nom_cat=:cate WHERE id_categ =:id  ";
$db=config::getConnexion();
try{ $recipesStatement = $db->prepare($sqlc);
	$recipesStatement->execute([ 'id'=>$cat->getid_cat(),
		'cate'=>$cat->getnom_cate()
		                     
		         ]);
}
 catch(Exception $e){ 
 	
			 die("erreur:".$e->getMessage());
}

}
function avie($prod)
{
$sqlc= "UPDATE `produit` SET avis=:avi,nbrper=:nvr WHERE id_produit=:id  ";
$db=config::getConnexion();
try{ $recipesStatement = $db->prepare($sqlc);
	$recipesStatement->execute([ 'avi'=>$prod->getavis(),
		            'nvr' =>$prod->getnbrper(),
		            
		            'id'    =>$prod->getid_produit(),
		         ]);
}
 catch(Exception $e){ 
 	
			 die("erreur:".$e->getMessage());
}

}
function recherche($search_value)
    {
        $sql="SELECT * FROM produit where 	(id_produit like '$search_value' or Nom_produit like '%$search_value%' or prix like '%$search_value%' or id_cat like '%$search_value%' or Quantite like '%$search_value%') and  affich like 0 ";

        //global $db;
        $db =Config::getConnexion();

        try{
            $result=$db->query($sql);

            return $result;

        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function tri($sql){
	  $db=config::getConnexion();
		try{
			$liste=$db->query($sql);
			return $liste;
		}
		catch(Exception $e){
			die("erreur:".$e->getMessage());
		}
	} 
function AJouterrec($rec)
{
	$sqlc= "INSERT INTO `reclamation` VALUES (:id, :nom,:mail)";
$db=config::getConnexion();
try{ $recipesStatement = $db->prepare($sqlc);
	$recipesStatement->execute([ 'id'=>$rec->getid(),
		            'nom' =>$rec->getnom(),
		         
 'mail' =>$rec->getmail(),


	]);
 }
 catch(Exception $e){ 
 	
			 die("erreur:".$e->getMessage());
}
}

function Modifieraff1($id)
{
$sqlc= "UPDATE `produit` SET affich=:af WHERE id_produit=:id  ";
$db=config::getConnexion();
try{ $recipesStatement = $db->prepare($sqlc);
	$recipesStatement->execute([ 
		  'af'=>1,
		            'id'=>$id,
		         ]);
}
 catch(Exception $e){ 
 	
			 die("erreur:".$e->getMessage());
}

}
function Modifieraff0($id)
{
$sqlc= "UPDATE `produit` SET affich=:af WHERE id_produit=:id  ";
$db=config::getConnexion();
try{ $recipesStatement = $db->prepare($sqlc);
	$recipesStatement->execute([ 
		  'af'=>0,
		            'id'=>$id,
		         ]);
}
 catch(Exception $e){ 
 	
			 die("erreur:".$e->getMessage());
}

}


}
  ?>


 </html>