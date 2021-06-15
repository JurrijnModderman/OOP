<?php
	class Resistance {
		public $resistanceValue;
		public $energyType;

		public function __construct($resistanceValue, $energyType) {
			$this->resistanceValue = $resistanceValue;
			$this->energyType = $energyType;
		}
	}
