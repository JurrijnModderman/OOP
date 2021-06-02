<?php 
	class Pokemon {
		public $name;
		public $energyType;
		public $hitPoints;
		public $health;
		public $attacks;
		public $weakness;
		public $resitance;

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