<?php 

    class Animal {
        public $name;
        public $color;

        function __construct($name, $color) 
        {
            $this->name = $name;
            $this->color= $color;
            
        }
    }

    class Cat extends Animal {
        function makeSound() {
            echo "the $this->name makes meow and is color $this->color";
        }
    }

    $cat = new Cat('cat', 'black');
    $cat->makeSound();
?>