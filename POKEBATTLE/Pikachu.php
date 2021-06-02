<?php
	class Pikachu extends Pokemon {

		public function __construct($name) {
		 	$energyType = 'lightning';
		 	$hitPoints = 60;
		 	$health = 100;
		 	$attacks = [];
		 	$weakness = 1.5;
		 	$resitance = 20;
		 	parent:: __construct($name, $energyType, $hitPoints, $health, $attacks, $weakness, $resitance);

		}

		public function __toString() {
	        return json_encode($this);
	    }
	}
?>