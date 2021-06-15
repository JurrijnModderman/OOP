<?php
	class Attack {
		public $name;
		public $damage;

		public function __construct($attack, $damage) {
			$this->name = $attack;
			$this->damage = $damage;
		}
	}
