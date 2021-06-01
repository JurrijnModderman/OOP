<?php

class Superhero {
	public $name;
	public $gender;
	public $team;
	public $oneline;

	public function __toString() {
        return json_encode($this);
    }
}

public function __construct($name, $gender, $team, $oneliner)
    {
        $this->name = $name;
        $this->gender = $gender;
        $this->team = $team;
        $this->oneliner = $oneliner;
    }

?>