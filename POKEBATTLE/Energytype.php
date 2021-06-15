<?php 
	class Energytype {
		public $energyTypeName;
		public $energyTypeValue;

		public function __construct($energyTypeName, $energyTypeValue) {
			$this->energyTypeName = $energyTypeName;
			$this->energyTypeValue = $energyTypeValue;
		}
	}
