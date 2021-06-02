<?php 
	class Energytype {
		public $energytypeName;
		public $energytypeValue;

		public function __construct($energytypeName, $energytypeValue) {
			$this->energytypeName = $energytypeName;
			$this->energytypeValue = $energytypeValue;
		}

		public function __toString() {
	        return json_encode($this);
	    }
	}
?>