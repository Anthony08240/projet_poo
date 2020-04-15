<?php

class Personnage
{
//Déclaration de variable
  private $_nomPerso;
  private $_pvPerso;
  private $_degatsPerso;

//Initialisation de notre Class
public function __construct( $nomPerso, $degatsPerso){

  $this->_nomPerso = $nomPerso;
  $this->_pvPerso = 100;
  $this->_degatsPerso = $degatsPerso;
}


public function getnomPerso(){
  return $this->_nomPerso;
}

public function getpvPerso(){
  return $this->_pvPerso;
}

public function getdegatsPerso(){
  return $this->_degatsPerso;
}


public function perso(){

  echo "Le Nom du Personnage est : ";
  echo $this->_nomPerso;
  echo "<br>";
  echo "les point de vie de "; echo $this->_nomPerso; echo " sont de : ";
  echo $this->_pvPerso;
  echo "<br>";
  echo "L'attaque de "; echo $this->_nomPerso; echo " est de : ";
  echo $this->_degatsPerso;
  echo "<br>";
}

public function incrementepvPerso(){

  $this->_pvPerso = $this->_pvPerso - $this->_degatsPerso;
  echo "les point de vie de "; echo $this->_nomPerso; echo " est de : ";
  echo $this->_pvPerso;
  echo "<br>";
}

}
?>