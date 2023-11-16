<?php

include_once "Fruit.php";

class Apple extends Fruit {
    static function becomeHealthy() {

    }
    function ripen(): void {
        echo "I'm ready to kill Snow White";
    }
}

?>