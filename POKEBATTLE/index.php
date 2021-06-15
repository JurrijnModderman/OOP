<?php 
	spl_autoload_register(function ($class_name) {
		$file_name = $class_name. '.php';
		if (!file_exists($file_name)) {
			return false;
		}
    	include $file_name;
	});
	
	use Pokemon\Pokemon;

	// Pikachu valt Charmeleon aan met een Electric Ring attack
	// Charmeleon valt Pikachu aan met een Flare attack
	// Print voor en na de aanval de health uit van de pokemon die wordt aangevallen
	$pikachu = new Pikachu(name :'Pikachu');
	$charmeleon = new Charmeleon(name :'Charmeleon');
	$pikachu->attack(target: $charmeleon, attackNumber: 0);
	$charmeleon->attack(target: $pikachu, attackNumber: 0);
	// $Charmeleon->Attack($Pikachu, 1);
	// $Charmeleon->Attack($Pikachu, 1);

	// $Pikachu = new Pikachu('Pikachu');
	// $Charmeleon = new Charmeleon('Charmeleon');
	// $Pikachu->Attack($Charmeleon, 1);
	// $Charmeleon->Attack($Pikachu, 1);

	echo ' There are ' . Pokemon::getPopulation() . ' pokemon(s) alive! ';

