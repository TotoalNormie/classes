<?php

class Cat {
    public $name;
    public $age = 0;
    function birthday() {
        $this->age++;
    }
    static function meow() {
        echo "meow!";
    }
}

?>