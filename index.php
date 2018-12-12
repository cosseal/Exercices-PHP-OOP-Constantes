<?php
/**
 * Created by PhpStorm.
 * User: sstienface
 * Date: 11/12/2018
 * Time: 14:35
 */

// J'inclue mes deux classes ici, faites bien attention à l'ordre d'inclusion, comme la classe dragon hérite de la classe
// personnage, je dois inclure la classe personnage avant d'inclure la classe dragon

require"classes/personnage.php";
require"classes/dragon.php";
require"classes/princesse.php";

// Creation d'une instance de la classe personnage
$humain = new personnage();
$humain->setNom("Votre nom");

// Creation d'une instance de la classe dragon
$dragon = new dragon();
$dragon->setNom("");

// Creation d'une instance de princesse
$princesse = new princesse();

// Creation d'ne instance de sorcier
$sorcier = new sorcier();





