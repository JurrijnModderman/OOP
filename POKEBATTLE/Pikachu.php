<?php
	class Pikachu extends Pokemon {
		public $name = 'Pikachu';
		public $energyType = 'lightning';
		public $hitPoints = 40;
		public $health = 100;
		public $attacks = 1;
		public $weakness = 2;
		public $resitance = 4;

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