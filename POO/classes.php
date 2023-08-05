<?php Class Fruit {
    // Properties = variables
       public $name;
       public $color;
    // Methods = functions 
    function __construct($name) {
        $this->name = $name  . ' ';
    }

    reconocimiento del hardware y los detalles de cada tecnología, práctica de desmontaje y montaje de equipos (escritorio, todo en uno y portátiles), reparaciones o cambios comunes, tipos de arquitecturas computadores escritorio, todo en uno y portátiles, compatibilidad de perifericos y nuevas tecnologias, prácticas de red y conexiones eléctricas (dc y ac) y multímetro, mantenimiento, cambio crema y limpieza, instalación y mantenimiento software, recuperar datos, limpieza de virus, programas para optimizar el windows, sitios de referencia para estar actualizado

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
