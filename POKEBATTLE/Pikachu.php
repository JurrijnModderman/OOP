<?php
	class Pikachu extends Pokemon {
		public $name = 'Pikachu';
		public $energyType = 'Lightning';
		public $hitPoints = 60;
		public $health = 100;
		public $attacks = 2;
		public $weakness = 1.5;
		public $resitance = 20;

		public function __construct($name, $energyType, $hitPoints, $health, $attacks, $weakness, $resitance) {
        	$this->name = $name;
        	$this->energyType = $energyType;
        	$this->hitPoints = $hitPoints;
        	$this->health = $health;
        	$this->attacks = $attacks;
        	$this->weakness = $weakness;
        	$this->resitance = $resitance;
    	}

		public function __toString() {
	        return json_encode($this);
	    }
	}
?>