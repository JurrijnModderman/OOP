<?php 
	require 'Pokemon.php';
	require 'EnergyType.php';
	require 'Attack.php';
	require 'Pikachu.php';
	require 'Charmeleon.php';
	require 'Resistance.php';
	require 'Weakness.php';

	// Pikachu valt Charmeleon aan met een Electric Ring attack
	// Charmeleon valt Pikachu aan met een Flare attack
	// Print voor en na de aanval de health uit van de pokemon die wordt aangevallen
	$pikachu = new Pikachu(name :'Pikachu');
	$charmeleon = new Charmeleon(name :'Charmeleon');
	$pikachu->Attack(target: $charmeleon, attackNumber: 0);
	$charmeleon->Attack(target: $pikachu, attackNumber: 0);
	// $Charmeleon->Attack($Pikachu, 1);
	// $Charmeleon->Attack($Pikachu, 1);

	// $Pikachu = new Pikachu('Pikachu');
	// $Charmeleon = new Charmeleon('Charmeleon');
	// $Pikachu->Attack($Charmeleon, 1);
	// $Charmeleon->Attack($Pikachu, 1);

	echo ' There are ' . Pokemon::getPopulation() . ' pokemon(s) alive! ';

