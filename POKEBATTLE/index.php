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
	;
	$charmeleon->attack(target: $pikachu, attackNumber: 0);

	echo $pikachu->getName() . ' health : ' . $charmeleon->getHealth() . ' / ' . $pikachu->getHitPoints();
	echo '<br>' . $pikachu->getName() . ' Attacks ' . $charmeleon->getName() . ' with a ' . $pikachu->attack(target: $charmeleon, attackNumber: 0) . ' attack ' . '<br>';
	echo $pikachu->getName() . ' health : ' . $charmeleon->getHealth() . ' / ' . $pikachu->getHitPoints() . '<br>';

	echo $charmeleon->getName() . ' health : ' . $pikachu->getHealth() . ' / ' . $charmeleon->getHitPoints();
	echo '<br>' . $charmeleon->getName() . ' Attacks ' . $pikachu->getName() . ' with a ' . $charmeleon->attack(target: $pikachu, attackNumber: 0) . ' attack ' . '<br>';
	echo $charmeleon->getName() . ' health : ' . $pikachu->getHealth() . ' / ' . $charmeleon->getHitPoints() . '<br>';

	echo ' There are ' . Pokemon::getPopulation() . ' pokemon(s) alive! ';

