<?php 
	require 'Pokemon.php';
	require 'Energytype.php';
	require 'Attack.php';

	$pokemon = new Pokemon('Pikachu', 'lightning', 40, 100, 1, 2, 4, 'attack');
	echo $pokemon;
?>