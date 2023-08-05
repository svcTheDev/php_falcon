<?php 
    class Fruits {
        public $name;
        public $color;

        function __construct ($name, $color) {
            $this->name = $name;
            $this->color = $color;
        }

        private function intro () {
            echo "this $this->name is $this->color";
        }

        function introFromHere() {
            $this->intro();
        }

        
    }

    class Apple extends Fruits {
        function question () {
            echo " and what a weird fruit";
        }


    }

    $apple = new Apple ('apple', 'red');
    $fruits = new Fruits('apple', 'red');
    $fruits->introFromHere();
    // $apple->question();
?>