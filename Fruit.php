<?php

include_once "Seed.php";
abstract class Fruit
{
    protected array $seeds  = [];
    function __construct(
        public string $color,
        protected float $weight,
        protected int $seedCount,
        float $seedDiameter,
        float $seedWeight,
        string $seedColor,
    ) {
        for($i = 0; $i < $seedCount; $i++) {
            $this->seeds[] = new Seed($seedDiameter, $seedWeight, $seedColor);
        }
    }
    function ripen() {

    }

    static abstract function becomeHealthy();
}

?>