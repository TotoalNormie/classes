<?php
class Car {
    public $brand;

    function __construct($brand) {
        $this->brand = $brand;
        echo $this->brand . " is alive<br>";
    }

    function __destruct() {
        echo $this->brand . " is destroyed<br>";
    }

    static function makeNoise() {
        echo "Beep Beep!";
    }
}
?>