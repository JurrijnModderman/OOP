<?php
	class Pikachu extends Pokemon {

		public function __construct($name) {
		 	$energyType = new Energytype(energyTypeName : 'lightning', energyTypeValue : 'lightning');
		 	$hitPoints = 60;
		 	$health = 60;
		 	$attacks = [new Attack(attack : 'Electric Ring', damage : 50), new Attack(attack : 'Pika Punch', damage : 20)];
		 	$weakness = new Weakness(weaknessMultiplier : 1.5, weaknessEnergyType : 'Fire');
		 	$resistance = new Resistance(resistanceValue : 20, resistanceEnergyType : 'Fighting');
		 	parent:: __construct($name, $energyType, $hitPoints, $health, $attacks, $weakness, $resistance);

		}

		public function __toString() {
	        return json_encode($this);
	    }
	}
?>