<?php 
	require 'Pokemon.php';
	require 'Energytype.php';
	require 'Attack.php';
	require 'Pikachu.php';
	require 'Charmeleon.php';
	require 'Resistance.php';
	require 'Weakness.php';

	$Pikachu = new Pikachu('Pikachu');
	echo $Pikachu;

	// $Energytype = new Energytype('water', 40);
	// echo $Energytype;

	// $attack = new Attack('the punisher', 60);
	// echo $attack;
?>