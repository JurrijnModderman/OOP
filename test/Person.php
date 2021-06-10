<?php
    class Person {
        //const(php) HOOFDLETTERS
        const SPECIES = ' Modderman';
        public $age;
        public $name;
        public $occupation;

        public function __construct($age, $name, $occupation) {
            $this->age = $age;
            $this->name = $name;
            $this->occupation = $occupation;
        }

        public function introduce() {
            return 'hi my name is ' . $this->name;
        }

        public function __toString() {
	        return json_encode($this);
	    }
    }