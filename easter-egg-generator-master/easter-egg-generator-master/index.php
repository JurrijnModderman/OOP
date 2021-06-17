<?php

    spl_autoload_register(function ($class_name) {
        include $class_name . '.php';
    });
?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Easter Egg Generator</title>

  <link rel="stylesheet" href="style.css">

</head>

<body>

<?php
    $basket = new EasterEggBasket();

    echo '<div id="goodEggs"><h1>GOOD EGGS -> structuralIntegrity > 0</h1>';
    foreach ($basket->getGoodEggs() as $egg) {
        echo '<div class="verti-egg" style="background-color: ' . $egg->color . '" data-integrity="' . $egg->structuralIntegrity . '"></div>';
    }
    echo '</div>';

    echo '<div id="badEggs"><h1>BAD EGGS  -> structuralIntegrity 0 or < 0</h1>';
    foreach ($basket->getBadEggs() as $egg) {
        //echo $egg . '<br>';
        echo '<div class="verti-egg" style="background-color: ' . $egg->color . '" data-integrity="' . $egg->structuralIntegrity . '"></div>';
    }
    echo '</div>';
?>

</body>
</html>

