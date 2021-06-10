<?php
require 'Person.php';
$jurrijn = new Person(age: 15, name: 'Jurrijn', occupation: 'softwareEngineer');
echo $jurrijn->introduce();
echo Person::SPECIES;