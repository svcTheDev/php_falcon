<?php

    interface Animal {
        function makeSound();
    }

    class Cat implements Animal {
        function __construct() {
            // Empty constructor, no specific initialization needed
        }
        
        function makeSound() {
            echo "meow";
        }
    }

    $cat = new Cat();
    $cat->makeSound();
?>