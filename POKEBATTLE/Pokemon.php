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

		public function Attack($target, $attackNumber) {
			echo $this->name . ' Attacks ' . $target->getName() . '<br>';
			$target->receiveDamage(20, 'lightning');
		}

		public function receiveDamage($amountDamage, $energyType) {
			echo $this->name . ' receives damage : ' . $amountDamage . ' with energyType : ' . $energyType . '<br>';
			echo $this->name . ' health : ' . $this->health -= $amountDamage;
			//getweakness
		}

		public function getName() {
			return $this->name;
		}

		public function __toString() {
	        return json_encode($this);
	    }
	}	

?>