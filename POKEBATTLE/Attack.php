<?php
	class Attack extends Pokemon {
		public $attackName;
		public $attackDamage;

		public function __construct($attackName, $attackDamage) {
			$this->attackName = $attackName;
			$this->attackDamage = $attackDamage;
		}

		public function __toString() {
	        return json_encode($this);
	    }
	}
?>