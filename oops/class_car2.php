<?php

    // class defination ........
    class Car {

        // class method.....
        var $wheels = 4;
        function moveWheels() {
            echo "Move the wheels!";
        }
    }


    class Truck extends Car {
        var $wheels = 10;

    }

    $obj = new Truck();

    if(method_exists("Car", "moveWheels")) {
        echo "The method exsists! <br>";
        echo $obj->wheels;

    } else {
        echo "No it does not!";
    }

?>