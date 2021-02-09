<?php

// J'inclue mes deux classes ici, faites bien attention à l'ordre d'inclusion, comme la classe dragon hérite de la classe
// personnage, je dois inclure la classe personnage avant d'inclure la classe dragon
// TODO attention, certaines erreurs volontaires ont pu être glissées, a vous de vérifier ! Ce message en lui même est peut être un piège :-)
require "classes/Personnage.php";
require "classes/Dragon.php";
require "classes/Princesse.php";
require "classes/Sorcier.php";

// Creation d'une instance de la classe personnage
$humain = new Personnage();
$humain->setNom("groot");
echo $humain->getNom()."<br>";
echo $humain->getVie()."<br>";
echo $humain->getId()."<br>";

// Creation d'une instance de la classe dragon
$dragon = new Dragon();
$dragon->setNom("brutus");
echo $dragon->getNom()."<br>";
echo $dragon->getVie()."<br>";
echo $dragon->getId()."<br>";

//creation d'une instance de princesse
$princesse = new Princesse();
$princesse->setNom('peach');
echo $princesse->getNom()."<br>";
echo $princesse->getVie()."<br>";
echo $princesse->getId()."<br>";

//creation d'une instance sorcier
$sorcier = new Sorcier();
$sorcier->setNom('gandalf');
echo $sorcier->getNom()."<br>";
echo $sorcier->getVie()."<br>";
echo $sorcier->getId()."<br>";


