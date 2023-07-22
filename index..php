

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="receive.php" method="get">
    <input type="text" placeholder="Nombre:" name="nombre">
    <br>
    <br>

    <label for="hombre">Hombre</label>
    <input type="radio" name="sexo" value="hombre" id="hombre">
    <br>
    <br>

    <label for="mujer">Mujer</label>
    <input type="radio" name="sexo" value="mujer" id="mujer">
    <br>
    <br>

    <select name="year" id="year">
        <option value="2000">2000</option>
        <option value="2001">2001</option>
        <option value="2002">2002</option>
    </select>

    <br>
    <br>

    <label for="terminos">Aceptas los Terminos?</label>
    <input type="checkbox" name="terminos" id="terminos" value="ok">
    <br>
    <br>
    <input type="submit" value="Enviar" nnam>
</form>

</body>

</html>