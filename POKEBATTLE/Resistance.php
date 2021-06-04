<?php
	class Resistance {
		public $resistanceValue;

		public function __construct($resistanceValue) {
			$this->resistanceValue = $resistanceValue;
		}

		public function __toString() {
			return json_encode($this);
		}
	}
?>