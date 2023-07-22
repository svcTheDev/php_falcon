<?php 

//  $_SERVER['REQUEST_METHOD'] --> Esto es el método de envío 
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    echo 'si get';
} else {
    echo 'no get';
}


?>
    