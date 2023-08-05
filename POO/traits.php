<?php 

    trait message1 {
        public function message1 () {
            echo 'hola';
        }
    }
    trait message2 {
        public function message2 () {
            echo ' tarola';
        }
    }

    class greeting {
        use message1;
        use message2;
    }

    $welcome = new greeting();
    $welcome->message1();
    $welcome->message2();
?>