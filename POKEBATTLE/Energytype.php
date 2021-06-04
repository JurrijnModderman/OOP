<?php 
	class Energytype {
		public $energyTypeName;
		public $energyTypeValue;

		public function __construct($energyTypeName, $energyTypeValue) {
			$this->energyTypeName = $energyTypeName;
			$this->energyTypeValue = $energyTypeValue;
		}

		public function __toString() {
	        return json_encode($this);
	    }
	}
?>