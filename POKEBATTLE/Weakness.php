<?php
	class Weakness {
		public $weaknessMultiplier;

		public function __construct() {
			$this->weaknessMultipier = $weaknessMultiplier;
		}


		public function __toString() {
			return json_encode($this);
		}

	}
?>