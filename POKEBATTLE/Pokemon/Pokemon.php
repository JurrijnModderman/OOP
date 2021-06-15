<?php 
	namespace Pokemon;
	class Pokemon {
		public static $populationPokemons;
		private $name;
		private $energyType;
		private $hitPoints;
		private $health;
		private $attacks;
		private $weakness;
		private $resistance;
		/**
		 * magic constructor method to prepare the new objects for use, often accepting arguments that the constructor uses to set required member variables.
		 * @param string $name
		 * @param string $energyType
		 * @param int $hitPoints
		 * @param string $attacks
		 * @param string $weakness
		 * @param string $resistance 
		 */
		public function __construct($name, $energyType, $hitPoints, $attacks, $weakness, $resistance) {
        	$this->name = $name;
        	$this->energyType = $energyType;
        	$this->hitPoints = $hitPoints;
        	$this->health = $hitPoints;
        	$this->attacks = $attacks;
        	$this->weakness = $weakness;
        	$this->resistance = $resistance;
			self::$populationPokemons++;
    	}
		/**
		 * method to start an attack
		 * @param string $target
		 * @param int $attackNumber 
		 */
		public function attack($target, $attackNumber) {
			echo '<br>' . $this->name . ' Attacks ' . $target->getName() . ' with a ' . $this->attacks[$attackNumber]->name . ' attack ' . '<br>';
			$target->receiveDamage($this->attacks[$attackNumber], $this->energyType);
		}
		/**
		 * method to calculate the amount of damage the attack method has done
		 * @param string $attack
		 * @param string $energyType 
		 */
		private function receiveDamage($attack, $energyType) {
			echo $this->name . ' health : ' . $this->health . ' / ' . $this->hitPoints . '<br>';
			echo $this->name . ' receives damage : ' . $attack->damage . ' with energyType : ' . $energyType->name . '<br>';
			if ($energyType == $this->weakness->energyType) {
				$attack->attackDamage *= $this->weakness->weaknessMultiplier;
			}
			else if ($energyType == $this->resistance->energyType) {
				$attack->attackDamage -= $this->resistance->resistanceValue;
			}
			echo $this->name . ' health : ' . ($this->health -= $attack->damage) . ' / ' . $this->hitPoints . '<br>';
			if ($this->health <= 0) {
				self::$populationPokemons--;
			}
		}
		/**
		 * method to check how many pokemons are alive
		 */
		public static function getPopulation() {
			return self::$populationPokemons;
		}
		/**
		 * method to get and return the name
		 */
		private function getName() {
			return $this->name;
		}
		/**
		 * method to convert everything to a string
		 */
		public function __toString() {
	        return json_encode($this);
	    }
	}
