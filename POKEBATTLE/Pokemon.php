<?php 
	class Pokemon {
		static $populationPokemons;
		public $name;
		public $energyType;
		public $hitPoints;
		public $health;
		public $attacks;
		public $weakness;
		public $resistance;

		public function __construct($name, $energyType, $hitPoints, $health, $attacks, $weakness, $resistance) {
        	$this->name = $name;
        	$this->energyType = $energyType;
        	$this->hitPoints = $hitPoints;
        	$this->health = $health;
        	$this->attacks = $attacks;
        	$this->weakness = $weakness;
        	$this->resistance = $resistance;
			self::$populationPokemons++;
    	}

		public function Attack($target, $attackNumber) {
			echo '<br>' . $this->name . ' Attacks ' . $target->getName() . ' with a ' . $this->attacks[$attackNumber]->attackName . ' attack ' . '<br>';
			$target->receiveDamage($this->attacks[$attackNumber], $this->energyType);
		}

		public function receiveDamage($attack, $energyType) {
			echo $this->name . ' health : ' . $this->health . ' / ' . $this->hitPoints . '<br>';
			echo $this->name . ' receives damage : ' . $attack->attackDamage . ' with energyType : ' . $energyType->energyTypeName . '<br>';
			if ($energyType == $this->weakness->weaknessEnergyType) {
				$attack->attackDamage *= $this->weakness->weaknessMultiplier;
			}
			if ($energyType == $this->resistance->resistanceEnergyType) {
				$attack->attackDamage -= $this->resistance->resistanceValue;
			}
			echo $this->name . ' health : ' . ($this->health -= $attack->attackDamage) . ' / ' . $this->hitPoints . '<br>';
			if ($this->health <= 0) {
				self::$populationPokemons--;
			}
		}

		public static function getPopulation() {
			//check how many pokemons are made
			// check if the health of a pokemon is less then 0, then population--
			// echo result
			return self::$populationPokemons;
		}

		public function getName() {
			return $this->name;
		}

		public function __toString() {
	        return json_encode($this);
	    }
	}	

?>