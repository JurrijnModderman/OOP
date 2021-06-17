<?php

/**
 * This class represents an EasterEgg.
 * 
 * @author Jurn de Ruijter
 */
class EasterEgg 
{
    // constants
    const COLORS = ['red', 'blue', 'yellow', 'green', 'purple', 'pink'];
    const FLAVOURS = ['white', 'dark', 'milk', 'caramel'];

    public $color;
    public $flavour;

    // on a scale of 0 to 100 percent.
    public $structuralIntegrity;

    /**
     * Construct EasterEgg with random color and flavour.
     */ 
    public function __construct() {
        $this->color = self::COLORS[array_rand(self::COLORS)];
        $this->flavour = self::FLAVOURS[array_rand(self::FLAVOURS)];

        $this->generateStructuralIntegrity();
    }

    /**
     * Generate structural integrity.
     */
    private function generateStructuralIntegrity() {
        $randmax = 9999;
        
        do {
            $u1 = rand(0, $randmax) / $randmax;
            $u2 = rand(0, $randmax) / $randmax;                   
            
            $x = sqrt(-2 * log($u1)) * cos(2 * pi() * $u2);
        } while (strval($x) == "1.#INF" or strval($x) == "-1.#INF");
        
        // the check has to be done cause sometimes (1:10000)
        // values such as "1.#INF" occur and i dont know why
        $this->structuralIntegrity = $x;
    }

    public function setColor() {
        $this->color = self::COLORS[array_rand(self::COLORS)];
    }

    public function __toString() {
        return sprintf('EasterEgg: %s - %s', $this->color, $this->flavour);
    }
}