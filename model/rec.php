<?php
class rec{
	private $id;
private $nom;
private $mail;

public  function __construct($id,$nom,$mail)
{
	$this->id=$id;
    $this->nom=$nom;
      $this->mail=$mail;
}
public  function getid()
{
	return $this->id;
}
public function getnom()
{
	return $this->nom;
}
public function getmail()
{
	return $this->mail;
}
}





?>