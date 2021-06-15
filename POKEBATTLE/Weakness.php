<?php
	class Weakness {
		public $multiplier;
		public $energyType;

		public function __construct($multiplier, $energyType) {
			$this->multiplier = $multiplier;
			$this->energyType = $energyType;
		}
	}
