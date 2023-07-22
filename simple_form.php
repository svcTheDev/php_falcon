<?php 
  if (isset($_POST['submit'])) {
      $name = $_POST['nombre'];
      $correo = $_POST['correo'];
    if (!empty($name)) {
        $name = trim($name); // Quita espacios al principio y al final
        $name = htmlspecialchars($name); // quita cualquier caracter especial
        $name = stripslashes($name); // quita simbolos


        $name = filter_var($name, FILTER_SANITIZE_STRING);
        echo "tu nombre es: $name <br />";
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
        <br>
        <br>
        <input type="submit" name="submit">
    </form>
</body>
</html>