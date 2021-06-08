<?php
	class Charmeleon extends Pokemon {

		public function __construct($name) {
			$energyType = [new Energytype(energyTypeName : 'Fire', energyTypeValue : 'Fire')];
			$hitPoints = 60;
			$health = 60;
			$attacks = [new Attack(attack : 'Head Butt', damage : 10), new Attack(attack : 'Flare', damage : 30)];
			$weakness = new Weakness(weaknessMultiplier : 2, weaknessEnergyType : 'Water');
		 	$resitance = new Resistance(resistanceValue : 10, resistanceEnergyType : 'Lightning');
			parent:: __construct($name, $energyType, $hitPoints, $health, $attacks, $weakness, $resitance);

	   }

		public function __toString() {
	        return json_encode($this);
	    }
	}
?>