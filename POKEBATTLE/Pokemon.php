<?php 
	class Pokemon {
		static $populationPokemons;
		private $name;
		private $energyType;
		private $hitPoints;
		private $health;
		private $attacks;
		private $weakness;
		private $resistance;
		//magic constructor method to prepare the new objects for use, often accepting arguments that the constructor uses to set required member variables.
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
		//method to start an attack
		public function Attack($target, $attackNumber) {
			echo '<br>' . $this->name . ' Attacks ' . $target->getName() . ' with a ' . $this->attacks[$attackNumber]->attackName . ' attack ' . '<br>';
			$target->receiveDamage($this->attacks[$attackNumber], $this->energyType);
		}
		//method to calculate the amount of damage the attack method has done
		private function receiveDamage($attack, $energyType) {
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
		//method to check how many pokemons are alive
		public static function getPopulation() {
			//check how many pokemons are made
			// check if the health of a pokemon is less then 0, then population--
			// echo result
			return self::$populationPokemons;
		}
		//method to get and return the name
		private function getName() {
			return $this->name;
		}
		//method to convert everything to a string
		public function __toString() {
	        return json_encode($this);
	    }
	}
