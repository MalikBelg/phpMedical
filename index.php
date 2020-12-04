<?php


require_once "class/ActeMedical.php";
require_once "heritage/ActeConventionneTraitant.php";


$patient1 = new ActeConventionneTraitant ("Machin", 27327402446, 1234, 70, 25);

var_dump($patient1);

$patient1->facturer();

var_dump($patient1);
?>