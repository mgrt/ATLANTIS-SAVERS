<?php
class userr{
	
private $id;
private $nom;
private $pre;
private $mail;
private $tel;
private $role;
private $mdp;

public  function __construct($id,$nom,$pre,$mail,$tel,$role,$mdp)
{
	$this->id=$id;
    $this->nom=$nom;
    $this->pre=$pre;
    $this->mail=$mail;
    $this->tel=$tel;
   $this->role=$role;
     $this->mdp=$mdp;

}

public  function getid()
{
	return $this->id;
}
public function getnom()
{
	return $this->nom;
}
public function getpre()
{
	return $this->pre;
}
public function getmail()
{
	return $this->mail;
}
public function gettel()
{
	return $this->tel;
}
public function getrole()
{
	return $this->role;
}
public function getmdp()
{
	return $this->mdp;
}



}





?>