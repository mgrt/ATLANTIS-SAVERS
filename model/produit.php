<?php
class produit{
	
private $id_produit;
private $id_cat;
private $Nom_produit;
private $prix;
private $Quantite;
private $image;
private $descreption;
private $avis;
private $nbrper;

public  function __construct($id_produit,$id_cat,$Nom_produit,$prix,$Quantite,$image,$descreption,$avis,$nbrper)
{
	$this->id_produit=$id_produit;
    $this->id_cat=$id_cat;
    $this->Nom_produit=$Nom_produit;
    $this->prix=$prix;
    $this->Quantite=$Quantite;
    $this->image=$image;
    $this->descreption=$descreption;
        $this->avis=$avis;
    $this->nbrper=$nbrper;

}

public  function getid_produit()
{
	return $this->id_produit;
}
public function getid_cat()
{
	return $this->id_cat;
}
public function getNom_produit()
{
	return $this->Nom_produit;
}
public function getprix()
{
	return $this->prix;
}
public function getQuantite()
{
	return $this->Quantite;
}
public function getimage()
{
	return $this->image;
}
public  function getdescreption()
{
   return $this->descreption;
}
public function getavis()
{
   return $this->avis;
}
public  function getnbrper()
{
   return $this->nbrper;
}
public function setid_produit($id_produit)
{
   $this->id_produit= $id_produit;
}
public function setid_cat($id_cat)
{
   $this->id_cat = $id_cat;
}
public function setNom_produit($Nom_produit)
{
   $this->Nom_produit = $Nom_produit;
}
public function setprix($prix)
{
   $this->prix = $prix;
}
public function setQuantite($Quantite)
{
   $this->Quantite = $Quantite;
}
public function setimage($image)
{
   $this->image = $image;
}
public function setdescreption($descreption)
{
   $this->descreption = $descreption;
}

}
class prod{
   private $id_produit;
private $prix;
private $Quantite;
private $descreption;

public  function __construct($id_produit,$prix,$Quantite,$descreption)
{
   $this->id_produit=$id_produit;
  
    $this->prix=$prix;
    $this->Quantite=$Quantite;

    $this->descreption=$descreption;

}

public  function getid_produit()
{
   return $this->id_produit;
}


public function getprix()
{
   return $this->prix;
}
public function getQuantite()
{
   return $this->Quantite;
}

public  function getdescreption()
{
   return $this->descreption;
}

}
class avi{
   private $id_produit;
private $avis;
private $nbrper;

public  function __construct($id_produit,$avis,$nbrper)
{
   $this->id_produit=$id_produit;
        $this->avis=$avis;
    $this->nbrper=$nbrper;
 

}

public  function getid_produit()
{
   return $this->id_produit;
}



public function getavis()
{
   return $this->avis;
}
public  function getnbrper()
{
   return $this->nbrper;
}

}




?>