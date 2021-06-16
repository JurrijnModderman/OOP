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

	echo '<br>' . $pikachu . ' Attacks ' . $pikachu->getName() . ' with a ' . $attacks[$attackNumber]->name . ' attack ' . '<br>';
	echo $pikachu . ' health : ' . $pikachu->getHealth() . ' / ' . $this->hitPoints . '<br>';
	echo $pikachu . ' receives damage : ' . $attack->damage . ' with energyType : ' . $energyType->name . '<br>';
	echo $pikachu . ' health : ' . ($pikachu->getHealth -= $attack->damage) . ' / ' . $this->hitPoints . '<br>';

	// echo '<br>' . $charmeleon . ' Attacks ' . $charmeleon->getName() . ' with a ' . $attacks[$attackNumber]->name . ' attack ' . '<br>';
	// echo $charmeleon . ' health : ' . $$charmeleon->getHealth . ' / ' . $this->hitPoints . '<br>';
	// echo $charmeleon . ' receives damage : ' . $attack->damage . ' with energyType : ' . $energyType->name . '<br>';
	// echo $charmeleon . ' health : ' . ($charmeleon->getHealth -= $attack->damage) . ' / ' . $this->hitPoints . '<br>';
	// $Charmeleon->Attack($Pikachu, 1);
	// $Charmeleon->Attack($Pikachu, 1);

	// $Pikachu = new Pikachu('Pikachu');
	// $Charmeleon = new Charmeleon('Charmeleon');
	// $Pikachu->Attack($Charmeleon, 1);
	// $Charmeleon->Attack($Pikachu, 1);

	echo ' There are ' . Pokemon::getPopulation() . ' pokemon(s) alive! ';

