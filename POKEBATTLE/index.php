<?php 
	require 'Pokemon.php';
	require 'Energytype.php';
	require 'Attack.php';
	require 'Pikachu.php';
	require 'Charmeleon.php';
	require 'Resistance.php';
	require 'Weakness.php';

	// Pikachu valt Charmeleon aan met een Electric Ring attack
	// Charmeleon valt Pikachu aan met een Flare attack
	// Print voor en na de aanval de health uit van de pokemon die wordt aangevallen
	$Pikachu = new Pikachu('Pikachu');
	$Charmeleon = new Charmeleon('Charmeleon');
	echo $Pikachu->name . ' valt ' . $Charmeleon->name. ' aan met een ' . $Pikachu->attacks[0]->attackName . ' attack ' . "<br>";
	echo $Charmeleon->name . ' valt ' . $Pikachu->name . ' aan met een ' . $Charmeleon->attacks[1]->attackName . ' attack';
	// echo $Charmeleon;

	// $Energytype = new Energytype('water', 40);
	// echo $Energytype;

	// $attack = new Attack('the punisher', 60);
	// echo $attack;
?>