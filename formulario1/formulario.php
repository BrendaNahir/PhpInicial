<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="procesar_formulario.php" method="POST" >
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombreInput" id="nombre">
        <br>
        <label for="cursos">Cursos:</label>
        <select name="cursosInput" id="cursos">
            <option value="" selected disabled>Select</option>
            <option value="PHP">Cur - PHP</option>
            <option value="MySql">Cur - MySql</option>
            <option value="Laravel">Cur - Laravel</option>
            <option value="VueJS">Cur - VueJS</option>
        </select>
        <br>
        <button type="submit">Enviar Formulario</button>
        <br>
        <button type="reset">Limpiar Formulario</button>

    </form>
    
</body>
</html>