<?php
	class Charmeleon extends Pokemon {
		/**
		 * magic constructor method to prepare the new objects for use, often accepting arguments that the constructor uses to set required member variables.
		 * @param string $name
		 */
		public function __construct($name) {
			$energyType = new EnergyType(name : EnergyType::FIRE, energyTypeValue : EnergyType::FIRE);
			$hitPoints = 60;
			$attacks = [new Attack(attack : 'Head Butt', damage : 10), new Attack(attack : 'Flare', damage : 30)];
			$weakness = new Weakness(multiplier: 2, energyType : 'Water');
		 	$resistance = new Resistance(resistanceValue : 10, energyType: EnergyType::LIGHTNING);
			parent:: __construct($name, $energyType, $hitPoints, $attacks, $weakness, $resistance);

	   }
	}
