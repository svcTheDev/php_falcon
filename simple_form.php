<?php 
  if (isset($_POST['submit'])) {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $errors = '';
    if (!empty($name)) {
        $name = trim($name); // Quita espacios al principio y al final
        $name = htmlspecialchars($name); // quita cualquier caracter especial
        $name = stripslashes($name); // quita simbolos


        // El contenido de la variable se filtra cualquier signo para que solo sea una cadena de texto
        $name = filter_var($name, FILTER_SANITIZE_STRING);
        echo "tu nombre es: $name <br />";
    } else {
        $errors .= 'Por favor agrega un nombre';
    }

    if (!empty ($email)) {

        echo "Tu correo es $email";
    } else {
        $errors .= 'Por favor agrega un correo';
    }
  }


  
  ?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?> " method="post">
        <input type="text" name="name" placeholder='Nombre'>
        <br>
        <br>
        <input type="email" name="email" placeholder='Correo'>

        <?php 
            if(!empty($errors)):
                ?>
            <div class="error">
                <?php echo $errors;?> 
            </div>
        <?php 
            endif;
        ?>


        <br>
        <br>
        <input type="submit" name="submit">
    </form>
</body>
</html>