<?php 
	class Energytype extends Pokemon {
		public $energytypeName;
		public $energytypeValue;

		public function __construct($energytypeName, $energytypeValue) {
			$this->energytypeName = $energytypeName;
			$this->energytypeValue = $energytypeValue;
		}
	}
?>