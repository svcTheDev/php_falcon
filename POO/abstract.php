<?php 

    abstract class Car {
        public $show = '';
        abstract function intro () : string;
    }
    

    class audi extends Car {
        function intro () : string {
            $this->show = 'what the hell';
            return $this->show;
        }

        function show() {
            echo 'hola ' . $this->show;
        }
    }

    $newCar = new audi();
    $newCar->intro();
    $newCar->show();

?>