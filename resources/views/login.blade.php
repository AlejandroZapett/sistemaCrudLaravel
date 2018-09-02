<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <div class="box" aling="center">
        <p aling="center"><h2>Sistema CRUD</h2></p>
        <p aling="center"><h3>Usuarios</h3></p>
        <form action="{{ url('/login') }}" method="POST" aling="center">
            <p>
                <label for="nombre">Nombre: </label>
                <input type="text" name="nombre" />
            </p>
            <p>
                <label for="contrasenia">Contraseña: </label>
                <input type="password" name="contrasenia" />
            </p>
            <p>
                <input type="submit" value="Enviar" />
            </p>
        </form>
        <form action="{{ url('/registrarse') }}" method="GET" aling="center">
            <p>
                <input type="submit" value="Registrarse"/>
            </p>
        </form>
    </div>
</body>
</html>