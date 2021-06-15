<?php
	class Resistance {
		public $resistanceValue;
		public $resistanceEnergyType;

		public function __construct($resistanceValue, $resistanceEnergyType) {
			$this->resistanceValue = $resistanceValue;
			$this->resistanceEnergyType = $resistanceEnergyType;
		}
	}
