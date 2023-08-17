<?php 

session_start();



?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="css/custom.css">
</head>
<body>

    <?php 
        if ($_SESSION) {
            ?>
            <h1 class="text-center mt-3"> Ahora tienes acceso a la página</h1> 
            <h1 class="text-center mt-3">
            <?php 
            echo $_SESSION['username'];
            ?> 
            </h1>
    
        <p class="text-center m-5">
        El "secreto de la vida" es un concepto filosófico y existencial que ha sido objeto de especulación y reflexión a lo largo de la historia. No hay una respuesta única ni definitiva a esta pregunta, ya que la interpretación de la vida puede variar según las creencias, perspectivas y experiencias de cada individuo.
        </br>
        </br>
        Para algunos, el secreto de la vida puede estar relacionado con encontrar el propósito, la felicidad, el conocimiento o el significado en sus vidas. Para otros, podría estar en la búsqueda de la conexión con otros seres humanos, la naturaleza o lo espiritual.
        </br>

        <p class="text-white text-center mt-3">
           ¿Ya te vas?
            <a href="all_views/destroy.php" class="lf--forgot"> 
            Salir de la página</a>
        </p>


    <?php
        } else {
            echo 'no has iniciado sesion';
        }
    ?>
</body>
</html>
