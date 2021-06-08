<?php
	class Weakness {
		public $weaknessMultiplier;
		public $weaknessEnergyType;

		public function __construct($weaknessMultiplier, $weaknessEnergyType) {
			$this->weaknessMultipier = $weaknessMultiplier;
			$this->weaknessEnergyType = $weaknessEnergyType;
		}


		public function __toString() {
			return json_encode($this);
		}

	}
?>