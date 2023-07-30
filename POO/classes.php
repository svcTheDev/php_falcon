<?php Class Fruit {
    // Properties = variables
       public $name;
       public $color;
    // Methods = functions 
    function __construct($name) {
        $this->name = $name  . ' ';
    }

    function get_name() {
        return $this->name;
    }

    function set_color($color) {
        $this->color = $color . ' cap';
    }

    function get_color() {
        // $this->color + $this->name;
        return $this->color; 
    }
}

$apple = new Fruit('apple');

echo $apple->get_name();

?>