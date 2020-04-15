<?php

require_once('class.php');

$perso1 = new Personnage('Pikachu', '15');
$perso1->perso();
$perso1->incrementepvPerso();


$perso2 = new Personnage('Salameche', '12');
$perso2->perso();
$perso2->incrementepvPerso();

?>