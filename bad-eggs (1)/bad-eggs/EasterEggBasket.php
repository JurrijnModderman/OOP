<?php

/**
 * This class represents an EasterEggBasket.
 *  
 * @author Jurn de Ruijter
 */
class EasterEggBasket 
{

    private $goodEggs = array();
    private $badEggs = array();

    /**
     * Construct EasterEggBasket.
     * 
     * @param $number Number of easter eggs to generate (default 10).
     */ 
    public function __construct($number = 25) {
        for ($i=0; $i < $number; $i++) {
            $egg = new EasterEgg();

            if ($egg->structuralIntegrity > 0) {
                array_push($this->goodEggs, $egg);
            } else {
                array_push($this->badEggs, $egg);
            }
        }
    }

    /**
     * Return good eggs.
     */
    public function getGoodEggs() {
        return $this->goodEggs;
    }

    /**
     * Return bad eggs.
     */
    public function getBadEggs() {
        return $this->badEggs;
    }
}